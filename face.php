<?php


// $data = array(
//     'action' => 'apply_effects',
//     'api_key' => 't76zM9aQzI2TcvoXas4rGiggwpYpmOSq',
//     'session_id'=> '4a9cf89d0b3192139af7dc800b293997',
//     'effects[effect_id]' => 65
// );
     
//     $payload = $data;
     
//     // Prepare new cURL resource
//     $ch = curl_init('https://api.cmfapp.co.uk/api2/');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLINFO_HEADER_OUT, true);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
     
    
//     // Submit the POST request
//     $result = curl_exec($ch);
    
//     var_dump($result);
     
//     // Close cURL session handle
//     curl_close($ch);


?>


<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


</head>
<body>

<form action="abc.php" method="post" enctype="multipart/form-data" id="form">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="text" name="action" id="action" value="upload_image">
    <input type="text" name="api_key" id="api_key" value="t76zM9aQzI2TcvoXas4rGiggwpYpmOSq">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<script>

 var request = $.ajax({
   url: "https://api.cmfapp.co.uk/api2/",
   method: "POST",
   data: {
   action : 'apply_effects',
   api_key:'t76zM9aQzI2TcvoXas4rGiggwpYpmOSq',
   session_id : '4a9cf89d0b3192139af7dc800b293997',
   'effects[effect_id]': 65
  
   },
 });

 
 request.done(function( msg ) {
   console.log(msg);
 });
 
 request.fail(function( jqXHR, textStatus ) {
   alert( "Request failed: " + textStatus );
 });




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
         },
        error: function(e)
         {
       $("#err").html(e).fadeIn();
         }
       });
    }));
   });


	</script>


