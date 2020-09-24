<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $secretKey = "6Lcl8MYZAAAAAIJLgXvCyVOAIpf86orARsZCmtG7";
        $responseKey = $_POST['g-recaptcha-response'];
        $userIP = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = json_decode($response);
        if ($response->success)
            echo "Verification success. Your name is: $username";
        else
            echo "Verification failed!";
    }
?>
<html>
    <head>
        <title>PHP ReCAPTCHA Tutorial</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="What is your name?">
            <input type="submit" name="submit" value="Save">
            <div class="g-recaptcha" data-sitekey="6Lcl8MYZAAAAANqLWIAhAbMk2TBdUmfU-aTu0Ltd"></div>
        </form>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>