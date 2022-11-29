<?php

$dati=file_get_contents('todo.json');

$todos=json_decode($dati,true);



//$todos=[["name"=>"HTML","done"=>true],["name"=>"CSS","done"=>false],["name"=>"JAVASCRIPT","done"=>true]];
//$dati=file_get_contents("todo.json");
//$todos=json_decode($dati,true);

if(isset($_POST['todo'])){  
    $new_Todo["text"]=$_POST['todo'];
    $new_Todo["done"]=false;
   
    $todos[]=$new_Todo;
    file_put_contents("todo.json", json_encode($todos));
}

if(isset($_POST['item'])){
    $position=$_POST['item'];
    $todos[$position]['done']=!$todos[$position]['done'];
    file_put_contents("todo.json", json_encode($todos));
}


if(isset($_POST['delete'])){
    $pos=$_POST['delete'];
    $result=[];
foreach($todos as $key=>$value){
    if($value['text']!==$pos){
        $result[]=$value;
    }
}
    $todos=$result;
    file_put_contents("todo.json", json_encode($todos));
}
$todo_json=json_encode($todos);
header('Content-Type: application/json');
echo $todo_json;
?>