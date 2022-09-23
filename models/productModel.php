<?php
require_once("models/sanpham.php");
require_once("models/danhmuc.php");
require_once("../modules/db_module.php")

class Model{
    // SP
    public function getsplist() {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham");
        $data = array();
        while($rows = mysqli_fetch_object($result)) {
            $sp = new sanpham($rows->id_sp,$rows->ten_sp,$rows->gia_sp,$rows->img_sp,$rows->dm_id);
            array_push($data,$sp);
        }
        giaiPhongBoNho($link,$result);
        return $data;
    }
    public function getsp($id) {
        $allsp = $this->getsplist();
        foreach($allsp as $sp){
            if($sp->getId()===$id){
                return $sp;
            }
        return null;
        }
    }
}
?>