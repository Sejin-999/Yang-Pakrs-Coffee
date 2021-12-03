<?php
    
    $name=$_POST['worker-name'];
    $adafter=$_POST['worker-adafter'];
    $adbefo=$_POST['worker-adbefo'];
    $phone=$_POST['worker-phone'];
    
    
      
   $conn = mysqli_connect(
     'localhost',
     'root',
     '111111',
     'coffee'
    );
     $sql = "
     INSERT INTO Emp(
         Emp_phone,
         Emp_name,
         Emp_adafter,
         Emp_adbefo
         ) VALUES (
           '$phone',
           '$name',
           '$adafter',
           '$adbefo'
         )";
         
     $result = mysqli_query($conn, $sql);
     if($result === true){
       echo "<script>alert('정보가 입력되었습니다. 관리자 페이지로 이동합니다.'); location.href='../admin.php'; </script>";
       
     } else {
       echo mysqli_error($conn);
     }
?>