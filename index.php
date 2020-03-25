<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
</head>

<body>
    <form id="form" action="php/send.php" method="POST">
        <!-- Текстовое поле для имени -->
        <div class="form-group">
            <label for="name-input">Имя</label>
            <input id="name-input" name="name" class="form-control" type="text" placeholder="Ваше имя">
        </div>
        <!-- Текстовое поле для почты -->
        <div class="form-group">
            <label for="form-email">Email</label>
            <input id="form-email" name="email" class="form-control" type="email" placeholder="Ваш email">
        </div>
        <!-- Выбор из списка для года рождения -->
        <div class="form-group">
            <label for="age-select" class="label">Год рождения</label>
            <select name="age" id="age-select" class="custom-select"></select>
        </div>
        <!-- Радиокнопки для пола -->
        <div class="form-group">
            <label class="label">Пол</label><br>
            <label class="radio">
                <input type="radio" name="sex" value="male" checked>
                Мужской
            </label>
            <label class="radio">
                <input type="radio" name="sex" value="female">
                Женский
            </label>
        </div>
        <!-- Радиокнопки для количества конечностей -->
        <div class="form-group">
            <label>Количество конечностей</label><br>
            <label class="radio">
                <input type="radio" name="limbs" checked value="4">
                4
            </label>
            <label class="radio">
                <input type="radio" name="limbs" value="6">
                6
            </label>
            <label class="radio">
                <input type="radio" name="limbs" value="8">
                8
            </label>
        </div>
        <!-- Множественный выбор сверхспособностей -->
        <div class="form-group">
            <label for="form-select">Сверхспособности</label>
            <select id="form-select" class="form-control" multiple size="3" name="powers[]">
                <option value="immortality" selected>Бессмертие</option>
                <option value="levitation">Левитация</option>
                <option value="walls-walking">Хождение сквозь стены</option>
            </select>
        </div>
        <!-- Текстовое поле для биографии -->
        <div class="form-group">
            <label for="form-text" class="label">Биография</label>
            <textarea id="form-text" name="bio" class="form-control"
                    placeholder="Напишите здесь немного о себе..."></textarea>
        </div>
        <!-- Чекбокс -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="check" class="custom-control-input" id="checkbox-input" checked>
          <label class="custom-control-label" for="checkbox-input">С <a href="#" class="has-text-primary">контрактом</a> ознакомлен(а).</label>
        </div>
        <!-- Кнопка отправить -->
        <button id="btn" type="submit" class="mt-2 btn btn-primary">Отправить</button>
    </form>
</body>

</html>
