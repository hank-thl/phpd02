<?php

    class MyQuery{

        private $mysqli;
        // 從外部傳入mysqli物件
        function __construct($mysqli){
            $this->mysqli = $mysqli;
        }
        //  傳入id以及要的資料
        function getProductData($id, $field){
            $sql = "SELECT * FROM food WHERE id = {$id}";
            $result = $this->mysqli->query($sql);

            if($result->num_rows == 0){   // 沒有結果
                return false;
            }else{
                $data = $result->fetch_assoc();  // 傳回物件及陣列
            return $data[$field];
            }
            
        }
        // getAllData('city = "台中市"') => $data[]
        function getAllAddress($where = ''){
            $sql = "SELECT `addr` FROM food";
            if(strlen($where) > 0){
                $sql .= " WHERE {$where}";
            }
            $sql .= " ORDER BY 'id'";
            $result = $this->mysqli->query($sql);

            $ret = [];

            while($row = $result->fetch_object()){
                $ret[] = $row;  // 一筆一筆拿出來放進陣列
            }

            return $ret;
        }
    }
?>