<?php
header('Content-Type: text/html; charset=utf-8');



function creationOfArr($yourFile){
    $fileArr = file($yourFile.".txt");
    $str = [];
    $arrHelp =[];


    for ($i = 0;$i < count($fileArr); $i++){
        $str[$i] = explode("|",$fileArr[$i]);
        for($j = 0, $a = 0;$j < count($str[$i]);$j++){
            $arrHelp[$i] = array("title" => $str[$i][$a],"author" => $str[$i][$a + 1],"printed" => $str[$i][$a + 2], "status" => $str[$i][$a + 3]);
        }

    }

    return $arrHelp;


}
//var_dump(creationOfArr("books"));
function takeFromArr($arr,$status){
    $arrHelp = [];

//
    for($i = 0;$i < count($arr);$i++){
        foreach ($arr[$i] as $key=>$value){
            if($value == 1){
                $arr[$i]["status"] = "Опубликовано";
                foreach ($arr[$i] as $value2){ //Бежим опять по значениям ассоциативного массива, но только со статусом 'Опубликованно'
                    $arrHelp[$i] = $arr[$i]["title"];

                }
            }

        }
    }


    return $arrHelp;

}
var_dump(takeFromArr(creationOfArr("books"), 0));


