<?php
class ConcertModel
{
    public function getAllArtists()
    {
        $pdo = db();

        $statement = $pdo->query('SELECT * FROM concerts');
        $artists = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $artists;
    }

    public function getAllOrders()
    {
        $pdo = db();

        $statement = $pdo->query('SELECT id FROM concerts');
        $artists = $statement->fetchAll();

        return $artists;
    }


    public function createOrder(string $prename, string $name, string $email, string $phone, string $ArtistID, string $orderdate, int $amount)
    {
        $pdo = db();
        // Verarbeiten
        $statementUsers = $pdo->prepare('INSERT INTO users (prename, `name`, email, phone) VALUES (:prename, :name, :email, :phone)');
        $statementUsers->bindParam(':prename', $prename);
        $statementUsers->bindParam(':name', $name);
        $statementUsers->bindParam(':email', $email);
        $statementUsers->bindParam(':phone', $phone);

        $statementUsers->execute();

        $latestUserID = $pdo->lastInsertId();

        $statementartist = $pdo->prepare("SELECT id FROM artists WHERE artist=:artist");
        $statementartist->bindParam(':artist', $ArtistID);
        $statementartist->execute();
        echo $statementartist;

        $paymentterm = 0; //Wird noch ausprogrammiert

        $statementOrders = $pdo->prepare('INSERT INTO orders (orderdate, amount, paymentterm, fk_concertID, fk_userID) VALUES (:orderdate, :amount, :paymentterm, :fk_concertID, :fk_userID)');
        $statementOrders->bindParam(':orderdate', $orderdate);
        $statementOrders->bindParam(':amount', $amount);
        $statementOrders->bindParam(':paymentterm', $paymentterm);
        $statementOrders->bindParam(':fk_concertID', $ArtistID);
        $statementOrders->bindParam(':fk_userID', $latestUserID);

        $statementOrders->execute();
    }

    public function update(int $userid, int $orderid, string $newusername, string $newuserprename, string $newuseremail, string $newuserphone, int $newpaystatus)
    {
        $pdo = db();

        try {
            $statementOrder = $pdo->prepare('UPDATE orders SET payed=:payed WHERE id=:id');
            $statementOrder->bindParam(':payed', $newpaystatus);
            $statementOrder->bindParam(':id', $orderid);
            $statementOrder->execute();

            $statementUser = $pdo->prepare('UPDATE users SET prename = :prename, `name`= :name, email = :email, phone = :phone WHERE id=:id');
            $statementUser->bindParam(':prename', $newuserprename);
            $statementUser->bindParam(':name', $newusername);
            $statementUser->bindParam(':email', $newuseremail);
            $statementUser->bindParam(':phone', $newuserphone);
            $statementUser->bindParam(':id', $userid);
            $statementUser->execute();

            $status = "OK";
            return $status;
        } catch (\Throwable $th) {
            $status = "Failed";
            return $status;
        }
    }
}
