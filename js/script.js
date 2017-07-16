$(document).ready(function() {

    $(".btn-rules").click(function() {
        $(".modalRules").modal();
    });

    $('#datepicker2').datepicker({
        'language' : 'ru-RU',
        'multidate': 2
    });

    $('#datepicker2').on("changeDate", function(){
        $('#my_hidden_input').val(
            $('#datepicker2').datepicker('getFormattedDate')
        );
    });


    


    var boxes;
    var places;

    $.post('/rentbox/default/getcalc').done(function(res) {
        dataCalc = $.parseJSON(res);
        console.log(dataCalc);
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
            }
        }

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
        }
    });



    var active_box = null;
    var active_place = null;



    $(".btn-color").click(function() {

        if ($(this).hasClass('btn-primary')) {
            $(".btn-color").removeClass('btn-primary');
            $(".btn-color").html("Выбрать");
            $(this).addClass('btn-default');
            active_box = null;
        } else {
            $(".btn-color").removeClass('btn-primary');
            $(".btn-color").html("Выбрать");
            $(this).addClass('btn-primary');
            $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
            active_box = $(this).attr('id');
        }
    });

    $(".btn-place").click(function() {

        if ($(this).hasClass('btn-primary')) {
            $(".btn-place").removeClass('btn-primary');
            $(".btn-place").html("Выбрать");
            $(this).addClass('btn-default');
            active_place = null;
        } else {
            $(".btn-place").removeClass('btn-primary');
            $(".btn-place").html("Выбрать");
            $(this).addClass('btn-primary');
            $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
            active_place = $(this).attr('id');
        }

    });


    $('.input-daterange').datepicker({
        'language': 'ru-RU',
        'autoclose': true
    });



    $(".btn-rent").click(function() {

    });

    function toDate(dateStr) {
        var parts = dateStr.split(".");
        return new Date(parts[2], parts[1] - 1, parts[0]).getTime();
    }

    $(".btn-calc").click(function checkCalculation() {

        if (active_box !== null && active_place !== null && $(".date-to").val() != "" && $(".date-from").val() !== "" && $(".checkRules").is(":checked")) {
            $(".resultCalculator").modal();
            var result = Calculate();
            console.log(result);
            $(".priceRent").html(result.priceRent + " руб.");
            $(".activeBox").html(boxes[active_box]['name']);
            $(".activePlace").html(places[active_place]['name']);
            $(".rangeDay").html(result.rangeDay);
        } else {
            $(".alertContent").html('Чтобы узнать стоимость и забронировать автобокс, выберете необходимый бокс, место установки и даты аренды и согласитесь с условиями аренды');
            $(".modalAlert").modal();

        }
    });

    $(".btn-rent").click(function() {

        if ($(".userName").val() !== '' && $(".userPhone").val() !== "") {
            var result = Calculate();
            result['userName'] = $(".userName").val();
            result['userPhone'] = $(".userPhone").val();
            result['userMarka'] = $(".userMarka").val();
            result['userModel'] = $(".userModel").val();
            result['userYear'] = $(".userYear").val();
            $.post('/rentbox/default/send', { 'result': result }).done(function(data) {
                console.log(data);
                if (data == "1") {
                    $(".resultCalculator").modal('hide');
                    $(".alertContent").html('Заявка на бронирование принята. В ближайшее время наш сотрудник свяжется с Вами для уточнения деталей и подтверждения брони');
                    $(".modalAlert").modal();
                }
            });
        } else {
            console.log('Заполните имя и телефон');
        }

    });

    function Calculate() {
        var dateTo = toDate($(".date-to").val());
        var dateFrom = toDate($(".date-from").val());
        var range = dateFrom - dateTo;
        var rangeDay = range / (1000 * 60 * 60 * 24);

        if (rangeDay < 6) {
            priceCategory = 1;
        } else if (rangeDay > 5 && rangeDay < 16) {
            priceCategory = 2;
        } else {
            priceCategory = 3;
        }


        rangeDay < 31 ? placeCategory = 1 : placeCategory = 2;

        // priceBox = (priceCategory == 1 ? boxes[active_box][priceCategory] : boxes[active_box][priceCategory] * rangeDay);

        if(priceCategory == 1){
            priceBox = boxes[active_box][priceCategory];
        }else if(priceCategory == 2){
            priceBox = boxes[active_box][priceCategory] * rangeDay;
        }else{
            priceBox = (boxes[active_box][2] * 15) + (boxes[active_box][3]*(rangeDay-15));
        }

        pricePlace = places[active_place][placeCategory] * rangeDay;

        var data = {
            'priceCategory': priceCategory,
            'active_box': active_box,
            'active_place': active_place,
            'active_placeName': places[active_place]['name'],
            'priceBox': priceBox,
            'pricePlace': pricePlace,
            'rangeDay': rangeDay,
            'rangeDates': $(".date-to").val() + ' - ' + $(".date-from").val(),
            'priceRent': priceBox + pricePlace,
        }

        return data;
    }


    // Owl Carousel
    var owl = $("#owl-demo");

    owl.owlCarousel({
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1000, 5], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        scrollPerPage: true,
        // Navigation
        navigation: false,
        navigationText: ["prev", "next"],
        rewindNav: true,
        scrollPerPage: false,
        autoPlay: 3000
    });

    // Custom Navigation Events
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })
    $(".play").click(function() {
        owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    })
    $(".stop").click(function() {
            owl.trigger('owl.stop');
        })
        // End Owl Carousel

    $(".fancybox").fancybox();


});
