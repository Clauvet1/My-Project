<?php 
$userName = $_POST['userName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$email = $_POST['email'];
$customerName = $_POST['customerName'];
$date = $_POST['date'];
$totalCost = $_POST['totalCost'];
$change = $_POST['change'];
$numberOfAdults = $_POST['numberOfAdults'];
$ticketFor = $_POST['ticketFor'];
$myBio = $_POST['myBio']
?>

$conn = new mysqli('localhost','root','','projectdb');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(userName, firstName, 
    lastName, password, email, customerName, date, totaCost, change, numberOfAdults, ticketFor, myBio)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiiiiss",$userName, $firstName, $lastName, $password, $email, $customerName,
    $date, $totalCost, $change, $numberOfAdults, $ticketFor, $myBio);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}