<?php
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);


//echo $_POST['first_name'].$_POST['last_name'].$_POST['email'];
$mysqli = new mysqli("localhost", "root", "", "students");

/* проверяем соединение */
if (mysqli_connect_errno()) {
    echo "Բազաին չի կպել" . mysqli_connect_error();
    exit();
}



if($mysqli = mysqli_query($mysqli, "INSERT INTO user (anun,azganun,email)
                              VALUES ('$_POST[name]','$_POST[surname]','$_POST[email]')") ){
    echo "<h3>Հաջողությամբ գրանցվել եք</h3>";
}



