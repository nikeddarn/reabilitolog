/**
 * Common scripts
 */

"use strict";

$(document).ready(function () {
    $('#jumbotron').find('a').each(function () {
        $(this).on('click', function () {
            let uri = $(this).attr('href');
            // let layout =
            $.ajax({
                url: url,
                data: data,
                success: onSuccess,
                error: onError,
                dataType: 'json'
            });
        });
    });
});

