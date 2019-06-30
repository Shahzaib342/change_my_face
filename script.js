/**
 * Created By Shahzaib 18/06/2019
 **/

var face = {
    session_id: 0
};

$(document).ready(function (e) {

    $("#form").on('submit', (function (e) {
        $('.loader').show();
        e.preventDefault();
        $.ajax({
            url: "https://api.cmfapp.co.uk/api2/",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                face.session_id = data.session_id;
                var request = $.ajax({
                    url: "https://api.cmfapp.co.uk/api2/",
                    method: "POST",
                    data: {
                        action: 'apply_effects',
                        api_key: 't76zM9aQzI2TcvoXas4rGiggwpYpmOSq',
                        session_id: data.session_id,
                        'effects[effect_id]': 65,

                    },
                });


                request.done(function (response) {
                    $('.loader').hide();
                    $('.change-my-face-img').hide();
                    $('.processed-data img').attr('src', response.data.effect_results[3].output_file);
                    $('.processed-data').show();

                });

                request.fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + 'Please upload clear image with your face visible');
                });

            },
            error: function (e) {
                //
            }
        });
    }));
});

function changeEffect(effect_id, id) {

    var that = $(this);
    var request = $.ajax({
        url: "https://api.cmfapp.co.uk/api2/",
        method: "POST",
        data: {
            action: 'apply_effects',
            api_key: 't76zM9aQzI2TcvoXas4rGiggwpYpmOSq',
            session_id: face.session_id,
            'effects[effect_id]': effect_id,
            'effects[age]':35,
            'effects[dont_cache]':true

        },
    });


    request.done(function (response) {
        $('.btn.active').removeClass('active');
        $('#' + id).addClass('active');
        $('.change-my-face-img').hide();
        $('.processed-data img').attr('src', response.data.effect_results[0].output_file);
        $('.processed-data').show();

    });

    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + 'Please try again');
    });
}