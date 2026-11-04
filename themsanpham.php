<html>
    <head>
        <title>8XCLOTHES - Thêm Sản Phẩm</title>
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
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $insert_sanpham = $sanpham->insert_sanpham();
            }
            ?>
            <section class=tieude>
                THÊM SẢN PHẨM
            </section>
            <form action="" method="POST" enctype="multipart/form-data">
                <section class=form>
                    <div>
                        Phân loại sản phẩm: <br>
                        <select name="tenphanloai" required>
                            <?php
                            $show_phanloai = $sanpham->show_phanloai();
                            if($show_phanloai) {
                                while($result = $show_phanloai->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $result['tenphanloai'] ?>"><?php echo $result['tenphanloai'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select> <br>
                        Tên sản phẩm: <br>
                        <input name="tensanpham" type="text" required> <br>
                        Mã sản phẩm: <br>
                        <input name="masanpham" type="text" required> <br>
                        Giá sản phẩm: <br>
                        <input name="giasanpham" type="text" required> <br>
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
                        <input name="soluongsanpham" type="text" required> <br>
                        Mô tả sản phẩm: <br>
                        <textarea name="motasanpham" required></textarea> <br>
                        Hình ảnh sản phẩm: <br>
                        <input name="hinhanhsanpham" type="file" required> <br>
                        <?php
                        if(isset($insert_sanpham)) {
                            echo "$insert_sanpham<br>";
                        }
                        ?>
                    </div>
                </section>
                <section class=nutthem>
                    <button type=submit style="margin-right:100px">THÊM</button>
                </section>
            </form>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>
