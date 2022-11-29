<?php $array=[["name"=>"HTML","done"=>true],["name"=>"CSS","done"=>false],["name"=>"JAVASCRIPT","done"=>true]];
$result="HTML";
$prova=[];
foreach($array as $todo){
    if($todo['name']!=="HTML"){
        $prova[]=$todo;
    }
}
var_dump($prova);

?>