<html>
    <head>
        <meta charset="UTF-8">
        <title>8XCLOTHES</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <header>
            <?php include_once "header.php" ?>
        </header>
        <main>
            <?php
            include_once "php/classphanloai.php"
            ?>
            <?php
            $phanloai = new Phanloai;
            $show_phanloai = $phanloai->show_phanloai();
            ?>
            <section class=banner>
                <a href="">
                    <img src="images/banner.png">
                </a>
            </section>
            <section class=tieude>
                PHÂN LOẠI SẢN PHẨM
            </section>
            <section class=cacphanloai>
                <?php
                if($show_phanloai) {
                    while($result = $show_phanloai->fetch_assoc()) {
                ?>
                <div class=phanloai>
                    <a href="phanloai.php?id=<?php echo $result['idphanloai'] ?>"><img style="width:330px;height:330px" src="php/uploads/<?php echo $result['hinhanhphanloai'] ?>"></a>
                    <br>
                    <a href="phanloai.php?id=<?php echo $result['idphanloai'] ?>"><h1><?php echo $result['tenphanloai'] ?></h1></a>
                </div>
                <?php     
                    }
                }
                ?>
            </section>
        </main>
        <footer>
            <?php include_once "footer.php" ?>
        </footer>
    </body>
</html>