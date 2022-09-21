<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/public/css/header.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <?php 
    @session_start();
    include_once "../modules/db_module.php";
    require_once "../models/sanpham.php";
    require_once "../models/listsanpham.php";
    $duongdan = "searchPage.php";
    $linklogo = "../assets/public/img/masthead_logo.jpg";
    $linkhome = "../index.php";
    $linksearchpage = "";
    include "header.php";
        $link = null;
        taoKetNoi($link);
        if(isset($_GET['size']) && isset($_GET['quantity'])){
            $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id_sp =".$_GET['id']."");
            $row = mysqli_fetch_row($result);
            $sp = new sanpham($row[1],$row[2],$row[3],$_GET['size'],$_GET['quantity']);
            $listsp = new listsanpham();
            if(isset($_SESSION['danhsach5'])) {
                $listsp = unserialize($_SESSION['danhsach5']);
                $listsp->addSp($sp);
                $_SESSION['danhsach5'] = serialize($listsp);
            } else {
                $listsp->addSp($sp);
                $_SESSION['danhsach5'] = serialize($listsp);
            }
            foreach($listsp->getListsanpham() as $sp) {
                echo "
                    <div>
                        <h2>".$sp->getTen()."</h2>
                        <img src='".$sp->getImg()."' alt='' class=''>


                    </div>
                ";
            }
            
                
        } else {
            echo "
                <span class='header-cart-noCart'>No products in the cart.</span>
            ";
        }
    ?>

    </div>
</body>
</html>
