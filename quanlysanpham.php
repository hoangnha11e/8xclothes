<html>
    <head>
        <title>8XCLOTHES - Quản Lý Sản Phẩm</title>
        <link rel="stylesheet" href="css/quanly.css">
    </head>
    <body>
        <header>
            <?php include_once "headera.php" ?>
        </header>
        <main>
            <?php
            include_once "php/classsanpham.php";
            ?>
            <?php
            $sanpham = new Sanpham;
            $show_sanpham = $sanpham->show_sanpham();
            ?>
            <section class="tieude">
                DANH SÁCH SẢN PHẨM
            </section>
            <section class=bang>
                <table text-align="center">
                    <tr>
                        <th>STT</th>
                        <th>Tên phân loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Giá sản phẩm ($)</th>
                        <th>Màu sản phẩm</th>
                        <th>Size sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Hình ảnh sản phẩm</th>
                        <th>Hành động</th>
                    </tr>
                    <?php
                    if($show_sanpham) {
                        $i = 0;
                        while($result = $show_sanpham->fetch_assoc()) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td style="text-align:left"><?php echo $result['tenphanloai'] ?></td>            
                        <td style="text-align:left"><?php echo $result['tensanpham'] ?></td>
                        <td><?php echo $result['masanpham'] ?></td>
                        <td><?php echo $result['giasanpham'] ?></td>
                        <td><?php echo $result['mausanpham'] ?></td>
                        <td><?php echo $result['sizesanpham'] ?></td>
                        <td><?php echo $result['soluongsanpham'] ?></td>
                        <td style="text-align:left;width:150px"><?php echo $result['motasanpham'] ?></td>
                        <td><img style="width:100px;height:100px" src="php/uploads/<?php echo $result['hinhanhsanpham'] ?>"></td>
                        <td><a href="suasanpham.php?idsanpham=<?php echo $result['idsanpham'] ?>">Sửa</a> |
                        <a href="xoasanpham.php?idsanpham=<?php echo $result['idsanpham'] ?>">Xoá</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </section>
            <section class=nutthem>
                <a href="themsanpham.php"><span>THÊM SẢN PHẨM</span></a>
            </section>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>
