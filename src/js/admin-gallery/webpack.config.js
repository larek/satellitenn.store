module.exports = {
    entry: './index.jsx',
    output: {
        filename: '../../../public/js/admin-gallery.js'
    },
    module: {
        loaders: [{
            test: /\.jsx$/,
            exclude: /node_modules/,
            loader: 'babel-loader',
            query: {
                presets: ['react', 'es2015']
            }
        }]
    }
}