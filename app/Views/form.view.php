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
                        <input class="incolum0" type="text" id="phone" name="phone" placeholder="123 456 78 90">
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
                <input class="point" type="submit" name="submit" value="Overview" class="wid100">
            </form>
        </div>
        <div>
            <h1>Overview</h1>
            <form class="group" method="POST" action="validateInputForm">
                <fieldset class="noborder">
                    <legend class="invis">Person</legend>

                    <div class="colum">
                        <label class="incolum" for="name">Name:</label>
                        <input class="incolum0" type="text" id="name_export" name="name_export" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Prename:</label>
                        <input class="incolum0" type="text" id="prename_export" name="prename_export" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Phone:</label>
                        <input class="incolum0" type="text" id="phone_export" name="phone_export" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Email:</label>
                        <input class="incolum0" type="email" id="email_export" name="email_export" disabled>
                    </div>

                </fieldset>
                <fieldset class="noborder">
                    <legend class="invis">Concert</legend>

                    <div class="colum">
                        <label class="incolum">Artists:</label>
                        <input class="incolum0" type="text" id="artists_export" name="artists_export" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Amount:</label>
                        <input class="incolum0" type="number" name="amount_export" id="amount_export" min="1" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Simpathy:</label>
                        <input class="incolum0" type="text" id="simpathy_export" name="simpathy_export" disabled>
                    </div>
                    <div class="colum">
                        <label class="incolum">Purchasing date:</label>
                        <input class="incolum0" type="date" id="purchas_export" name="purchas_export" disabled>

                    </div>
                    <div class="colum">
                        <label class="incolum">Payment deadline:</label>
                        <input class="incolum0" type="date" id="payment_export" name="payment_export" disabled>
                    </div>

                </fieldset>
                <button class="nopoint btnOverview" disabled>Discard</button>
                <input class="btnOverview" type="submit" name="submit" value="Transmit">
            </form>
        </div>
    </div>
    <script src="./public/js/validForm.js"></script>
    <script>
        alert("<?= $alert ?>");
    </script>
    <script>
        document.getElementById('ConcertForm').onsubmit = function (evt) {

//var
var name = document.getElementById("name").value;
var prename = document.getElementById("prename").value;
var phone = document.getElementById("phone").value;
var mail = document.getElementById("email").value;
var amount = document.getElementById("amount").value;


var error_name;
var error_prename;
var error_phone;
var error_mail;
var error_amount;

console.log(name);
console.log(prename);
console.log(phone);
console.log(mail);
console.log(amount);

alert("hallo1");

//name
error_name = checkEmpty(name, "Name");
error_name = checklength(name, "Name", 30);
error_name = checkSpecialChars(name, "Name");
//prename
error_prename = checkEmpty(prename, "Prename");
error_prename = checklength(prename, "Prename", 30);
error_prename = checkSpecialChars(prename, "Prename");
//phone
error_phone = checkEmpty(phone, "Phone");
error_phone = checkPhoneNumber(phone, "Phone");
//mail
error_mail = checkEmpty(mail, "Mail");
error_mail = checklength(mail, "Mail", 30);
error_mail = checkMail(mail);
//amount
error_amount = checkEmpty(amount, "Amount");
error_amount = checkNumberBetween(amount, "Amount", 1, 20);


if (error_name != undefined || error_prename != undefined || error_phone != undefined || error_mail != undefined || error_artists != undefined || error_amount != undefined || error_simpathy != undefined) {
    alert("hallo435345");
    var name_err = document.getElementById("name_err");
    var prename_err = document.getElementById("prename_err");
    var phone_err = document.getElementById("phone_err");
    var mail_err = document.getElementById("mail_err");
    var amount_err = document.getElementById("amount_err");

    alert("hallo435345ewqeqeqe");
    name_err.innerHTML = error_name;
    prename_err.innerHTML = error_prename;
    phone_err.innerHTML = error_phone;
    //mail_err.innerHTML = error_mail;
    amount_err.innerHTML = error_amount;
    alert("khjagfkhasjgfklaf");
    
    evt.preventDefault();
}
}





function checkEmpty(obj, objName) {
if (obj.length == undefined) {
    return objName + " can not be empty";
}
}

function checklength(obj, objName, objMaxlength) {
if (obj.length > objMaxlength) {
    return objName + " is too long";
}
}

function checkSpecialChars(obj, objName) {

let specialChars = `-,:;?!<>'"()[]{}!@#$%^&*+`
let IsSpecialCharsProof = true;

for (const c of obj) {
    if (specialChars.includes(c)) nameIsSpecialCharsProof = false;
}

if (!IsSpecialCharsProof) {
    return objName + " cannot contain the following symbols: " + specialChars;
}
}

function checkPhoneNumber(obj, objName) {

let specialChars = `+-/()0123456789`
let IsSpecialCharsProof = true;

for (const c of obj) {
    if (!specialChars.includes(c)) nameIsSpecialCharsProof = false;
}

if (!IsSpecialCharsProof) {
    return objName + " can only contain the following symbols: " + specialChars;
}
}

function checkMail(obj) {
if (/(.+)@(.+){2,}\.(.+){2,}/.test(obj)) {
    // valid mail
} else {
    return " Invalid mail ";
}
}

function checkNumberBetween(obj, objName, min, max) {
if (obj >= min) {
    return objName + " is too small";
} else if (obj <= max) {
    return objName + " is too large";
}
}
    </script>
</body>

</html>