<html>
<head></head>
<body>

<?php echo date("d-m-Y H:i:s"); ?>

<br />

<form name="form_login" method="post" action="invioDati.php">

<p>nome <input type="text" name="name" >
</p>

<p>email <input name="email"></p>

</p>

<p>numero <input name="phone"></p>

</p>

<p>messaggio <input name="message"></p>


<input type="submit" value="invia">
</form>
</body>

</html>