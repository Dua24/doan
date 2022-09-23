<?php
if (is_array($listCategory) || is_object($listCategory))
{
    foreach($listCategory as $category) {
        echo "
            <li class='category-item'>
                <a href='./searchPage.php?dm=" . $category->getId() . "&dm_ten=". $category->getTen()."' class='category-item-link'>
                    ".$category->getTen()."
                </a>
            </li>
            ";
    }
}

?>
