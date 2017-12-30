<meta charset="utf-8"/>


<?php
$conn=mysql_connect('localhost','tid','tpass');
mysql_select_db('tdb',$conn);

$uploaddir='pro/';
$pname = $_POST['pname'];
$price = $_POST['price'];
$invent = $_POST['invent'];
$pcomm = $_POST['pcomment'];
$a = $_FILES['pfile']['name']; // 업로드한 파일명
$b = $_FILES['pfile']['tmp_name'];// 임시 디렉토리에 저장된 파일명
//$c = $_FILES['pfile']['size'];// 업로드한 파일의 크기
$d = $_FILES['pfile']['type']; //파일타입


if($d=='image/jpeg'||$d=='image/jpg'||$d=='image/gif'||$d=='image/png'){
    move_uploaded_file($_FILES['pfile']['tmp_name'], 'img/'.iconv("UTF-8","EUC-KR", $_FILES['pfile']['name']));
    echo "이미지가 업로드되었습니다!!<br />";
    $query = "insert into showpro values('','$pname', '$price', '$invent', '$pcomm', '$a', '$d')";
    mysql_query($query, $conn);
    echo "sql 등록완료!";
    
}else{
    echo "사진이 아닌가요?<br />".$d;
}

?>