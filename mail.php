<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    
    <title>Ваше сообщение успешно отправлено</title>

	<style>

		body{background-color:rgb(81, 18, 90);}

		

		a{
			color:black;
			font-size: 20pt;
		}
        #nq{
			  font-size: 30pt;
			  color:rgb(242, 143, 51);
			  margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
             }
	</style>	
</head>

<body>
<?php
	$back = "<p id='wq'><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
	
	if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) and !empty($_POST['message'])){
		$name = trim(strip_tags($_POST['name']));
		$phone = trim(strip_tags($_POST['phone']));
		$mail = trim(strip_tags($_POST['mail']));
		$message = trim(strip_tags($_POST['message']));
		

		mail('ya.constellation@gmail.com', 'Письмо с museum.by', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
		
		echo "<p id='nq'>Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br></p> $back";
		
		exit;
	} 
	else {
		echo "<p id='nq'>Для отправки сообщения заполните все поля!</p> $back";
		exit;
	}
?>
</body>