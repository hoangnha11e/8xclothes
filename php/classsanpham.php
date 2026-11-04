<?php
include_once "database.php";
?>
<?php
class Sanpham {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insert_sanpham() {
        $tenphanloai = $_POST['tenphanloai'];
        $tensanpham = ucwords(strtolower($_POST['tensanpham']));
        $masanpham = $_POST['masanpham'];
        $giasanpham = $_POST['giasanpham'];
        $mausanpham = isset($_POST['mausanpham']) ? implode(',',$_POST['mausanpham']) : '';
        $sizesanpham = isset($_POST['sizesanpham']) ? implode(',',$_POST['sizesanpham']) : '';
        $soluongsanpham = $_POST['soluongsanpham'];
        $motasanpham = $_POST['motasanpham'];
        $hinhanhsanpham = $_FILES['hinhanhsanpham']['name'];
        $filetarget = basename($_FILES['hinhanhsanpham']['name']);
        $filetype = strtolower(pathinfo($hinhanhsanpham,PATHINFO_EXTENSION));
        $filesize = $_FILES['hinhanhsanpham']['size'];
        if(file_exists("php/uploads/$filetarget")) {
            $alert = "File đã tồn tại !";
            return $alert;
        }
        else {
            if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg") {
                $alert = "Chỉ chọn file jpg, png, jpeg";
                return $alert;
            }
            else {
                if($filesize > 5000000) {
                    $alert = "File không được lớn hơn 5MB";
                    return $alert;   
                }
                else {
                    move_uploaded_file($_FILES['hinhanhsanpham']['tmp_name'],"php/uploads/".$_FILES['hinhanhsanpham']['name']);
                    $query = "INSERT INTO sanpham (tenphanloai,tensanpham,masanpham,giasanpham,
                    mausanpham,sizesanpham,soluongsanpham,motasanpham,hinhanhsanpham)
                    VALUES ('$tenphanloai','$tensanpham','$masanpham','$giasanpham',
                    '$mausanpham','$sizesanpham','$soluongsanpham','$motasanpham','$hinhanhsanpham')";
                    $result = $this->db->insert($query);
                    header('Location:quanlysanpham.php');
                    return $result;
                }
            }
        }
    }
    public function show_sanpham() {
        $query = "SELECT * FROM sanpham ORDER BY idsanpham ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_sanpham($idsanpham) {
        $query = "SELECT * FROM sanpham WHERE idsanpham = '$idsanpham'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_sanpham($idsanpham) {
        $tenphanloai = $_POST['tenphanloai'];
        $tensanpham = ucwords(strtolower($_POST['tensanpham']));
        $masanpham = $_POST['masanpham'];
        $giasanpham = $_POST['giasanpham'];
        $mausanpham = isset($_POST['mausanpham']) ? implode(',',$_POST['mausanpham']) : '';
        $sizesanpham = isset($_POST['sizesanpham']) ? implode(',',$_POST['sizesanpham']) : '';
        $soluongsanpham = $_POST['soluongsanpham'];
        $motasanpham = $_POST['motasanpham'];
        $hinhanhsanpham = $_FILES['hinhanhsanpham']['name'];
        $filetype = strtolower(pathinfo($hinhanhsanpham,PATHINFO_EXTENSION));
        $filesize = $_FILES['hinhanhsanpham']['size'];
        if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg") {
            $alert = "Chỉ chọn file jpg, png, jpeg";
            return $alert;
        }
        else {
            if($filesize > 5000000) {
                $alert = "File không được lớn hơn 5MB";
                return $alert;   
            }
            else {
                move_uploaded_file($_FILES['hinhanhsanpham']['tmp_name'],"php/uploads/".$_FILES['hinhanhsanpham']['name']);
                $query = "UPDATE sanpham SET tenphanloai = '$tenphanloai', tensanpham = '$tensanpham', masanpham = '$masanpham',
                giasanpham = '$giasanpham', mausanpham = '$mausanpham', sizesanpham = '$sizesanpham', soluongsanpham = '$soluongsanpham',
                motasanpham = '$motasanpham', hinhanhsanpham = '$hinhanhsanpham' WHERE idsanpham = '$idsanpham'";
                $result = $this->db->insert($query);
                header('location:quanlysanpham.php');
                return $result;
            }
        }
    }
    public function delete_sanpham($idsanpham) {
        $query = "DELETE FROM sanpham WHERE idsanpham = '$idsanpham'";
        $result = $this->db->delete($query);
        header('Location:quanlysanpham.php');
        return $result;
    }
    public function show_phanloai() {
        $query = "SELECT * FROM phanloai ORDER BY idphanloai ASC";
        $results = $this->db->select($query);
        return $results;
    }
}
?>