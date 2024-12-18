<?php require_once("../php/connect.php");?>
<?php session_start();?>

<?php
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELECT user_id FROM users WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login, 'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if($array["user_id"]>0){
    $_SESSION['login']=$array["login"];
    header("Location:../php/adminpanel.php");
}
else{
    header("Location:../php/login.php");
}