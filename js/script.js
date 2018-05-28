$(document).ready(function() {

  // Define vars
  var boxes,
    places,
    active_box = null,
    active_place = null;

  // Open modal window with rules 
  $('.btn-rules').click(function() {
    $('.modalRules').modal();
  });

  // Get data from the server
  $.post('/rentbox/default/getcalc').done(function(res) {
    var dataCalc = $.parseJSON(res);
    boxes = {
      400: {
        'name': 'Satellite 400',
        1: dataCalc['G'],
        2: dataCalc['H'],
        3: dataCalc['I']
      },
      460: {
        'name': 'Satellite 460',
        1: dataCalc['A'],
        2: dataCalc['B'],
        3: dataCalc['C']
      },
      520: {
        'name': 'Satellite 520',
        1: dataCalc['D'],
        2: dataCalc['E'],
        3: dataCalc['F']
      },
      900: {
        'name': 'Thule Atlantis 900',
        1: dataCalc['N'],
        2: dataCalc['O'],
        3: dataCalc['P']
      },
      trailer: {
        'name': 'Прицеп грузовой для легкового автомобиля',
        1: 500,
        2: 500,
        3: 500
      }
    };

    places = {
      1: {
        'name': 'Да, мне нужны поперечины',
        1: dataCalc['J'],
        2: dataCalc['K']
      },
      2: {
        'name': 'Нет, мне не нужны поперечины',
        1: dataCalc['L'],
        2: dataCalc['M']
      }
    };
  });

  // Click to button in product item in step 1
  $('.btn-color').click(function() {
    if ($(this).hasClass('btn-primary')) {
      $('.btn-color').removeClass('btn-primary');
      $('.btn-color').html('Выбрать');
      $(this).addClass('btn-default');
      active_box = null;
    } else {
      $('.btn-color').removeClass('btn-primary');
      $('.btn-color').html('Выбрать');
      $(this).addClass('btn-primary');
      $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
      active_box = $(this).attr('id');
    }
  });

  // Click to button in step 2
  $('.btn-place').click(function() {
    if ($(this).hasClass('btn-primary')) {
      $('.btn-place').removeClass('btn-primary');
      $('.btn-place').html('Выбрать');
      $(this).addClass('btn-default');
      active_place = null;
    } else {
      $('.btn-place').removeClass('btn-primary');
      $('.btn-place').html('Выбрать');
      $(this).addClass('btn-primary');
      $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
      active_place = $(this).attr('id');
    }
  });

  // Daterange init
  $('.input-daterange').datepicker({
    'language': 'ru-RU',
    'autoclose': true
  });

  // Convert date
  function toDate(dateStr) {
    var parts = dateStr.split('.');
    return new Date(parts[2], parts[1] - 1, parts[0]).getTime();
  }

  // Click to final button. Check date, active product, rules and show calculate result
  $('.btn-calc').click(function (){
    if (active_box !== null && (active_place !== null || active_place == null && active_box == 'trailer') && $('.date-to').val() != '' && $('.date-from').val() !== ''){
      var result = Calculate();
      $('.priceRent').html(result.priceRent + ' руб.');
      $('.activeBox').html(boxes[active_box]['name']);
      $('.activePlace').html(active_box == 'trailer' ? '' : places[active_place]['name']);
      $('.rangeDay').html(result.rangeDay);
      $('.resultCalculator').modal();
    } else {
      $('.alertContent').html('Чтобы узнать стоимость и забронировать автобокс, выберете необходимый бокс, место установки и даты аренды');
      $('.modalAlert').modal();
    }
  });

  // Set order
  $('.btn-rent').click(function() {
    if ($('.userName').val() !== '' && $('.userPhone').val() !== '') {
      var result = Calculate();
      result['userName'] = $('.userName').val();
      result['userPhone'] = $('.userPhone').val();
      result['userMarka'] = $('.userMarka').val();
      result['userModel'] = $('.userModel').val();
      result['userYear'] = $('.userYear').val();
      $.post(active_box == 'trailer' ? '/rentbox/default/send-trailer' : '/rentbox/default/send', { 'result': result }).done(function(data) {
        if (data == '1') {
          $('.resultCalculator').modal('hide');
          $('.alertContent').html('Заявка на бронирование принята. В ближайшее время наш сотрудник свяжется с Вами для уточнения деталей и подтверждения брони');
          $('.modalAlert').modal();
        }
      });
    } else {
      alert('Заполните имя и телефон'); 
    }
  });

  // calculate and return object
  function Calculate() {
    // Define vars
    var dateTo = toDate($('.date-to').val()),
      dateFrom = toDate($('.date-from').val()),
      range = dateFrom - dateTo,
      rangeDay = range / (1000 * 60 * 60 * 24),
      priceCategory,
      placeCategory,
      priceBox,
      pricePlace,
      data;

    if (rangeDay < 6) {
      priceCategory = 1;
    } else if (rangeDay > 5 && rangeDay < 16) {
      priceCategory = 2;
    } else {
      priceCategory = 3;
    }


    rangeDay < 31 ? placeCategory = 1 : placeCategory = 2;

    if(active_box !== 'trailer'){
      if(priceCategory == 1){
        priceBox = boxes[active_box][priceCategory];
      }else if(priceCategory == 2){
        priceBox = boxes[active_box][priceCategory] * rangeDay;
      }else{
        priceBox = (boxes[active_box][2] * 15) + (boxes[active_box][3]*(rangeDay-15));
      }
      pricePlace = places[active_place][placeCategory] * rangeDay;
    }

    data = active_box == 'trailer' ? {
      'rangeDay': rangeDay == 0 ? 1 : rangeDay,
      'priceRent': rangeDay == 0 ? 500 : 500*rangeDay,
      'rangeDates': $('.date-to').val() + ' - ' + $('.date-from').val(),
    } : {
      'priceCategory': priceCategory,
      'active_box': active_box,
      'active_place': active_place,
      'active_placeName': places[active_place]['name'],
      'priceBox': priceBox,
      'pricePlace': pricePlace,
      'rangeDay': rangeDay == 0 ? 1 : rangeDay,
      'rangeDates': $('.date-to').val() + ' - ' + $('.date-from').val(),
      'priceRent': priceBox + pricePlace,
    };

    return data;
  }

});
