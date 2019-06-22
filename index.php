<!DOCTYPE html>
<html>
<head>

    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Change My Face</title>

</head>
<body>
<div>
    <div class="change-my-face-content">
        <div>
            <h2>See how your lifestyle affects <br>your looks in years to come</h2>
            <div class="change-my-face-img">
                <img src="profile.jpg" alt="Upload Image">
                <form action="abc.php" method="post" enctype="multipart/form-data" id="form">
                    Upload a photograph of yourself facing the camera.<br><br>
                    <input type="file" name="image" id="image">
                    <input type="text" name="action" id="action" value="upload_image" hidden>
                    <input type="text" name="api_key" id="api_key" value="t76zM9aQzI2TcvoXas4rGiggwpYpmOSq" hidden>
                    <input type="submit" value="Upload Image" name="submit">
                    <div class="loader"></div>
                </form>
            </div>
        </div>
        <div class="processed-data">
            <img src="profile.jpg" alt="Upload Image">
            <div class="effects-variation">
                <div>
                    <a id="smoking" class="btn active" onclick="changeEffect(65,'smoking')">Smoking</a>
                    <a id="drinking" class="btn" onclick="changeEffect(67,'drinking')">Drinking</a>
                    <a id="aon-poor" class="btn" onclick="changeEffect(101,'aon-poor')">Aon (Poor)</a>
                </div>
                <div>
                    <a id="stress" class="btn" onclick="changeEffect(75,'stress')">Stress</a>
                    <a id="diet" class="btn" onclick="changeEffect(73,'diet')">Diet</a>
                    <a id="aon-average" class="btn" onclick="changeEffect(100,'aon-average')">AON (Average)</a>
                </div>
                <div>
                    <a id="aon-excellent" class="btn" onclick="changeEffect(99,'aon-excellent')">AON (Excellent)</a>
                </div>
            </div>
        </div>
    </div>
    <div>
</body>
</html>


