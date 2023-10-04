<?php
include_once 'top.php';
include_once 'menu.php';

?>
<div>
    <div class="container-fluid px-4">
        <!--<h1>Selamat Datang Di Halaman Admin</h1> -->

        <?php
        error_reporting(0); 
        //membuat logic sederhana untuk mengarahkan url ke file
        //yang mempunyai extension.php
        //routing => file yang mengarahkan ke url

        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        }else if (!empty($url)){
            include_once ''.$url.'.php';
        }else {
          include_once 'dashboard.php';
        }
        ?>
    </div>
</div>

<?php
include_once 'bottom.php';
?>