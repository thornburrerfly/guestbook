<?php 

//$dbh= new PDO('mysql:host=localhost;dbname=guestbook', 'root', 'root',array(PDO::ATTR_PERSISTENT => true));

try {
    $dbh = new PDO('mysql:host=localhost;dbname=guestbook', 'root', 'root',array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$name = $_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];

$sql="insert into content (name,email,message) values('{$name}','$email','$message') ";
echo $sql;
$pdo=$dbh->prepare($sql);
$pdo->execute();


 ?>