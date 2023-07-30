<?php 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$myBio = $_POST['myBio']
?>

$conn = new mysqli('localhost','root','','projectdb');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into admindetails(firstName, 
    lastName, email, myBio)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email,  $myBio);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}