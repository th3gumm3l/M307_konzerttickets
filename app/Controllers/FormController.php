<?php
class FormController
{
    public function form()
    {
        $ConcertModel = new ConcertModel();
        $ArtistList = $ConcertModel->getAllArtists();
        
        $alert = $_GET['alert'];
        
        require 'app/Views/form.view.php';
    }

    public function validateInputForm()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();
        $status = "OK";
        $timestamp = time();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors = [];

            // UserDB Input
            $prename = $_POST['prename'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'] ?? '';


            // ConcertDB Input
            $ArtistID = $_POST['artist'];
            echo $ArtistID; //////// Problem ist, dass nicht ganzer Array-Eintrag ausgegeben wird = The Beatles --> The

            // OrderDB Input
            $orderdate = date("Y.m.d", $timestamp);
            $amount = $_POST["amount"];

            // Bereinigen
            trim($prename);
            trim($name);
            trim($email);
            trim($phone);

            trim($amount);

            // Validieren
            if ($prename == '') {
                $errors[] = "Prename is missing";
            }

            if ($name == '') {
                $errors[] = "Name is missing";
            }

            if ($email == '' || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                $errors[] = "Email missing or incorrect";
            }

            if (str_contains($phone, '+') === true || str_contains($phone, '-') === true || str_contains($phone, '/') === true || str_contains($phone, '(') === true || str_contains($phone, ')') === true) {
            } else {
                $errors[] = "Phonenumber is incorrect";
            }

            if ($amount >= 20 || $amount <= 1) {
                $errors[] = "Amount out of range";
            }

            ///////////// Fehler Ausgabe noch machen
            if (count($errors) != 0) {
                header('LOCATION: /m307_konzerttickets/');
                foreach ($errors as $error) {
                    echo $error;
                    echo '<br>';
                }
            }

            $status = $ConcertModel->createOrder($prename, $name, $email, $phone, $ArtistID, $orderdate, $amount);

        }

        if ($status != "OK") {
            $alert = "Failed";
        }
        else {
            $alert = "Sent";
            header('LOCATION: /m307_konzerttickets/form?alert='.$alert);
        }

    }

    public function CalcPaymentTerm()
    {
        # code...
    }
}
