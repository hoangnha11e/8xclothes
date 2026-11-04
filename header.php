<head>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <?php
    include_once "php/classphanloai.php"
    ?>
    <?php
    $phanloai = new Phanloai;
    ?>
    <li>
        <a id=atmn href=""><img id=tmn src="images/thanhmenu.png"></a>
        <ul class="menu">
            <li><span>Áo</span>
                <ul>
                    <?php
                    $show_phanloai = $phanloai->show_phanloai();
                    if($show_phanloai) {
                        while($result = $show_phanloai->fetch_assoc()) {
                            if($result['nhomphanloai'] == "Áo") {
                    ?>
                    <li><a href="phanloai.php?id=<?php echo $result['idphanloai'] ?>"><?php echo $result['tenphanloai'] ?></a></li>
                    <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </li>
            <li><span>Quần</span>
                <ul>
                    <?php
                    $show_phanloai = $phanloai->show_phanloai();
                    if($show_phanloai) {
                        while($result = $show_phanloai->fetch_assoc()) {
                            if($result['nhomphanloai'] == "Quần") {
                    ?>
                    <li><a href="phanloai.php?id=<?php echo $result['idphanloai'] ?>"><?php echo $result['tenphanloai'] ?></a></li>
                    <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="index.php">
            <img id=logo src="images/logo.png">
        </a>
    </li>
    <div>
        <li>
            <a href="dangnhap.php">
                <img id=adn src="images/anhdangnhap.png">
                Đăng nhập
            </a>
        </li>
        <li>
            <a href="giohang.php">
                <img id=agh src="images/anhgiohang.png">
                Giỏ hàng
            </a>
        </li>
    </div>
</body>

