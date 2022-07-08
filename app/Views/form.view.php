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
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/form">Formular</a>
        <a class="navlink" href="m307_2/konzerttickets_tim_yannic/list">Order List</a>
    </nav>

    <div class="card form">
        <div>
            <h1>Form</h1>
            <form action="#" id="ConcertForm" method="POST">
                <fieldset class="noborder group">
                    <legend class="invis">Person</legend>

                    <div class="colum">
                        <label class="incolum" for="name">Name:</label>
                        <input class="incolum0" type="text" id="name" name="name" maxlength="190" minlength="1" placeholder="Max">
                        <p class="incolum1" id="name_err">&nbsp</p>
                    </div>
                    <div class="colum">
                        <label class="incolum" for="prename">Prename:</label>
                        <input class="incolum0" type="text" id="prename" name="prename" maxlength="190" placeholder="Muster">
                        <p class="incolum1" id="prename_err"> </p>
                    </div>
                    <div class="colum">
                        <label class="incolum" for="phone">Phone:</label>
                        <input class="incolum0" type="text" id="phone" name="phone" placeholder="012 345 67 89">
                        <p class="incolum1" id="phone_err"></p>
                    </div>
                    <div class="colum">
                        <label class="incolum" for="email">Email:</label>
                        <input class="incolum0" type="email" id="email" name="email" placeholder="someone@example.com">
                        <p class="incolum1" id="email_err"></p>
                    </div>

                </fieldset>
                <fieldset class="noborder group">
                    <legend class="invis">Concert</legend>

                    <div class="colum">
                        <label class="incolum" for="artists">Artists:</label>
                        <select class="incolum2" name="artist" id="artist">
                            <?php foreach ($ArtistList as $artist) : ?>
                                <option value=<?= $artist['id'] ?>> <?= $artist['artist'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="colum">
                        <label class="incolum" for="amount">Amount:</label>
                        <input class="incolum0" type="number" name="amount" id="amount" min="1" max="20" placeholder="1"><br>
                        <p class="incolum1" id="amount_err"></p>
                    </div>
                    <div class="colum">
                        <label class="incolum" for="simpathy">Simpathy:</label>
                        <select class="incolum2" name="simpathy" id="simpathy">
                            <option value="0">No discount</option>
                            <option value="1">5% discount</option>
                            <option value="2">10% discount</option>
                            <option value="3">15% discount</option>
                        </select>
                    </div>
                </fieldset>
                <input id="confirmOverview" type="submit" name="submit" value="Overview" class="point">
            </form>
        </div>
        <div>
            <h1>Overview</h1>
            <form class="group" id="ConcertForm" method="POST" action="validateInputForm">
                <fieldset class="noborder">
                    <legend class="invis">Person</legend>

                    <div class="colum">
                        <label class="incolum" for="name">Name:</label>
                        <input class="incolum0" type="text" id="name_export" name="name_export" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Prename:</label>
                        <input class="incolum0" type="text" id="prename_export" name="prename_export" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Phone:</label>
                        <input class="incolum0" type="text" id="phone_export" name="phone_export" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Email:</label>
                        <input class="incolum0" type="email" id="email_export" name="email_export" readonly>
                    </div>

                </fieldset>
                <fieldset class="noborder">
                    <legend class="invis">Concert</legend>

                    <div class="colum">
                        <label class="incolum">Artists:</label>
                        <input class="incolum0" type="text" id="artist_export" name="artist_export" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Amount:</label>
                        <input class="incolum0" type="number" name="amount_export" id="amount_export" min="1" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Simpathy:</label>
                        <input class="incolum0" type="text" id="simpathy_export" name="simpathy_export" readonly>
                    </div>
                    <div class="colum">
                        <label class="incolum">Purchasing date:</label>
                        <input class="incolum0" type="text" id="purchas_export" name="purchas_export" readonly>

                    </div>
                    <div class="colum">
                        <label class="incolum">Payment deadline:</label>
                        <input class="incolum0" type="text" id="payment_export" name="payment_export" readonly>
                    </div>

                </fieldset>
                <button type="button" id="btnDiscard" class="point btnOverview" onclick="btnDiscardKlick()" readonly>Discard</button>
                <input id="btnTransmit" class="btnOverview" type="submit" name="submit" value="Transmit" readonly>
            </form>
        </div>
    </div>
    <script src="./public/js/validForm.js"></script>
</body>

</html>