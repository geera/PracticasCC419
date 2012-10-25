<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Envio de e-mail :: Practica 17</title>
<style>
*{
    font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
}
body{
    width: 400px;
    margin: auto;
    background-color: #E2ECEE;
}
.contacto{
    border: 1px solid #CED5D7;
    border-radius: 6px;
    padding: 45px 45px 20px;
    margin-top: 50px;
    background-color: white;
    box-shadow: 0px 5px 10px #B5C1C5, 0 0 0 10px #EEF5F7 inset;
}
.contacto label{
    display: block;
    font-weight: bold;
}
.contacto div{
    margin-bottom: 15px;
}
.contacto input[type='text'], .contacto textarea{
    padding: 7px 6px;
    width: 294px;
    border: 1px solid #CED5D7;
    resize: none;
    box-shadow:0 0 0 3px #EEF5F7;
    margin: 5px 0;
}
.contacto input[type='text']:focus, .contacto textarea:focus{
    outline: none;
    box-shadow:0 0 0 3px #dde9ec;
}

.contacto input[type='email'], .contacto textarea{
    padding: 7px 6px;
    width: 294px;
    border: 1px solid #CED5D7;
    resize: none;
    box-shadow:0 0 0 3px #EEF5F7;
    margin: 5px 0;
}
.contacto input[type='email']:focus, .contacto textarea:focus{
    outline: none;
    box-shadow:0 0 0 3px #dde9ec;
}

.contacto input[type='submit']{
    border: 1px solid #CED5D7;
    box-shadow:0 0 0 3px #EEF5F7;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
    text-shadow: 1px 1px 0px white;
 
    background: #e4f1f6;
    background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
}
.contacto input[type='submit']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
.contacto input[type='submit']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}
</style>
</head>
<body>
	<form class='contacto' method="post" action="index.php?log=1">
            <div><label>Tu Nombre:</label><input type='text' value='' name="name" required="true"></div>
            <div><label>Tu Email:</label><input type="email" value='' name="mail" required="true"></div>
            <div><label>Asunto:</label><input type='text' name="asunto" value=''></div>
            <div><label>Mensaje:</label><textarea name="mensaje" rows='6'></textarea></div>
            <div><input type='submit' value='Envia Mensaje'></div>
    </form>
</body>
</html>
<?php
if(isset($_GET['log'])and $_GET['log']==1)
{
	require("class.phpmailer.php"); 
	$mail = new PHPMailer(); 
	
	$mail->Host = "server29.000webhost.com"; 
	$mail->From = $_POST['mail'];
	$mail->FromName = $_POST['name'];
	$mail->Subject = $_POST['asunto'];
	$mail->AddAddress("el_gera_one@hotmail.com","Yo Merol"); 
	$body=$_POST['mensaje'];
	$mail->Body = $body; 
	if($mail->Send())
		echo '<strong>Se ha enviado el correo -> Checar en bandeja de SPAM</strong>';
	else
		echo 'Hubo Problemas....Try Again';
}
?>