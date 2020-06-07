<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "Обратная связь";
    require_once "blocks/head.php"
    ?>
<script type="text/javascript" src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#done").click (function () {
                $('#messageShow').hide ();
                var name = $("#name").val ();
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = "";
                if (name.length < 3) fail = "Имя меньше 3-х символов";
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                    fail = "Вы ввели некорректный email";
                else if (subject.length < 5)
                    fail = "Тема сообщения менее 5 символов";
                else if (message.length < 20)
                    fail = "Сообщение менее 20-ти символов";
                if (fail != "") {
                    $('#messageShow').html (fail + "<div class ='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
                $.ajax ({
                    url: '/ajax/feedback.php',
                    // Проверка скрипта методом POST
                    type: 'POST', 
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    succsess: function (data) {
                        $('#messageShow').html (data + "<div class = 'clear'><br></div>");
                        $('#messageShow').show ();
                    }
                });
            });
        });
    </script>
</head>

<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <h3 class="h3" style="margin-left:40%">Заявка на услуги</h3>
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="Email" id="email" name="email"><br />
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="message" id="message" placeholder="Введите ваше сообщение"></textarea><br />
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Отправить"><br />
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>

</html>