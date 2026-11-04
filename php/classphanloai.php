<?php
include_once "database.php";
?>
<?php
class Phanloai {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insert_phanloai() {
        $tenphanloai = $_POST['tenphanloai'];
        $nhomphanloai = $_POST['nhomphanloai'];
        $hinhanhphanloai = $_FILES['hinhanhphanloai']['name'];
        $filetarget = basename($_FILES['hinhanhphanloai']['name']);
        $filetype = strtolower(pathinfo($hinhanhphanloai,PATHINFO_EXTENSION));
        $filesize = $_FILES['hinhanhphanloai']['size'];
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
                    move_uploaded_file($_FILES['hinhanhphanloai']['tmp_name'],"php/uploads/".$_FILES['hinhanhphanloai']['name']);
                    $query = "INSERT INTO phanloai (tenphanloai,nhomphanloai,hinhanhphanloai)
                    VALUES ('$tenphanloai','$nhomphanloai','$hinhanhphanloai')";
                    $result = $this->db->insert($query);
                    header('Location:quanlyphanloai.php');
                    return $result;
                }
            }
        } 
    }
    public function show_phanloai() {
        $query = "SELECT * FROM phanloai ORDER BY idphanloai ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_phanloai($idphanloai) {
        $query = "SELECT * FROM phanloai WHERE idphanloai = '$idphanloai'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_phanloai($idphanloai) {
        $tenphanloai = $_POST['tenphanloai'];
        $nhomphanloai = $_POST['nhomphanloai'];
        $hinhanhphanloai = $_FILES['hinhanhphanloai']['name'];
        $filetype = strtolower(pathinfo($hinhanhphanloai,PATHINFO_EXTENSION));
        $filesize = $_FILES['hinhanhphanloai']['size'];
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
                move_uploaded_file($_FILES['hinhanhphanloai']['tmp_name'],"php/uploads/".$_FILES['hinhanhphanloai']['name']);
                $query = "UPDATE phanloai SET tenphanloai = '$tenphanloai', hinhanhphanloai = '$hinhanhphanloai', nhomphanloai = '$nhomphanloai'
                WHERE idphanloai = '$idphanloai'";
                $result = $this->db->update($query);
                header('Location:quanlyphanloai.php');
                return $result;
            }
        }
    }
    public function delete_phanloai($idphanloai) {
        $query = "DELETE FROM phanloai WHERE idphanloai = '$idphanloai'";
        $result = $this->db->delete($query);
        header('Location:quanlyphanloai.php');
        return $result;
    }
}
?>