<?php
class ConcertModel
{
    public function getAllArtists()
    {
        $pdo = db();

        $statement = $pdo->query('SELECT id FROM concerts');
        $artists = $statement->fetchAll();

        return $artists;
    }

    public function createOrder(string $prename, string $name, string $email, string $phone, int $simpathy, int $ArtistID, string $orderdate, int $amount)
    {
        $pdo = db();
        try {
            // Verarbeiten
            $statementUsers = $pdo->prepare('INSERT INTO users (prename, `name`, email, phone, simpathy) VALUES (:prename, :name, :email, :phone, :simpathy)');
            $statementUsers->bindParam(':prename', $prename);
            $statementUsers->bindParam(':name', $name);
            $statementUsers->bindParam(':email', $email);
            $statementUsers->bindParam(':phone', $phone);
            $statementUsers->bindParam(':simpathy', $simpathy);
    
            $latestUserID = $pdo->lastInsertId();
            $paymentterm = 0; //Wird noch ausprogrammiert
    
            $statementOrders = $pdo->prepare('INSERT INTO orders (orderdate, amount, paymentterm, fk_concertID, fk_userID) VALUES (:orderdate, :amount, :paymentterm, :fk_concertID, :fk_userID)');
            $statementOrders->bindParam('orderdate', $orderdate);
            $statementOrders->bindParam('amount', $amount);
            $statementOrders->bindParam('paymentterm', $paymentterm);
            $statementOrders->bindParam('fk_concertID', $ArtistID);
            $statementOrders->bindParam('fk_userID', $latestUserID);

            return "hat funktioniert";
        } 
        catch (\Throwable $th) 
        {
            return $th;
        }
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
