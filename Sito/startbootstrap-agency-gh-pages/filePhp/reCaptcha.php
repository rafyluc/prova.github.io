<?php
require_once "richiesta.php";
 $nome = $_POST['name'];
 $email = $_POST['email'];
// grab recaptcha library


foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
}


 // your secret key
$secret = "6LdojGEUAAAAAEyIUnYEVD7WIScdvPwrbuThCfST";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
  }
?>