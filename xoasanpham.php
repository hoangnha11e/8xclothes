<?php
include_once "php/classsanpham.php";
?>
<?php
$sanpham = new Sanpham;
if(!isset($_GET['idsanpham']) || $_GET['idsanpham'] == NULL) {
    echo "<script>window.location = 'quanlysanpham.php'</script>";
}
else {
    $idsanpham = $_GET['idsanpham'];
}
$get_sanpham = $sanpham->get_sanpham($idsanpham);
if($get_sanpham) {
    $result = $get_sanpham->fetch_assoc();
}
unlink("php/uploads/".$result['hinhanhsanpham']);
$delete_sanpham = $sanpham->delete_sanpham($idsanpham);
?>