<?php
class OrderlistController
{
    public function orderlist()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();

        $stmtOrder = $pdo->query('SELECT * FROM orders');
        $orders = $stmtOrder->fetchAll(PDO::FETCH_ASSOC);

        $stmtConcert = $pdo->query('SELECT * FROM concerts');
        $artists = $stmtConcert->fetchAll(PDO::FETCH_ASSOC);

        $artistlist = [];
        foreach ($artists as $artist) {
            $artistlist[$artist['id']]=$artist['artist'];
        }

        $stmtUser = $pdo->query('SELECT * FROM users');
        $users = $stmtUser->fetchAll(PDO::FETCH_ASSOC);

        $usernames = [];
        foreach ($users as $user) {
            $usernames[$user['id']]=$user['name'];
        }

        $userprenames = [];
        foreach ($users as $user) {
            $userprenames[$user['id']]=$user['prename'];
        }

        $useremails = [];
        foreach ($users as $user) {
            $useremails[$user['id']]=$user['email'];
        }

        $userphones = [];
        foreach ($users as $user) {
            $userphones[$user['id']]=$user['phone'];
        }
        
        require 'app/Views/list.view.php';
    }
}
