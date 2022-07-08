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
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/form">Formular</a>
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/list">Order List</a>
    </nav>
    <div class="card edit">
        <h1>Edit</h1>
        <form action="edit?userid=<?=$userid?>&orderid=<?=$orderid?>" method="post">
            <table>
                <tr>
                    <th>order id 🔑</th>
                    <th>name 📗</th>
                    <th>prename 📘</th>
                    <th>mail 📧</th>
                    <th>phone 📱</th>
                    <th>payed 💷</th>
                </tr>

                <tr>
                    <td> <?= $orderid ?> </td>
                    <td> <?= $username ?> </td>
                    <td> <?= $userprename ?> </td>
                    <td> <?= $useremail ?> </td>
                    <td> <?= $userphone ?> </td>
                    <td> <?= $paystatus ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="tableeditweight" type="text" name="nameedit" id="nameedit"></td>
                    <td><input class="tableeditweight" type="text" name="prenameedit" id="prenameedit"></td>
                    <td><input class="tableeditweight" type="email" name="mailedit" id="mailedit"></td>
                    <td><input class="tableeditweight" type="tel" name="phoneedit" id="phoneedit"></td>
                    <td><input class="tableeditweight" type="checkbox" name="payed" value="payed" id="payededit"></td>
                </tr>
            </table>

            <input type="submit" value="Change" name="submitnew" id="submitnew">
        </form>
    </div>
</body>

</html>