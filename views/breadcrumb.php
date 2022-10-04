<?php
if (isset($_GET['dm'])) { ?>
    <a onclick="handleAjax(event,'?shop')" class="breadcrumb__link breadcrumb__link-prev">SEARCH</a>
    <span class="divider">/</span>
    <a href="?dm=<?= $_GET["dm"] ?>&dm_ten=<?= $_GET["dm_ten"] ?>" class=" breadcrumb__link breadcrumb__link-current text-uppercase"><?= $_GET["dm_ten"] ?></a>
<?php
} else {
?>
    <a href="?shop" class="breadcrumb__link breadcrumb__link-current">SEARCH</a>
<?php
}
?>