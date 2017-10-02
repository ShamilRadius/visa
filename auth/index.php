<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="container">
			<div class="logo">
				<img src="img/logo.png" alt="visa_logo"/>
				<span>Analytical tool for merchants</span>
			</div>
			<div class="lang">
				<img src="img/ru-ru.png" alt="russia_flag"/>
				<div class="chlang">Язык: <span><a href="#">русский</a></span></div>
			</div>
		</div>	
	</div>
	<div class="content">
		<div class="container">
			<div class="table_head">
				<div class="home_butt"><a href="index.php"><img src="img/home.png"></a></div>
				<div class="auth_butt"><a href="#popup1">Вход</a></div>
				<div id="popup1" class="overlay">
					<div class="popup">
						<h3>Вход в систему</h3>
						<a class="close" href="#">&times;</a>
						<div class="content_pop">
								<form action >
									<div class="form_input"><span>Логин:</span><input type="text" placeholder="Введите логин" onfocus="this.className='focus'" onblur="this.className='text'"></div>
									<div class="form_input"><span>Пароль:</span><input type="password" placeholder="Введите пароль" onfocus="this.className='focus'" onblur="this.className='text'"></div>
									<div class="form_input"><span>Регион:</span><select size="1" name="hero[]">
										<option disabled selected>Выберите регион</option>
										<option value="Москва">Москва</option>
										<option value="Санкт-Петербург">Санкт-Петербург</option>
										<option value="Красноярск">Красноярск</option>
										<option value="Казань">Казань</option>
									</select></div>
									<div class="form_button"><input type="button" value="Войти"></div>
								</form>
						</div>
					</div>
				</div>				
			</div>
			<div class="menu">
				<ul>
					<li><div class="button" id="textButton"><a href="#info" onclick="fync();">Справка</a></div></li>
				</ul>
			</div>
			<div class="content_area">
				<div class="text_block" id="block"></div>
			</div>			
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer_about">
				<ul>
					<li>
						<a href="mailto:visa@mail.ru">Обратная связь</a>
					</li>
					<li>
						<a href="https://www.visa.com.ru/">Сайт компании VISA inc.</a>
					</li>					
				</ul>
			</div>
			<div class="footer_logo"><span>Powered by</span><a href="#"><img src="img/tera_logo.png"></a></div>
		</div>	
	</div>
</div>
<script type="text/javascript">
function fync() {
$("#block").load("pages/info.php", function() {
});
}; 

</script>
</body>
</html>