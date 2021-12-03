<?php
    include "session.php";
    echo $_SESSION['ses_userid'].'님 로그아웃 하겠습니다.';
 
    unset($_SESSION['ses_userid']);
 
    if($_SESSION['ses_userid'] == null){
        echo "<script>alert('로그아웃되었습니다. 메인페이지로 돌아갑니다.');
        location.href='/index.php'; </script>";
    }
?>
