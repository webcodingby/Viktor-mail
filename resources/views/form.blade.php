<!DOCTYPE html>
<html>
<head>
    <title>Обратная связь</title>
</head>
<body>
<form action="/form" method="POST">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="phone">Телефон:</label>
    <input type="text" id="phone" name="phone" required><br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
