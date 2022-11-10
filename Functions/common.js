

var adminurl = window.location.origin + 'check.php';

function do_ajax_call(data, onsuccess, url = "") {



    if (url != "") {

        var serviceurl = url;

    } else {

        var serviceurl = adminurl;

    }

    var token = $('meta[name="token"]').attr('content');

    $.ajax({

        type: "POST",

        url: serviceurl,

        headers: {

            'X-CSRF-TOKEN': token

        },

        data: data,

        success: onsuccess,



        error: function (error) {

            console.log('error; ' + JSON.stringify(error));

        }



    });



}