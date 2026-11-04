<html>
    <head>
        <title>8XCLOTHES - Thêm Phân Loại</title>
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
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $insert_phanloai = $phanloai->insert_phanloai();
            }
            ?>
            <section class="tieude">
                THÊM PHÂN LOẠI
            </section>
            <form action="" method="POST" enctype="multipart/form-data">
                <section style="margin-left:40%;">
                    Tên phân loại: <br>
                    <input name="tenphanloai" type="text" required> <br>
                    <br>
                    Nhóm phân loại: <br>
                    <select name="nhomphanloai" required>
                        <option value="Áo">Áo</option>
                        <option value="Quần">Quần</option>
                    </select>
                    <br>
                    Hình ảnh phân loại: <br>
                    <input name="hinhanhphanloai" type="file" required> <br>
                    <?php
                    if(isset($insert_phanloai)) {
                        echo "$insert_phanloai<br>";
                    }
                    ?>
                </section>
                <section class=nutthem>
                    <button type=submit style="margin-right:100px">Thêm</button>
                </section>
            </form>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>