<?php
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Phone = $_POST["Phone"];
$Password = $_POST["Password"];
echo $_POST["Verification"];
echo $_POST["verify_ans"];
// mysql:host=主機位置、dbname 資料庫名稱、charset編碼
$dsn = "mysql:host=localhost;dbname=web08;charset=utf8";
$pdo = new PDO($dsn,"admin","1234");

// $sql = "select * from `tickets`";
// $row = $pdo->query($sql)->fetchAll();

// print_r($row);

if($_POST["Verification"] != $_POST["verify_ans"]){
    echo "<script>alert('驗證碼是錯誤的')</script>";
    echo "<script>location.href='home.html'</script>";
}else{
$insert_sql = "INSERT INTO `tickets` (`id`, `fristname`, `lastname`, `phone`, `passeord`) VALUES (NULL, '$Firstname', '$Lastname', '$Phone', '$Password');";
$pdo->query($insert_sql);
echo "<script>alert('輸入正確')</script>";
echo "<script>location.href='home.html'</script>";
}
