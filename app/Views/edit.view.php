<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="./public/svg/ico.svg">
    <title>Edit</title>
</head>

<body class="background">
    <nav class="card">
        <a class="navlink" href="./formView.view.php">Formular</a>
        <a class="navlink" href="./orderlist.view.php">Order List</a>
    </nav>
    <div class="card edit">
        <h1>Edit</h1>
        <table>
            <tr>
                <th>order id <br> 🔑</th>
                <th>amount <br> 🛒</th>
                <th>artist 🎤</th>
                <th>name 📗</th>
                <th>prename 📘</th>
                <th>mail 📧</th>
                <th>phone 📱</th>
                <th>order date <br> 📅</th>
                <th>payment date <br> ⌛</th>
                <th>over due <br> ⏳</th>
                <th>payed <br> 💷</th>
            </tr>
            <!-- php -->
            <tr>
                <td class="bg-gray">value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>
                <td>value</td>

            </tr>
            <tr>
                <td><input type="number" name="orderid" id="orderid"></td>
                <td><input type="number" name="orderid" id="orderid"></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="email" name="" id=""></td>
                <td><input type="tel" name="" id=""></td>
                <td><input type="date" name="" id=""></td>
                <td><input type="date" name="" id=""></td>
                <td>Yes / No (calc)</td>
                <td><input type="checkbox" name="" id=""></td>

            </tr>
            <!-- php -->
        </table>
    </div>
</body>

</html>