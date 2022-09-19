<?php
    require_once "sanpham.php";
    class listsanpham{
        private $listsanpham = array();
        public function addSp($sp){
            array_push($this->listsanpham,$listsanpham);
        }
        public function getListsanpham(){
            return $this->listsanpham;
        }
    }

?>