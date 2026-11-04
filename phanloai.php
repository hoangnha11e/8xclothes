<html>
    <head>
        <title>8XCLOTHES - AO KHOAC</title>
        <link rel="stylesheet" href="css/phanloai.css">
    </head>
    <body>
        <header>
            <?php include_once "header.php" ?>
        </header>
        <main>
            <?php
            include_once "php/classphanloai.php";
            include_once "php/classsanpham.php";
            ?>
            <?php
            $phanloai = new Phanloai;
            if(!isset($_GET['id']) || $_GET['id'] == NULL) {
                echo "<script>window.location = 'index.php'</script>";
            }
            else {
                $idphanloai = $_GET['id'];
            }
            $get_phanloai = $phanloai->get_phanloai($idphanloai);
            if($get_phanloai) {
                $resultg = $get_phanloai->fetch_assoc();
            }
            ?>
            <?php
            $sanpham = new Sanpham;
            $show_sanpham = $sanpham->show_sanpham();
            ?>
            <section class=tieudephanloai>
                <span style="text-transform:uppercase"><?php echo $resultg['tenphanloai'] ?></span>
                <input type="text" placeholder="Tim Kiem San Pham">
                <img src="images/kinhlup.png">
            </section>
            <section class=cacsanpham>
                <?php
                $found = false;
                if($show_sanpham) {
                    while($result = $show_sanpham->fetch_assoc()) {
                        if($result['tenphanloai'] == $resultg['tenphanloai']) {
                            $found = true;
                ?>
                <div class=sanpham>
                    <a href="sanpham.php?id=<?php echo $result['idsanpham'] ?>"><img style="width:330px;height:330px" src="php/uploads/<?php echo $result['hinhanhsanpham'] ?>"></a>
                    <br><br>
                    <a href="sanpham.php?id=<?php echo $result['idsanpham'] ?>"><h1><?php echo $result['tensanpham'] ?></h1></a>
                    <span><?php echo $result['giasanpham'] ?><sup>$</sup></span>
                </div>
                <?php
                        }
                    }
                }
                if(!$found) {
                    echo "<span style='margin-bottom:25%'>Hiện chưa có sản phẩm nào !</span>";
                }
                ?>
            </section>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>
