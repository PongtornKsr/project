<?php 
SESSION_START();
require 'connect.php';

$db = mysqli_connect('localhost', 'admin', '1234', 'prodata');


if(isset($_POST['username_check'])){
    $username = $_POST['username'];
    $sql = "SELECT * FROM userdata WHERE username = '$username' and username not in ('".$_SESSION['ucheck']."') ";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo 'taken';
        
    } else {
        echo 'not_taken';
    }
    exit();
}

if(isset($_POST['email_check'])){
    $email = $_POST['email'];
    $sql = "SELECT * FROM userdata WHERE email = '$email' and email not in ('".$_SESSION['echeck']."') ";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
            echo 'taken';
    } else {
        echo 'not_taken';
    }
    exit();
}

if(isset($_POST['save'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $uid = $_POST['uid'];
    $pass = base64_encode($_POST['password']);
    $name = $fname." ".$lname;
    $sql ="UPDATE `userdata` SET `givenName`='".$fname."',`familyName`='".$lname."',`name`='".$name."',`email`='".$email."',`username`='".$uname."',`password`='".$pass."',`last_update`=(SELECT DATE_FORMAT(NOW(),'%d/%m/%y/%H:%i')) WHERE ID = '".$uid."'";
    $results = mysqli_query($db, $sql);
    $_SESSION['Account'] = $fname.' '.$lname;
    echo 'Saved';
    $idid ="";
    $sqlr = "SELECT ID FROM userdata WHERE name = '".$_SESSION['Account']."'";
    $result = mysqli_query($db, $sqlr);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $idid = $row['ID'];

        }
    }
    $sqls = "SELECT * FROM userdata WHERE ID = '$uid' ";
    $result = mysqli_query($db, $sqls);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            if($idid == $uid){
                $_SESSION['Account'] = $row['givenName']." ".$row['familyName'];
               // insert_action("แก้ไขข้อมูลบัญชีผู้ใช้งาน ".$_SESSION['Account']);
            }else{
              //  insert_action("แก้ไขข้อมูลบัญชีผู้ใช้งาน ".$row['givenName']." ".$row['familyName']);
            }
            
            
        }

    }
    exit();
}
?>