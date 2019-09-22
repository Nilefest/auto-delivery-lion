$(function () {

    $('#slider').rbtSlider({
        'height': '100vh',
        'dots': true,
        'arrows': false,
        'auto': 5
    });

    $('a[href^="http"], a[href^="ftp"]').not('a[href^="http://adlion.info//"]').click(function () {
        window.open(this.href, "");
        return false;
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
});

$('#search_auto').keyup(function (e) {
    if (e.keyCode === 13) {
        if ($('#search_auto_link').attr('href') == "")
            alert("Лота с данным номером или VIN кодом не найдено");
        else
            location.href = $('#search_auto_link').attr('href');
    }
    var text = $('#search_auto').val();
    text = text.toUpperCase();
    $('#search_auto').val(text);
    if (text == '') {
        $('#search_auto_palaceholder').attr('placeholder', "Поиск по номеру лота, VIN коду");
        $('#block_search').removeClass('nofound');
    } else {
        $.ajax({
                method: "POST",
                url: "/search_auto",
                data: {
                    text: text
                }
            })
            .done(function (data) {
                data = JSON.parse(data);
                var place_text = '';
                if (data['type'] == 'catalog_vin') {
                    $('#block_search').removeClass('nofound');
                    $('#search_auto_link').attr('href', '/auto/' + data['id']);
                    place_text = data['vin'];
                }
                if (data['type'] == 'auction_vin') {
                    $('#block_search').removeClass('nofound');
                    $('#search_auto_link').attr('href', '/auction-auto/' + data['id']);
                    place_text = data['vin'];
                }
                if (data['type'] == 'auction_id') {
                    $('#block_search').removeClass('nofound');
                    $('#search_auto_link').attr('href', '/auction-auto/' + data['id']);
                    place_text = data['id'];
                }
                if (data['type'] == 'no') {
                    place_text = '';
                    $('#block_search').addClass('nofound');
                    $('#search_auto_link').attr('href', '');
                }
                $('#search_auto_palaceholder').attr('placeholder', place_text);
            });

    }
});

$('#search_auto1').keyup(function (e) {
    if (e.keyCode === 13) {
        if ($('#search_auto_link1').attr('href') == "")
            alert("Лота с данным номером или VIN кодом не найдено");
        else
            location.href = $('#search_auto_link1').attr('href');
    }
    var text = $('#search_auto1').val();
    text = text.toUpperCase();
    $('#search_auto1').val(text);
    if (text == '') {
        $('#search_auto_palaceholder1').attr('placeholder', "Поиск по номеру лота, VIN коду");
        $('#block_search1').removeClass('nofound');
    } else {
        $.ajax({
                method: "POST",
                url: "/search_auto",
                data: {
                    text: text
                }
            })
            .done(function (data) {
                data = JSON.parse(data);
                var place_text = '';
                if (data['type'] == 'catalog_vin') {
                    $('#block_search1').removeClass('nofound');
                    $('#search_auto_link1').attr('href', '/auto/' + data['id']);
                    place_text = data['vin'];
                }
                if (data['type'] == 'auction_vin') {
                    $('#block_search1').removeClass('nofound');
                    $('#search_auto_link1').attr('href', '/auction-auto/' + data['id']);
                    place_text = data['vin'];
                }
                if (data['type'] == 'auction_id') {
                    $('#block_search1').removeClass('nofound');
                    $('#search_auto_link1').attr('href', '/auction-auto/' + data['id']);
                    place_text = data['id'];
                }
                if (data['type'] == 'no') {
                    place_text = '';
                    $('#block_search1').addClass('nofound');
                    $('#search_auto_link1').attr('href', '');
                }
                $('#search_auto_palaceholder1').attr('placeholder', place_text);
            });

    }
});
