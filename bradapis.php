<?php
    function checkTWId($id){
        // 1. 長度為10
        // 2. A-Z *1
        // 3. 0-9 *9
        // 4. 第二碼 1 / 2
        // 5. 檢查碼驗證
        
        $result = false;
        
        if(preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
            $result = true;
        }

            
            
        
        return $result;
    }

?>