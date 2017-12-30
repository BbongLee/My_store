<meta charset="utf-8" />
<script type="text/javascript">
    
function parent(id){
    alert(id);
    var du = window.opener;
    du.id = id;
    window.opener.id.value=id;
    self.close();
}
    
</script>

<?php
include "db_info.php";

$idch = $_GET['id'];

$isThisId = "select id from member where id='$idch';"
    
if($idch==$isThisId){
    echo "사용불가 합니다.";
}else { 
    echo $idch."는 사용 가능한 아이디입니다.";
    ?>
    
    <input type=button value='사용하기' onclick="parent('<?php echo $idch ?>')">
    <!--  parent 함수를 사용해 !!  -->
    <?php
}


?>