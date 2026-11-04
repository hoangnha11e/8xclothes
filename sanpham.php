<html>
    <head>
        <title>8XCLOTHES - AO KHOAC GIO</title>
        <link rel="stylesheet" href="css/sanpham.css">
    </head>
    <body>
        <header>
            <?php include_once "header.php" ?>
        </header>
        <main>
            <?php
            include_once "php/classsanpham.php";
            ?>
            <?php
            $sanpham = new Sanpham;
            if(!isset($_GET['id']) || $_GET['id'] == NULL) {
                echo "<script>window.location = 'index.php'</script>";
            }
            else {
                $idsanpham = $_GET['id'];
            }
            $get_sanpham = $sanpham->get_sanpham($idsanpham);
            if($get_sanpham) {
                $resultg = $get_sanpham->fetch_assoc();
            }
            $mausac = explode(',',$resultg['mausanpham']);
            $kichco = explode(',',$resultg['sizesanpham']);
            ?>
            <section class=chitietsanpham>
                <div class="left">
                    <img src="php/uploads/<?php echo $resultg['hinhanhsanpham'] ?>">
                </div>
                <div class="right">
                    <div class="ten">
                        <h1>Tên sản phẩm:</h1>
                        <p><?php echo $resultg['tensanpham'] ?></p>
                    </div>
                    <div class="ma">
                        <h1>Mã sản phẩm:</h1>
                        <p><?php echo $resultg['masanpham'] ?></p>
                    </div>
                    <div class="gia">
                        <h1>Giá:</h1>
                        <p><?php echo $resultg['giasanpham'] ?></p>
                    </div>
                    <div class="mota">
                        <h1>Mô tả:</h1>
                        <p><?php echo $resultg['motasanpham'] ?></p>
                    </div>
                    <div class="mausac">
                        <h1>Màu sắc:</h1>
                        <div class=chono>
                            <?php 
                            foreach($mausac as $mau) {
                                echo "<span tabindex=0>$mau</span>";
                            } 
                            ?>
                        </div>
                    </div>
                    <div class="kichco">
                        <h1>Kích cỡ:</h1>
                        <div class=chono>
                            <?php 
                            foreach($kichco as $co) {
                                echo "<div tabindex=0>$co</div>";
                            } 
                            ?>
                        </div>
                    </div>
                    <div class="soluong">
                        <h1>Số lượng:</h1>
                        <div class=chonso>
                            <input type="text" value="1">
                            <div>
                                <div>+</div>
                                <div>-</div>
                            </div>
                        </div>
                    </div>
                    <div class=themvaogio>
                        <input type="button" value="THÊM VÀO GIỎ HÀNG">
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>