<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Добро пожаловать на <?php echo $_SERVER['HTTP_HOST']; ?>!</title>
	<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #754BC2;
	}
	#frame {
		width: 500px;
		height: 370px;
		border: 1px solid #709500;
		margin: 50px auto;
	}
	#welcome {
		height: 30px;
		margin: 20px;
		text-align: center;
	}
	#prompt {
		height: 70px;
		margin: 30px 20px;
		text-align: center;
	}
	#logo {
		width: 400px;
		height: 122px;
		margin: 4px auto;
	}
	#created {
		margin: 30px;
		text-align: center;
		font-size: 10px;
	}
	</style>
</head>
<body>

<div id="frame">
	<div id="welcome">Добро пожаловать на <strong><?php echo $_SERVER['HTTP_HOST']; ?>!</strong></div>
	<div id="prompt">Данная страница создана автоматически при активации хостинг аккаунта.
		Чтобы заменить ее, Вам необходимо удалить файл index.php из директории public_html, после чего загрузить в нее Ваш сайт.
		Если у Вас имеются какие-либо вопросы, обратитесь в службу поддержки.</div>
	<div id="logo">
		<a href="http://www.hostlife.net" target="_blank"><img src="/img-sys/hostlife.png" alt="HOSTLIFE - лучший платный хостинг"></a>
	</div>
	<div id="created">Дата создания: <?php echo date("D M j H:i:s Y", filectime($_SERVER['SCRIPT_FILENAME'])); ?></div>
</div>

</body>
</html>
