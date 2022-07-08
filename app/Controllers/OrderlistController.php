<?php
class OrderlistController
{
    public function orderlist()
    {
        $pdo = db();
        $ConcertModel = new ConcertModel();

        $statement = db()->prepare('SELECT * FROM orders WHERE NOT payed');
        $result = $statement->fetchAll();

        //$statementArtists = $pdo->query('SELECT artist FROM concerts');
        
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
