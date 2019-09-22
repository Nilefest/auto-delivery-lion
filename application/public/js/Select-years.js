/*$('#year-min').change(function () {
    var date = new Date();
    var year_min = date.getFullYear() - 50;
    var year_select = $('#year-min').val();

    var arr = [year_select];

    for (var year = year_select - 1; year >= year_min; year--) {
        arr.push(year);
    }

    $('#year-max').html('');
    arr.forEach(function (item) {
        $('#year-max').append("<option value='" + item + "'>" + item + "</option>");
    });
});/**/
