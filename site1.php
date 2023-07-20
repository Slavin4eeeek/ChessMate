<?php
$servername = "localhost1";
$username = "root";
$password = "";
$database_name = "it";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn) {
    die("Потеряно соединение с Базами Данных" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['phone'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO Users1(name, phone, message)
    VALUES ('$name', '$phone','$message')";
    if (mysqli_query($conn, $sql_query))
    {
       echo "Ваши данные успешно сохранены!";
    }
    else
    {
       echo "Что-то пошло не так! " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
