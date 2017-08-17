import React from 'react';


export default class Gallery extends React.Component{
	constructor(props) {
		super(props);
		this.state = {
			images: [],
			alert: false,
			progressBarSingleProportion: 0,
			progressBarProportion: 0 
		}

		this.getGallery = this.getGallery.bind(this);
		this.uploadBtnHandle = this.uploadBtnHandle.bind(this);
		this.recursiveUpload = this.recursiveUpload.bind(this);
		this.uploadFile = this.uploadFile.bind(this);
		this.getGalleryCallback = this.getGalleryCallback.bind(this);
		this.endOfUpload = this.endOfUpload.bind(this);
		this.deleteImage = this.deleteImage.bind(this);
		
	}

	componentDidMount() {
		this.getGallery();
	}

	getGallery(){
		let xhr = new XMLHttpRequest();
		xhr.open("GET",'/admin/default/get-user-portfolio',true);
		xhr.onload = this.getGalleryCallback;
		xhr.send(null);
	}

	getGalleryCallback(r){
		let response = JSON.parse(r.currentTarget.response);
		this.setState({
			images: response
		})
	}

	setGallery(params, callback){
		let xhr = new XMLHttpRequest();
		xhr.open("GET",'/admin/default/set-user-portfolio?' + params, true);
		xhr.onload = function(r){
			callback(JSON.parse(r.currentTarget.response));
		}
		xhr.send(null)
	}

	deleteImage(e){
		let id = e.currentTarget.id;
		let xhr = new XMLHttpRequest(id);
		let _this = this;
		xhr.open("GET",'/admin/default/delete-portfolio?id='+id,true);
		xhr.onload = this.getGallery;
		xhr.send(null);
	}

	uploadFile(file, filesLength, callback){
		let _this = this;
		let fd = new FormData();
	    fd.append("image", file);
	    
	    let xhr = new XMLHttpRequest();
	    xhr.open('POST', '/upload/resize', true);
	    xhr.onload = (e) => {
	      if (e.currentTarget.status == 200) {
	        callback(e.currentTarget.response);
	      }
	    };

	    xhr.upload.onprogress = function(event) {

	    	let oneFileProportion = 100/filesLength;
	    	let loadedFileProportion = event.loaded*100/event.total;
				let progressBarSingleProportion = oneFileProportion*loadedFileProportion / 100;


				if(event.loaded == event.total){
					_this.setState({
				  	progressBarProportion: _this.state.progressBarProportion + progressBarSingleProportion
				  })
				}else{
				  _this.setState({
				  	progressBarSingleProportion: progressBarSingleProportion
				  })
				}


			}
	    xhr.onerror = () => { console.log("error" + xhr.status); };
	    xhr.upload.onerror = () => { console.log("error" + xhr.status); };
	    xhr.send(fd);

	}

	recursiveUpload(n, files, callback, index = 0){
		if(index < n){

			let _this = this;
			

				// Start Upload function
				this.uploadFile(files[index], files.length, r => {
					let response = JSON.parse(r);
					if(response.error){
						console.error('Upload Error file' + files[index].name);
						index++;
						_this.recursiveUpload(n, files, callback, index);
					}else{
						_this.setGallery("image="+response.src, isSet => {
							if(isSet){
								index++;
								_this.recursiveUpload(n, files, callback, index);
							}
						});
					}			
				})
				// End Upload function

		}else{
			callback();
		}

	}


	// Validate files
	filesValidate(files, callback){
		let i = files.length, 
				allowType = ['image/jpeg', 'image/png'],
				allowedFiles = [],
				forbiddenFiles = [];

		while(i){
			i--;
			if(files[i].size > 10485760 || allowType.indexOf(files[i].type) == -1) { // more 10Mb
				forbiddenFiles.push(files[i]);
			}else{
				allowedFiles.push(files[i]);
			}
			
		}

		callback({
			allowedFiles: allowedFiles,
			forbiddenFiles: forbiddenFiles
			});
	
	}


	endOfUpload(){
		this.getGallery();
		this.setState({
			alert: false,
			progressBarProportion: 0
		})
	}


	handleFile(e){
		this.setState({
			alert: true
		})
		let _this = this;
		this.filesValidate(e.target.files, r => {
				console.log(r);
			_this.recursiveUpload(r.allowedFiles.length, r.allowedFiles, _this.endOfUpload);
		})
	}

	uploadBtnHandle(){
		this.refs.uploadFile.click();
	}

	render(){
		let galleryItemStyle = {
			margin: '10px 0px'
		},
		galleryItemCloseStyle = {
			position: 'absolute',
		    display: 'inline-block',
		    background: '#a0a0a0',
		    width: '20px',
		    height: '20px',
		    textAlign: 'center',
		    borderRadius: '50%',
		    color: 'white',
		    margin: '-10px -10px',
		    cursor: 'pointer'
		}
	
		let progressBarStyle = {
			width: this.state.progressBarProportion + "%"
		}

		return(
			<div>
				
				{ 
					this.state.alert ? 
						(
							<div className="row">
								<div className="col-md-6">
									<div className="progress">
									  <div className="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style={progressBarStyle}>
									  </div>
									</div>
								</div>
								<br/>
							</div>
						) : (
							<div className="row">
								<div className="col-md-6">
									<input type="file" className="hide" accept="image/jpeg,image/png" ref="uploadFile" onChange={this.handleFile.bind(this)} multiple />
									<span className="btn btn-default" onClick={this.uploadBtnHandle} ><i className="fa fa-upload"></i> Загрузить фотографии (png, jpg до 10мб)</span>
								</div>
							</div>
						)
				}
					
				<br/>
				<div className="row">
					<div className="col-md-12">
						<p> Фтографий в портфолио: {this.state.images.length}</p>
					</div>
				</div>
				<div ref="wrapper" className='row'>

				{ 
					this.state.images.map(item => {
						return (
							<div className="col-md-3 galleryItem" style={galleryItemStyle}>
								<span style={galleryItemCloseStyle} onClick={this.deleteImage} id={item.id}><i className="fa fa-close"></i></span>
								<img className='img-thumbnail' src={"/uploads/300x200/"+item.img} /> 
							</div>
							)
					})
				}
				</div>
				
			</div>
			)
	}
}