<?php
include_once "club.php";
include_once "config.php";

function print_table($result){
    $fields = $result->fetch_fields();
    echo "<table class='table table-hover' style='width: 95%; margin: auto; border: 0px solid red; text-align: center;    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
'>";
    echo "<thead style='background-color: #ea1d5d;'>";
    echo "<td>#</td>";
    for($i=0;$i<sizeof($fields);$i++){
        echo "<td>{$fields[$i]->name}</td>";
    }
    echo "</thead>";
    $i=1;
    while($row = $result->fetch_array(2)){ // fetch_object() , fetch_assoc()
        echo "<tr>";
        echo "<td>$i</td>";
        foreach($row as $val){
            echo "<td>$val</td>";
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";

}
