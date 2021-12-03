<?php
    include "session.php";
    include "dbConnect.php";
 
    $memberId = $_POST['U_id'];
    $memberPw = $memberPw = $_POST['U_pass'];
    $manager = 'manager';
    // $cookieId = "ㄴㄴㄴ";
    // $cookieValue = "12345";
    // setcookie($cookieId,$cookieValue,time()+3600),"/");

    $sql = "SELECT * FROM member WHERE M_num = '{$memberId}' AND M_password = '{$memberPw}'";
    $res = $dbConnect->query($sql);
 
    $row = $res->fetch_array(MYSQLI_ASSOC);
 
    if ($row != null) {
        if($memberId === $manager){
             echo "<script> location.href='/admin.php'</script>;";
        } else {
            $_SESSION['ses_userid'] = $row['M_num'];
            $_SESSION['ses_username'] = $row['M_name'];
            echo $_SESSION['ses_userid'].'님 안녕하세요';
            // echo '<br> <a href="./index-login.php">메인</a><br>';
            // echo '<a href="./signOut.php">로그아웃 하기</a>';
            // echo '<br> <a href="./select.php">선택</a><br>';
            // echo '<a href="./Edelete.php">회원탈퇴</a>';
            echo "<script> location.href='/indexLogin.php'</script>;";
        }
    }
 
    if($row == null){
        echo "<script>alert('로그인 실패 : 아이디와 비밀번호가 일치하지 않습니다.');
            location.href='/login.php'</script>";
    }
?>