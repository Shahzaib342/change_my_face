<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
    <style>
        .change-my-face-content{
            width:800px;
            margin: auto;
        }
        .change-my-face-content div{
            width: 400px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
</head>
<body>
<div>
    <div class="change-my-face-content">
        <div>
        <h2>See how your lifestyle affects <br>your looks in years to come</h2>
            <img src="profile.jpg" alt="Upload Image">
            <form action="abc.php" method="post" enctype="multipart/form-data" id="form">
                Upload a photograph of yourself facing the camera.
                <input type="file" name="image" id="image">
                <input type="text" name="action" id="action" value="upload_image">
                <input type="text" name="api_key" id="api_key" value="t76zM9aQzI2TcvoXas4rGiggwpYpmOSq">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <div class="processed-data">
            <img src="profile.jpg" alt="Upload Image">
        </div>
    </div>
<div>
</body>
</html>
<script>
$(document).ready(function (e) {
$("#form").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url: "https://api.cmfapp.co.uk/api2/",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
//$("#preview").fadeOut();
$("#err").fadeOut();
},
success: function(data)
{
console.log(data);
    var request = $.ajax({
        url: "https://api.cmfapp.co.uk/api2/",
        method: "POST",
        data: {
            action : 'apply_effects',
            api_key:'t76zM9aQzI2TcvoXas4rGiggwpYpmOSq',
            session_id : data.session_id,
            'effects[effect_id]': 65

        },
    });


    request.done(function( response ) {
        console.log(response.data.effect_results[0].output_file);
        $('.processed-data img').attr('src',response.data.effect_results[0].output_file);

    });

    request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });

},
error: function(e)
{
$("#err").html(e).fadeIn();
}
});
}));
});


</script>


