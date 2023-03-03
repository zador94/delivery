<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Форма заказа</h1>
<form action="calculationDelivery.php" method="post">
    <p>Имя заказчика: <input type="text" name="users"></p>
    <p>Фамилия заказчика: <input type="text" name="surname"></p>
    <p>Наименование продукта:
        <select name="nameProduct" size="1">
            <option value="TV Toshiba">TV Toshiba</option>
            <option value="Toaster Toshiba">Toaster Toshiba</option>
            <option value="Fridge Toshiba">Fridge Toshiba</option>
            <option value="Printer Toshiba">Printer Toshiba</option>
        </select></p>
    <p>Общий вес заказа: <input type="text" name="weigth"> кг</p>
    <p>Размер продукта:
    <p>Высота: <input type="text" name="height"> см</p>
    <p>Длина: <input type="text" name="length"> см</p>
    <p>Ширина: <input type="text" name="width"> см</p>
    </p>
    <p>Стоимость товара: <input type="text" name="price"> руб.</p>
    <input type="submit" name="Отправить">
</form>
</body>
</html>
