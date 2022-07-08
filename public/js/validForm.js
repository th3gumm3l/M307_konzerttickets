document.getElementById('ConcertForm').onsubmit = function (evt) {

    document.getElementById("name_err").innerHTML = "";
    document.getElementById("prename_err").innerHTML = "";
    document.getElementById("phone_err").innerHTML = "";
    document.getElementById("email_err").innerHTML = "";
    document.getElementById("amount_err").innerHTML = "";
    //var
    var name = document.getElementById("name").value;
    var prename = document.getElementById("prename").value;
    var phone = document.getElementById("phone").value;
    var mail = document.getElementById("email").value;
    var amount = document.getElementById("amount").value;

    var days

    var error_name;
    var error_prename;
    var error_phone;
    var error_mail;
    var error_amount;

    //name
    //console.log(error_name);
    if(error_name == undefined) error_name = checkEmpty(name, "Name");
    if(error_name == undefined) error_name = checklength(name, "Name", 20);
    if(error_name == undefined) error_name = checkSpecialChars(name, "Name");
    //prename
    if(error_prename == undefined) error_prename = checkEmpty(prename, "Prename");
    if(error_prename == undefined) error_prename = checklength(prename, "Prename", 30);
    if(error_prename == undefined) error_prename = checkSpecialChars(prename, "Prename");
    //phone
    if(error_phone == undefined) error_phone = checkPhoneNumber(phone, "Phone");
    //mail
    if(error_mail == undefined) error_mail = checkEmpty(mail, "Mail");
    if(error_mail == undefined) error_mail = checklength(mail, "Mail", 30);
    if(error_mail == undefined) error_mail = checkMail(mail);
    //amount
    if(error_amount == undefined) error_amount = checkEmpty(amount, "Amount");
    if(error_amount == undefined) error_amount = checkNumberBetween(amount, "Amount", 1, 20);

    
    if (error_name != undefined || error_prename != undefined || error_phone != undefined || error_mail != undefined || error_amount != undefined) {

        if(error_name != undefined) document.getElementById("name_err").innerHTML = error_name;
        if(error_prename != undefined) document.getElementById("prename_err").innerHTML = error_prename;
        if(error_phone != undefined) document.getElementById("phone_err").innerHTML = error_phone;
        if(error_mail != undefined) document.getElementById("email_err").innerHTML = error_mail;
        if(error_amount != undefined) document.getElementById("amount_err").innerHTML = error_amount;
        
    }
    else{
        document.getElementById("name_export").value = document.getElementById("name").value;
        document.getElementById("prename_export").value = document.getElementById("prename").value;
        document.getElementById("phone_export").value = document.getElementById("phone").value;
        document.getElementById("email_export").value = document.getElementById("email").value;
        document.getElementById("amount_export").value = document.getElementById("amount").value;

        if(document.getElementById("simpathy").value == 0) days = 30;
        else if(document.getElementById("simpathy").value == 1) days = 20;
        else if(document.getElementById("simpathy").value == 2) days = 15;
        else if(document.getElementById("simpathy").value == 3) days = 10;

        var eArt = document.getElementById("artist");
        var eSim = document.getElementById("simpathy");

        document.getElementById("artist_export").value = eArt.options[eArt.selectedIndex].text;
        document.getElementById("simpathy_export").value = eSim.options[eSim.selectedIndex].text +" (="+ days + " days)";
        document.getElementById("purchas_export").value = new Date().toISOString().slice(0, 10);
        document.getElementById("payment_export").value = addDays(document.getElementById("purchas_export").value, days);


        document.getElementById("confirmOverview").setAttribute("disabled", true);
        document.getElementById("name").setAttribute("disabled", true);
        document.getElementById("prename").setAttribute("disabled", true);
        document.getElementById("phone").setAttribute("disabled", true);
        document.getElementById("email").setAttribute("disabled", true);
        document.getElementById("amount").setAttribute("disabled", true);
        document.getElementById("artist").setAttribute("disabled", true);
        document.getElementById("simpathy").setAttribute("disabled", true);
        
        document.getElementById("btnDiscard").removeAttribute('disabled');
        document.getElementById("btnTransmit").removeAttribute('disabled');

    }

    evt.preventDefault();
}


function checkEmpty(obj, objName) {
    if (obj.length == 0) {
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
    let IsSpecialCharsProof = 0;

    for (const c of obj) {
        if (specialChars.includes(c)) IsSpecialCharsProof++;
    }
    if (IsSpecialCharsProof != 0) {
        return objName + " cannot contain the following symbols: " + specialChars;
    }
}

function checkPhoneNumber(obj, objName) {

    let specialChars = `+-/()0123456789`
    let IsSpecialCharsProof = 0;

    for (const c of obj) {
        if (!specialChars.includes(c)) IsSpecialCharsProof++;
    }

    if (IsSpecialCharsProof != 0) {
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
    if (obj < min) {
        return objName + " is too large";
    } else if (obj > max) {
        return objName + " is too small";
    }
}

function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result.toISOString().slice(0, 10);
}

function btnDiscardKlick(){
    document.getElementById("confirmOverview").removeAttribute('disabled');
    document.getElementById("name").removeAttribute('disabled');
    document.getElementById("prename").removeAttribute('disabled');
    document.getElementById("phone").removeAttribute('disabled');
    document.getElementById("email").removeAttribute('disabled');
    document.getElementById("amount").removeAttribute('disabled');
    document.getElementById("artist").removeAttribute('disabled');
    document.getElementById("simpathy").removeAttribute('disabled');

    document.getElementById("name").value = "";
    document.getElementById("prename").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("email").value = "";
    document.getElementById("amount").value = "";

    document.getElementById("name_export").value = "";
    document.getElementById("prename_export").value = "";
    document.getElementById("phone_export").value = "";
    document.getElementById("email_export").value = "";
    document.getElementById("amount_export").value = "";
    document.getElementById("artist_export").value = "";
    document.getElementById("simpathy_export").value = "";
    document.getElementById("purchas_export").value = "";
    document.getElementById("payment_export").value = "";
}