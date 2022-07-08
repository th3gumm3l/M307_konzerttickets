<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="./public/svg/ico.svg">
    <title>List</title>
</head>

<body class="background">
    <nav class="card">
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/form">Formular</a>
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/list">Order List</a>
    </nav>
    <div class="card edit">
        <h1>List</h1>
        <table class="tablelist">
            <tr>
                <th>id <br> 🔑</th>
                <th>amount <br> 🛒</th>
                <th>artist 🎤</th>
                <th>name 📗</th>
                <th>prename 📘</th>
                <th>mail 📧</th>
                <th>phone 📱</th>
                <th>order date 📅</th>
                <th>payment date ⌛</th>
                <th>over due ⏳</th>
                <th>payed <br> 💷</th>
                <th>edit ⚙</th>
            </tr>

            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order['id'];?></td>
                <td><?= $order['amount'];?></td>
                <td><?= $artistlist[$order['fk_concertID']];?></td>
                <td><?= $usernames[$order['fk_userID']];?></td>
                <td><?= $userprenames[$order['fk_userID']];?></td>
                <td><?= $useremails[$order['fk_userID']];?></td>
                <td><?= $userphones[$order['fk_userID']];?></td>
                <td><?= $order['orderdate'];?></td>
                <td><?= $order['paymentdate'];?></td>
                <td><?= $order['overdue'];?></td>
                <td>
                    <?php
                    if ($order['payed'] == 0) {
                        $payStatus = "⏳";
                    }                    
                    if ($order['payed'] == 1) {
                        $payStatus = "⌛";
                    }
                    ?> 
                    <?= $payStatus;?>
                </td>
                <td><a href="/m307_konzerttickets/editview?orderid=<?= $order['id'];?>&userid=<?= $order['fk_userID'];?>&payed=<?= $payStatus;?>">Bearbeiten</a></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>