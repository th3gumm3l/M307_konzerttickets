<?php
class ConcertModel
{
    public function getAllArtists()
    {
        $pdo = db();

        $statement = $pdo->query('SELECT artists FROM concerts');
        $artists = $statement->fetchAll();

        return $artists;
    }


    public function createOrder(int $userid, string $prename, string $name, string $email, string $phone, int $simpathy, int $ArtistID, string $artist, string $orderdate, int $amount)
    {
        $pdo = db();

        // Verarbeiten
        $statementUsers = $pdo->prepare('INSERT INTO users (prename, `name`, email, phone, simpathy) VALUES (:prename, :name, :email, :phone, :simpathy)');


        $statementOrders = $pdo->prepare('INSERT INTO orders (orderdate, amount, payed, paymentterm, fk_concertID, fk_userID) VALUES (:orderdate, :amount, :payed, :paymentterm, :fk_concertID, :fk_userID)');
    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}
