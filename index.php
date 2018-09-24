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
    foreach ($arr as $value){
        foreach ($value as $key => $value2){
            if($value2 == $status){
                var_dump($value);
            }
        }
    }


    return $arrHelp;

}
var_dump(takeFromArr(creationOfArr("books"), 1));


