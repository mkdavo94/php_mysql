<?php
$ID = htmlspecialchars($_POST['ID']);

//echo $_POST['first_name'].$_POST['last_name'].$_POST['email'];
$query = new mysqli("localhost", "root", "", "students");

/* проверяем соединение */
if (mysqli_connect_errno()) {
    echo "Բազաին չի կպել" . mysqli_connect_error();
    exit();
}


if($query = mysqli_query($query, "SELECT anun,st_id, (IFNULL(subject1, 0) + IFNULL(subject2,0))/2 AS AvgMark FROM
user JOIN marks ON user.id=marks.st_id
where user.id='$ID'") ){
    while($row = $query->fetch_assoc()) {
        echo "id: " . $row["st_id"]. " - Անուն: " . $row["anun"]."-Միջին գնահատական".$row["AvgMark"];
    }
}




