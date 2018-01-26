<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <title>Обратная связь</title>

        <style type="text/css">
            @import url('assets/css/contact.css');
            @import url('assets/css/lay.css');
        .style1 {color: #FFFFFF}
        </style>

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>

    </head>
    <body>
        <div id="contact">
            <div id="top">
                <h1>Напишите нам</h1>
            </div>
            <div id="center">
        <div id="contact_form">
            <form method="post" action="assets/php/send.php" id="contactForm">
                <div class="error" id="error">Произошла ошибка, сообщение не может быть отправлено!</div>
                <div class="success" id="success">Сообщение успешно отправлено!<br />Спасибо.</div>

                    <span class="input">
<label for="name"><b>Ваше имя:</b> </label>
<input  type="text" id="name" name="name" />
<div class="warning" id="nameError">Это поле обязательно для заполнения</div>
</span>

<span class="input">
<label for="email"><b>Ваш Email:</b> </label>
<input  type="text" id="email" name="email" />
<div class="warning" id="emailError">Введите правильный email!</div>
</span>

<span class="input">
<label for="sales"><b>Тема:</b> </label>
<select id="sales" name="sales">
<option value="Support">Техподдержка</option>
<option value="Sales">Продажи</option>
<option value="Other">Другое</option>
</select>
</span>

<span class="input">
<label for="message"><b>Ваше сообщение:</b> </label>
<textarea id="message" name="message">Здравствуйте,
</textarea>
<div class="warning" id="messageError">Это поле обязательно для заполнения</div>
</span>

<span class="input">
<label for="security_code"><b>Цифры:</b> </label>
<input class="noicon" type="text" id="security_code" name="security_code" style="width:100px" />
<img src="assets/php/security/1/sec.php" style="vertical-align:middle;" />
<div class="warning" id="security_codeError">Цифры введены неверно!</div>
</span>
                    <span id="submit" class="input">
                    <label for="submit"></label>
                    <p id="ajax_loader" style="text-align:center;"><img src="assets/img/contact/ajax-loader.gif" /></p>
                    <input id="send" type="submit" value="Отправить письмо!" />
                    </span>

                </form>
                </div>
            </div>
            <div id="bot"><!--bottom--></div>
  
        </div>
        <div align="center"><br>
          <a href="http://www.resellscripts.info" class="style1">www.resellscripts.info        </a></div>
</body>
</html>
