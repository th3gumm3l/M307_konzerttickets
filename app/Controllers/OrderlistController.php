<?php
class OrderlistController
{
    public function orderlist()
    {
        require 'app/Views/list.view.php';
    }
    
    public function edit()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();
        
        $statementArtists = $pdo->query('SELECT artist FROM concerts');
        
        require 'app/Views/edit.view.php';
    }
}
