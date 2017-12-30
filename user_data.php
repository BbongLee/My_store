<meta charset="utf-8" />


<!--
<table border="1" width=1000px>
    <tr>
        <td>이름</td>
        <td>성별</td>
        <td>생년월일</td>
        <td>아이디</td>
        <td>비밀번호</td>
        <td>비밀번호재입력</td>
        <td>이메일</td>
        <td>핸드폰번호</td>
    </tr>
    <tr>
    
-->
<?php
        
    include "db_info.php";
        
    $name = $_POST['user_name'];
    $gen = $_POST['gender'];
    $birth = $_POST['user_birth'];
    $id = $_POST['user_id'];
    $pass = $_POST['pass'];
    $repass = $_POST['passpp'];
    $postcode = $_POST['postcode'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $email_id = $_POST['email_id'];
    $email_addr = $_POST['email_addr'];
    $pNum = $_POST['pNum'];
    $pNumMid = $_POST['pNumMid'];
    $pNumFin = $_POST['pNumFin'];
//        $hNum = $_POST['hNum'];
//        $hNumMid = $_POST['hNumMid'];
//        $hNumFin = $_POST['hNumFin'];
        //$agree = $_POST['agree'];

    echo $name."<br />";
    echo $gen."<br />";
    echo $birth."<br />";
    echo $id."<br />";
    echo $pass."<br />";
    echo $repass."<br />";
    echo $postcode."<br />";
    echo $address."<br />";
    echo $address2."<br />";
    echo $email_id."<br />";
    echo $email_addr."<br />";
    echo $pNum."<br />";
    echo $pNumMid."<br />";
    echo $pNumFin."<br />";   
        
//        if($pass!=$repass) {   
//         echo '<script>alert("입력된 비밀번호와 확인이 잘못되었습니다. 변경 바랍니다.");</script>';
//        }
       // $email=;

    $query = "insert into user values('','$name', '$gen', '$birth','$id','$pass','$postcode','$address','$address2','$email_id', '$email_addr', '$pNum', '$pNumMid', '$pNumFin');
    $result = mysql_query($query, $conn);
//        
        //
        
     

?>