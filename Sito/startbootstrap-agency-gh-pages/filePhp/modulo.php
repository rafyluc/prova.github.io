<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google �No CAPTCHA reCAPTCHA� on Your Website</title>
  </head>
 
  <body>
 
    <form action="reCaptcha.php" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
      <div class="g-recaptcha" data-sitekey="6LdojGEUAAAAADRbSwuF44YozpVzSUvbMI0BS5IZ"></div>
 
      <input type="submit" value="Submit" />
 
    </form>
 
    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>