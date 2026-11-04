<html>
    <head>
        <title>8XCLOTHES - Quản Lý Phân Loại</title>
        <link rel="stylesheet" href="css/quanly.css">
    </head>
    <body>
        <header>
            <?php include_once "headera.php" ?>
        </header>
        <main>
            <?php
            include_once "php/classphanloai.php";
            ?>
            <?php
            $phanloai = new Phanloai;
            $show_phanloai = $phanloai->show_phanloai();
            ?>
            <section class=tieude>
                DANH SÁCH PHÂN LOẠI
            </section>
            <section class=bang>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên phân loại</th>
                        <th>Nhóm phân loại</th>
                        <th>Hình ảnh phân loại</th>
                        <th>Hành động</th>
                    </tr>
                    <?php
                    if($show_phanloai) {
                        $i = 0;
                        while($result = $show_phanloai->fetch_assoc()) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['tenphanloai'] ?></td>
                        <td><?php echo $result['nhomphanloai'] ?></td>
                        <td style="text-align:center">
                        <img style="width:100px;height:100px" src="php/uploads/<?php echo $result['hinhanhphanloai'] ?>"></td>
                        <td><a href="suaphanloai.php?idphanloai=<?php echo $result['idphanloai'] ?>">Sửa</a> |
                        <a href="xoaphanloai.php?idphanloai=<?php echo $result['idphanloai'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </section>
            <section class=nutthem>
                <a href="themphanloai.php"><span>THÊM PHÂN LOẠI</span></a>
            </section>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>
