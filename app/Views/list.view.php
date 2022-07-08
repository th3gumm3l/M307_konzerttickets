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
        <a class="navlink" href="./formView.view.php">Formular</a>
        <a class="navlink" href="./orderlist.view.php">Order List</a>
    </nav>
    <div class="card edit">
        <h1>List</h1>
        <form action="" method="">
        <table class="tablelist">
            <tr>
                <th>id <br> 🔑</th>
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
                <th>edit ⚙</th>
            </tr>

            <?php for($i = 0; $i < count($AllNames);$i++) : ?>
            <tr>
                <td><?= $rOrderID[$i]['OrderID'];?></td>
                <td><?= $rAmount[$i]['Amount'];?></td>
                <td><?= $rArtist[$i]['Artist'];?></td>
                <td><?= $rName[$i]['Name'];?></td>
                <td><?= $rPrename[$i]['Prename'];?></td>
                <td><a href="/M307_Projektarbeit/formular//bearbeiten?id=<?=$AllAufträge[$i]['id']?>">Bearbeiten</a></td>
                <td><a href="/M307_Projektarbeit/formular/löschen?id=<?=$AllAufträge[$i]['id']?>">Löschen</a></td>
            </tr>
            <?php endfor; ?>

            <tr>
                <td><?= $rOrderID ?></td>
                <td><?= $rAmount ?></td>
                <td><?= $rArtist ?></td>
                <td><?= $rName ?></td>
                <td><?= $rPrename ?></td>
                <td><?= $rMail ?></td>
                <td><?= $rPhone ?></td>
                <td><?= $rOrderDate ?></td>
                <td><?= $rPaymentDate ?></td>
                <td><?= $rOverDue ?></td>
                <td><?= $rPayed ?></td>
                <td><?= $rEdit ?></td>
            </tr>
        </table>
        <input class="r-up-btn" type="submit" name="submit" value="Save">
        </form>
    </div>
</body>

</html>