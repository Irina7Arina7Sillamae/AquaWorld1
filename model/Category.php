<?php
class Category {

    public static function getAllCategory() {
        $query = "SELECT * FROM category";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCategoryByID($id) {
        $query = "SELECT * FROM category where products_id=".(string)$id." ORDER BY id DESC";
        $db = new database();
        $k = $db->getOne($query);
        return $k;
    }
}