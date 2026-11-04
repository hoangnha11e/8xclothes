<?php
include_once "php/classphanloai.php";
?>
<?php
$phanloai = new Phanloai;
if(!isset($_GET['idphanloai']) || $_GET['idphanloai'] == NULL) {
    echo "<script>window.location = 'quanlyphanloai.php'</script>";
}
else {
    $idphanloai = $_GET['idphanloai'];
}
$get_phanloai = $phanloai->get_phanloai($idphanloai);
if($get_phanloai) {
    $result = $get_phanloai->fetch_assoc();
}
unlink("php/uploads/".$result['hinhanhphanloai']);
$delete_phanloai = $phanloai->delete_phanloai($idphanloai);
?>
