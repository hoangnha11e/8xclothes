<html>
    <head>
        <title>8XCLOTHES - Sửa Sản Phẩm</title>
        <link rel="stylesheet" href="css/quanly.css">
    </head>
    <body>
        <header>
            <?php include_once "headera.php" ?>
        </header>
        <main style="height:66%">
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
            ?>
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                unlink("php/uploads/".$result['hinhanhsanpham']);
                $update_sanpham = $sanpham->update_sanpham($idsanpham);
            }
            ?>
            <section class=tieude>
                SỬA SẢN PHẨM
            </section>
            <form action="" method="POST" enctype="multipart/form-data">
                <section class=form>
                    <div>
                        Phân loại sản phẩm: <br>
                        <select name="tenphanloai" required value="<?php echo $result['tenphanloai'] ?>">
                            <?php
                            $show_phanloai = $sanpham->show_phanloai();
                            if($show_phanloai) {
                                while($results = $show_phanloai->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $results['tenphanloai'] ?>"><?php echo $results['tenphanloai'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select> <br>
                        Tên sản phẩm: <br>
                        <input name="tensanpham" type="text" required value="<?php echo $result['tensanpham'] ?>"> <br>
                        Mã sản phẩm: <br>
                        <input name="masanpham" type="text" required value="<?php echo $result['masanpham'] ?>"> <br>
                        Giá sản phẩm: <br>
                        <input name="giasanpham" type="text" required value="<?php echo $result['giasanpham'] ?>"> <br>
                    </div>
                    <div>
                        Màu sản phẩm: <br>
                        <input name="mausanpham[]" type="checkbox" value="Đen" style="margin:0"> Đen <br>
                        <input name="mausanpham[]" type="checkbox" value="Trắng" style="margin:0"> Trắng <br>
                        <input name="mausanpham[]" type="checkbox" value="Xanh" style="margin:0"> Xanh <br>
                        <input name="mausanpham[]" type="checkbox" value="Đỏ" style="margin:0"> Đỏ <br>
                        <br>
                        Size sản phẩm: <br>
                        <input name="sizesanpham[]" type="checkbox" value="S" style="margin:0"> S <br>
                        <input name="sizesanpham[]" type="checkbox" value="M" style="margin:0"> M <br>
                        <input name="sizesanpham[]" type="checkbox" value="L" style="margin:0"> L <br>
                        <input name="sizesanpham[]" type="checkbox" value="XL" style="margin:0"> XL <br>
                    </div>
                    <div>
                        Số lượng sản phẩm: <br>
                        <input name="soluongsanpham" type="text" required value="<?php echo $result['soluongsanpham'] ?>"> <br>
                        Mô tả sản phẩm: <br>
                        <textarea name="motasanpham" required><?php echo $result['motasanpham'] ?></textarea> <br>
                        Hình ảnh sản phẩm: <br>
                        <input name="hinhanhsanpham" type="file" required value="<?php echo $result['hinhanhsanpham'] ?>"> <br>
                        <?php
                        if(isset($update_sanpham)) {
                            echo "$update_sanpham<br>";
                        }
                        ?>
                    </div>
                </section>
                <section class=nutthem>
                    <button type=submit style="margin-right:100px">SỬA</button>
                </section>
            </form>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>