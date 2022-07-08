<?php
class FormController
{
    public function form()
    {
        $ConcertModel = new ConcertModel();
        $ArtistList = $ConcertModel->getAllArtists();
        
        $alertvar = $_GET['alert'] ?? null;
        if ($alertvar != null) {
            $alert = $alertvar;
        }
        
        require 'app/Views/form.view.php';
        
    }

    public function validateInputForm()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();
        $timestamp = time();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors = [];

            // UserDB Input
            $prename = $_POST['prename_export'];
            $name = $_POST['name_export'];
            $email = $_POST['email_export'];
            $phone = $_POST['phone_export'] ?? '';


            // ConcertDB Input
            $ArtistID = $_POST['artist_export'];

            // OrderDB Input
            $orderdate = date("Y.m.d", $timestamp);
            $amount = $_POST["amount_export"];

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

            if (count($errors) != 0) {
                $alert = "Failed";
                header('LOCATION: /m307_konzerttickets/form?alert='.$alert);
            }

            $status = $ConcertModel->createOrder($prename, $name, $email, $phone, $ArtistID, $orderdate, $amount);

        }

        if ($status != "OK") {
            $alert = "Failed";
            header('LOCATION: /m307_konzerttickets/form?alert='.$alert);
        }
        else {
            $alert = "Sent";
            header('LOCATION: /m307_konzerttickets/form?alert='.$alert);
        }

    }
}
