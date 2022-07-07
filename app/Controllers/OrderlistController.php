<?php
class OrderlistController
{
    public function orderlist()
    {
        require 'app/Views/orderlist.view.php';
    }
    
    public function testing()
    {
        $pdo = db();

        $statementArtists = $pdo->query('SELECT artist FROM concerts');
    }
}
