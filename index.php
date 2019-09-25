<?php require('db.php'); logout(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Advertisements</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="style.css">	
</head>

<body>
		<div class="container">
		<div id="message" > </div>
			<div class="row">
					<div class="col-md-6 description" id="ad-list-container">
					</div>
					<div class="col-md-6 forms">
						<div class="forms-wrapper">
							<? if (!isAuthorLogged()) : ?>
							<div id ="author-buttons" class="forms-buttons">
										<!-- Button of registration modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrationModal">
								Регистрация
								</button>
								<!-- Button of login modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
								Войти
								</button>
							</div>
							
							<!-- Temporary form of login -->
								<!-- <form id="login-form" action="login.php" method="POST" class="forms-login">
									<h4>Войти:</h4>
									<input name="author_name" type="text" placeholder="Имя" required><br>
									<input name="password" type="password" placeholder="пароль" required><br>
									<input type="submit" value="Вход" class="forms-login__submit btn btn-primary"><br>
								</form> -->
								<? endif; ?>

								<form id="add-new-ad" action="#" method="POST" class="forms-advert">
									<h4>Отправить объявление:</h4>
									<input type="text" placeholder="Заголовок объявления" name="title" required><br>
									<textarea name="text" rows="5" placeholder="Текст объявления" required></textarea><br>

									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input forms-advert__image" id="inputAttachFile" name="img" required>
											<label class="custom-file-label " for="inputAttachFile">Вставить фото:</label>
										</div>
									</div>

									<input  type="submit" value="Отправить" class="forms-advert__submit btn btn-primary"><br>
								</form>
						</div>
					</div>
			</div>
		</div>

		<!-- Registration Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="registrationModalLongTitle">Зарегистрироваться</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="#" method="POST" class="forms-registration">
          <input type="text" placeholder="Имя" required><br>
          <input type="email" placeholder="почтовый адрес" required><br>
          <input type="password" placeholder="пароль" required><br>
          <input type="tel" placeholder="телефон" required><br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Регистрация</button>
      </div>
    </div>
  </div>
</div>

		<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLongTitle">Войти</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span id="login-close" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id= "login-form" action="login.php" method="POST" class="forms-login">
			<input id="author_name" name="author_name" type="text" placeholder="Имя" required><br>
			<input id="password" name="password" type="password" placeholder="пароль" required><br>
		</form>
      </div>
      <div class="modal-footer">
		<div id="errorMess"></div>
        <button id="send-login" type="button" class="btn btn-success">Вход</button>
      </div>
    </div>
  </div>
</div>

		<!-- bootstrap and jquery scripts -->
		<script src="js/jquery-3.4.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<script src="js/script.js"></script>

</body>
</html>

<!-- <form action="#" method="POST" class="forms-registration">
	<h4>Зарегистрироваться</h4>
	<input type="text" placeholder="Имя" required><br>
	<input type="email" placeholder="почтовый адрес" required><br>
	<input type="password" placeholder="пароль" required><br>
	<input type="tel" placeholder="телефон" required><br>
	<input type="submit" value="Регистрация" class="forms-registration__submit"><br>
</form> -->
