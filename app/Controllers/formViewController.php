<?php
class FormViewController
{
    public function formViewMain()
    {
        require 'app/Views/formView.view.php';
    }

    public function validateInputForm()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();

        $timestamp = time();
        $statementArtists = $pdo->query('SELECT artists FROM concerts');
        $allArtists = $statementArtists->fetchAll();

        $statementUsers = $pdo->query('SELECT users FROM concerts');
        $allUsers = $statementUsers->fetchAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // UserDB Input
            $userid = 0;
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
            if (count($allUsers) == 0) {
                $userid = 0;
            }

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

            $ConcertModel->createOrder($userid, $prename, $name, $email, $phone, $simpathy, $ArtistID, $artist, $orderdate, $amount);
        }
    }
}
