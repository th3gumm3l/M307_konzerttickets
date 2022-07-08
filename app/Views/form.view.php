<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="./public/svg/ico.svg">
    <title>Form</title>
</head>

<body class="background">
    <nav class="card">
        <a class="navlink" href="./formView.view.php">Formular</a>
        <a class="navlink" href="./orderlist.view.php">Order List</a>
    </nav>

    <div class="card form">
        <div>
            <h1>Form</h1>
            <form action="validateInputForm" id="ConcertForm">
                <fieldset class="noborder group">
                    <legend class="invis">Person</legend>

                    <div class="colum">
                        <label for="name">Name:</label> <br>
                        <input type="text" id="name" name="name" maxlength="190" minlength="1" placeholder="Max"><br>
                        <p id="name_err"> </p>
                    </div>
                    <div class="colum">
                        <label for="prename">Prename:</label> <br>
                        <input type="text" id="prename" name="prename" maxlength="190" placeholder="Muster"><br>
                        <p id="prename_err"> </p>
                    </div>
                    <div class="colum">
                        <label for="phone">Phone:</label> <br>
                        <input type="text" id="phone" name="phone" placeholder="123 456 78 90"><br>
                        <p id="phone_err"></p>
                    </div>
                    <div class="colum">
                        <label for="email">Email:</label> <br>
                        <input type="email" id="email" name="email" placeholder="someone@example.com"><br>
                        <p id="email_err"></p>
                    </div>

                    <br>
                </fieldset>
                <fieldset class="noborder group">
                    <legend class="invis">Concert</legend>
                    
                    <div class="colum">
                        <label for="artists">Artists:</label> <br>
                        <select name="artist" id="artist">
                        <?php foreach ($ArtistList as $artist): ?>
                            <option value= <?= $artist['id'] ?> > <?= $artist['artist'] ?> </option>
                        <?php endforeach; ?>
                        </select>
                        <br>
                    </div>
                    <div class="colum">
                        <label for="amount">Amount:</label> <br>
                        <input type="number" name="amount" id="amount" min="1" max="20" placeholder="1"><br>
                    </div>
                    <div class="colum">
                        <label for="simpathy">Simpathy:</label> <br>
                        <select name="simpathy" id="simpathy">
                            <option value="0">No discount</option>
                            <option value="1">5% discount</option>
                            <option value="2">10% discount</option>
                            <option value="3">15% discount</option>
                        </select>
                        <br>
                    </div>

                    <br>
                </fieldset>
                <input class="point" type="submit" name="submit" value="Overview" class="wid100">
            </form>
        </div>
        <div>
            <h1>Overview</h1>
            <form class="group">
                <fieldset class="noborder">
                    <legend class="invis">Person</legend>
                    <label for="name">Name:</label> <br>
                    <input type="text" id="name" name="name" disabled><br>

                    <label for="prename">Prename:</label> <br>
                    <input type="text" id="prename" name="prename" disabled><br>

                    <label for="phone">Phone:</label> <br>
                    <input type="text" id="phone" name="phone" disabled><br>

                    <label for="email">Email:</label> <br>
                    <input type="email" id="email" name="email" disabled>
                    <br>
                </fieldset>
                <fieldset class="noborder">
                    <legend class="invis">Concert</legend>

                    <label for="artists">Artists:</label> <br>
                    <input type="text" id="artists" name="artists" disabled><br>

                    <label for="amount">Amount:</label> <br>
                    <input type="number" name="amount" id="amount" min="1" disabled><br>

                    <label for="simpathy">Simpathy:</label> <br>
                    <input type="text" id="simpathy" name="simpathy" disabled><br>

                    <label for="purchas">Purchasing date:</label> <br>
                    <input type="date" id="purchas" name="purchas" disabled><br>

                    <label for="payment">Payment deadline:</label> <br>
                    <input type="date" id="payment" name="payment" disabled><br>
                    <br>
                </fieldset>
                <input type="submit" name="submit" value="Overview" disabled>
                <button disabled>Discard</button>
            </form>
        </div>
    </div>
    <script src="./public/js/validForm.js"></script>
</body>

</html>