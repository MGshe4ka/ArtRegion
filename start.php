<?php
$title = "GET START";
require_once "blocks/header.php";
?>

<div class="container mt-3">
    <h1 style="margin: 0 auto; position: relative">НАЧАТЬ РЕГИСТРАЦИЮ</h1>
    <form action="check_post.php" method="post" class="form">
        <input type="text" name="username" placeholder="Введите Имя" class="form-control"><br>
        <input type="text" name="usersurname" placeholder="Введите Фамилию" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите E-mail" class="form-control"><br>
        <input type="number" name="phone" placeholder="Введите Номер телефона" class="form-control"><br>
        <input type="submit" value="GET START" class="btn btn-success">
    </form>
</div>
    <script>

    </script>
<?php
require_once "blocks/footer.php";
?>