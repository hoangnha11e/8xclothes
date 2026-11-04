<html>
    <head>
        <title>8XCLOTHES - Sửa Phân Loại</title>
        <link rel="stylesheet" href="css/quanly.css">
    </head>
    <body>
        <header>
            <?php include_once "headera.php" ?>
        </header>
        <main style="height:66%">
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
            ?>
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                unlink("php/uploads/".$result['hinhanhphanloai']);
                $update_phanloai = $phanloai->update_phanloai($idphanloai);
            }
            ?>
            <section class="tieude">
                SỬA PHÂN LOẠI
            </section>
            <form action="" method="POST" enctype="multipart/form-data">
                <section style="margin-left:40%;">
                    Tên phân loại: <br>
                    <input name="tenphanloai" type="text" required  value="<?php echo $result['tenphanloai'] ?>"> <br>
                    <br>
                    Nhóm phân loại: <br>
                    <select name="nhomphanloai" required value="<?php echo $result['nhomphanloai'] ?>">
                        <option value="Áo">Áo</option>
                        <option value="Quần">Quần</option>
                    </select>
                    <br>
                    Hình ảnh phân loại: <br>
                    <input name="hinhanhphanloai" type="file" required  value="<?php echo $result['hinhanhphanloai'] ?>"> <br>
                    <?php
                    if(isset($update_phanloai)) {
                        echo "$update_phanloai<br>";
                    }
                    ?>
                </section>
                <section class=nutthem>
                    <button type=submit style="margin-right:100px">Sửa</button>
                </section>
            </form>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>