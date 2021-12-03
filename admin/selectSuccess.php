<?php
    include "session.php";
    // include "dbConnect.php";

    

    $id=$_POST['M_num'];
    $name=$_POST['M_name'];
    $password1=$_POST['M_password'];
    $password2=$_POST['password2'];
    $address1=$_POST['M_address1'];
    $address2=$_POST['M_address2'];

    // echo $id;
    // echo $name;
    // echo $password1;
    // echo $password2;
    // echo $address1;
    // echo $address2;

    $checkid = $_SESSION['ses_userid'];

     
 
    $sql = "UPDATE member
            SET `M_num` = '$id', `M_name` = '$name' , `M_password` = '$password1', `M_address` = '$address1', `M_address2` = '$address2'
            WHERE `M_num` = '$checkid'";
    //$res = $dbConnect->query($sql);
 
    

    $conn = mysqli_connect('localhost', 'root', '111111', 'coffee');
    
    $result = mysqli_query($conn, $sql);

    //$row = mysqli_fetch_array($result);
    
    
     
    
    if ($result === true) {
        echo "<script>alert('회원정보가 수정되었습니다. 메인페이지로 돌아갑니다.');
          location.href='/indexLogin.php'; </script>";
    }
 
    else{
        echo "<script>alert('회원정보수정을 실패하였습니다.');
          location.href='/update.php'; </script>";
    }
?>