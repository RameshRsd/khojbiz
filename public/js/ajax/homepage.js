$(document).ready(function () {

    $('#top-companies').each(function (i,ls) {
        $.ajax({
            url: Laravel.url + "/top-companies-ajax/",
            method:"GET",
            success: function (data, textStatus, request) {

                $('#top-companies').html(data);
                // $("#"+data['id']).html(data['status']);
            },
            error: function (error) {
                debugger;
            }

        });
    });

    $('#top-manufacture-companies').each(function (i,ls) {
        $.ajax({
            url: Laravel.url + "/top-manufacture-companies-ajax/",
            method:"GET",
            success: function (data, textStatus, request) {

                $('#top-manufacture-companies').html(data);
                // $("#"+data['id']).html(data['status']);
            },
            error: function (error) {
                debugger;
            }

        });
    });
    $('#top-products').each(function (i,ls) {
        $.ajax({
            url: Laravel.url + "/top-products-ajax/",
            method:"GET",
            success: function (data, textStatus, request) {

                $('#top-products').html(data);
                // $("#"+data['id']).html(data['status']);
            },
            error: function (error) {
                debugger;
            }

        });
    });
    $('#popular_category-ajax').each(function (i,ls) {
        $.ajax({
            url: Laravel.url + "/popular_category-ajax/",
            method:"GET",
            success: function (data, textStatus, request) {

                $('#popular_category-ajax').html(data);
                // $("#"+data['id']).html(data['status']);
            },
            error: function (error) {
                debugger;
            }

        });
    });
});
