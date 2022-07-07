<?php
class FormController
{
    public function formMain()
    {
        $pdo = db();

        $statementArtists = $pdo->query('SELECT artist FROM concerts');
        $allArtists = $statementArtists->fetch();
        
        print_r($allArtists);


        require 'app/Views/formView.view.php';
    }

    public function validateInputForm()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();

        $timestamp = time();
        $statementArtists = $pdo->query('SELECT artist FROM concerts');


/// PROBLEM TO STRING DINGENS
        $allArtists = $statementArtists->fetch('artist');
        $ArtistList = [];
        foreach ($allArtists as $Artist) {
            $ArtistList[] = $Artist['artist'];
        }
        var_dump($ArtistList);



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors = [];

            // UserDB Input
            $prename = $_POST['prename'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'] ?? '';
            $simpathy = $_POST['simpathy'];

            // ConcertDB Input
            $ArtistID = 0;
            $artist = $_POST['artists'];

            // OrderDB Input
            $orderdate = date("d.m.Y", $timestamp);
            $amount = $_POST['amount'];

            // Bereinigen
            trim($prename);
            trim($name);
            trim($email);
            trim($phone);

            trim($artist);
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

            if (filter_var($phone, FILTER_VALIDATE_INT) === FALSE) {
                if (str_contains($phone, '+') === true || str_contains($phone, '-') === true || str_contains($phone, '/') === true || str_contains($phone, '(') === true || str_contains($phone, ')') === true) {
                } else {
                    $errors[] = "Phonenumber is incorrect";
                }
            }

            if ($simpathy < 0 || $simpathy > 3) {
                $errors[] = "Incorrect simpathy chosen";
            }

            if ($artist == '' || str_contains($allArtists, $artist) === FALSE) {
                $errors[] = "Artist not found or not typed in";
            }

            //Gibt ID des Artists
            if (str_contains($allArtists, $artist) === TRUE) {
                $statmentGetArtistID = $pdo->prepare('SELECT id FROM concerts WHERE artist = :artist');
                $statmentGetArtistID->bindParam(':artist', $artist);
                $ArtistID = $statmentGetArtistID->execute();
            }

            if ($amount <= 20 || $amount <= 1) {
                $errors[] = "Amount out of range";
            }

            $status = $ConcertModel->createOrder($prename, $name, $email, $phone, $simpathy, $ArtistID, $orderdate, $amount);

            echo $status;
        }

        header('LOCATION: /m307_konzerttickets/formView.view.php');
    }
}
