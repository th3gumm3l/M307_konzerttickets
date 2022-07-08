<?php
class EditController
{
    public function insertOrder()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();
        $orderid = $_GET['orderid'];
        $userid = $_GET['userid'];


        $stmtUser = $pdo->query('SELECT * FROM users');
        $users = $stmtUser->fetchAll(PDO::FETCH_ASSOC);


        $usernames = [];
        foreach ($users as $user) {
            $usernames[$user['id']] = $user['name'];
        }

        $username = $usernames["$userid"];


        $userprenames = [];
        foreach ($users as $user) {
            $userprenames[$user['id']] = $user['prename'];
        }

        $userprename = $userprenames["$userid"];


        $useremails = [];
        foreach ($users as $user) {
            $useremails[$user['id']] = $user['email'];
        }

        $useremail = $useremails["$userid"];

        $userphones = [];
        foreach ($users as $user) {
            $userphones[$user['id']] = $user['phone'];
        }

        $userphone = $userphones["$userid"];

        $paystatus = $_GET['payed'];

        $alertvar = $_GET['alert'] ?? null;
        if ($alertvar != null) {
            $alert = $alertvar;
        }

        require 'app/Views/edit.view.php';
    }

    public function edit()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();

        $errors = [];
        $userid = $_GET['userid'];
        $orderid = $_GET['orderid'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $newusername = $_POST['nameedit'];
            $newuserprename = $_POST['prenameedit'];
            $newuseremail = $_POST['mailedit'];
            $newuserphone = $_POST['phoneedit'];
            $newpaystatus = $_POST['payededit'] ?? 0;
    
            trim($newusername);
            trim($newuserprename);
            trim($newuseremail);
            trim($newuserphone);
    
            if ($newusername == '') {
                $errors[] = "Name is missing";
            }
    
            if ($newuserprename == '') {
                $errors[] = "Prename is missing";
            }
    
            if ($newuseremail == '' || filter_var($newuseremail, FILTER_VALIDATE_EMAIL) === FALSE) {
                $errors[] = "Email missing or incorrect";
            }
    
            if (str_contains($newuserphone, '+') === true || str_contains($newuserphone, '-') === true || str_contains($newuserphone, '/') === true || str_contains($newuserphone, '(') === true || str_contains($newuserphone, ')') === true) {
            } else {
                $errors[] = "Phonenumber is incorrect";
            }
    
            if ($newpaystatus == "payed") {
                $newpaystatus = 1;
            }
    
            $ConcertModel->update($userid, $orderid, $newusername, $newuserprename, $newuseremail, $newuserphone, $newpaystatus);
        }

        header('LOCATION: /m307_konzerttickets/list');

    }
}
?>