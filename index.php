<?php
require_once 'classes/Auto.php';
require_once 'classes/MacAutoController.php';
require_once 'classes/Moto.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Мас Авто</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <meta charset="utf-8" />
  </head>
  <body>
    <div class="container">
      <div class="header">Добро пожаловать в МакАвто!</div>
      <div class="content">
        <p>Введите данные:</p>
        <form class="form-horizontal" method="POST">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="name" placeholder="введите Ваше имя" value="<?=$_POST['name'] ?? ''?>" required />
                </div>
            </div>

            <div class="form-group">
            <label for="date" class="col-sm-2 control-label">Дата</label>
                <div class="col-sm-10">
                <input name="date" type="date" class="form-control" id="date" value="<?=$_POST['date']?? ''?>"required />
                </div>
            </div>

            <div class="form-group">
            <label for="money" class="col-sm-2 control-label">Cумма</label>
                <div class="col-sm-10">
                <input name="money" type="text" class="form-control" id="money" placeholder="введите сумму, которой располагаете" value="<?=$_POST['money']?? ''?>" required />
                </div>
            </div>

            <div class="form-group">
            <label for="ts" class="col-sm-2 control-label">Тип ТС</label>
                <div class="col-sm-10">
                <select name="ts" id="ts" class="form-control" required>
                    <option value="" disabled selected>выберите тип ТС</option>
                    <option value="Auto" <?=$_POST['ts'] ?? '' === 'Auto' ? 'selected' : ''?> >Машина</option>
                    <option value="Moto" <?=$_POST['ts'] ?? '' === 'Moto' ? 'selected' : ''?> >Мотоцикл</option></select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    <label>
                    <input type="checkbox"> Запомнить меня
                    </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Отправить</button>
                </div>
            </div>
        </form>

        <div class="result">
        <?php
        if ($_POST) {

        // Кто вы?
        $driver = new Driver($_POST['name'], new DateTime($_POST['date']), $_POST['money']);

        if ($_POST['ts'] === 'Auto') {
            $moto = new Auto($driver);
        } else {
            $moto = new Moto($driver);
        }

        // Хотим покушать
        // Едем в макавто
        $moto->drive('Макавто');

        $macAvto = new MacAutoController();

        $macAvto->serve($moto, 1500);
        }
        ?>
      </div>

      <div class="footer">© 2025 Все права защищены</div>
    </div>
  </body>
</html>