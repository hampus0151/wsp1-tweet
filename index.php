<?php
//Inkluderar dbinfo.php
include 'include/dbinfo.php';
// mysql -u -p
// use database;
//försöker få kontakt med servern
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $database . '',
         $user,
          $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//preparera informationen i servern
$sth = $dbh->prepare('SELECT * FROM tweet
            JOIN users
            ON tweet.user_id = users.id');
//skriv informationen på servern
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

//Inkluderar index_layout.php
include 'views/index_layout.php'
?>
