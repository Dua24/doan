<?php
if($page==1) {
    echo "<div class='row d-flex align-items-center justify-content-center'>
    <ul class='pagination sPage-pagination'>
    ";
} else {
    echo "<div class='row d-flex align-items-center justify-content-center'>
        <ul class='pagination sPage-pagination'>
        <li class='page-item'>
            <a class='page-link' href='?page=".($page-1)."'>
                <i class='fa-solid fa-chevron-left'></i>
            </a>
        </li>
    ";
}
for($i=1;$i<=$total;$i++) {
    if($i!=$page) {
        echo "<li class='page-item'>
                <a class='page-link' href='?page=".$i."".(isset($_GET['sort'])?"&sort=".$_GET['sort']."":"")."'>
                    $i
                </a>
            </li>";
    } else {
        echo "<li class='page-item'>
                <a class='page-link active'>
                    $i
                </a>
            </li>";
    }
}


if($page==$total) {
    echo "</ul>
        </div>";
} else {
    echo "  <li class='page-item'>
            <a class='page-link' href='?page=".($page+1)."'>
                <i class='fa-solid fa-chevron-right'></i>
            </a>
        </li>
    </ul>
</div>";
}
?>