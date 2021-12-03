
<?php
    include "session.php";

    $memberId = $_SESSION['ses_userid'];
    
    $sql = "DELETE FROM member WHERE M_num = '$memberId'";

    $conn = mysqli_connect('localhost', 'root', '111111', 'coffee');
    $result = mysqli_query($conn, $sql);
 
    if($result === true){
        
        echo "<script>alert('회원탈퇴 되었습니다. 메인페이지로 돌아갑니다.');
            location.href='/index.php'; </script>";
        unset($_SESSION['ses_userid']);
        session_destroy();
    }
    else{
        echo '회원탈퇴를 하지 못하였습니다.';
    }
?>