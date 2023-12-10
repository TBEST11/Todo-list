<?php
function deleteTaskById(){

    global $conn;
     
if (isset($_GET['id'])){
    $id= $_GET['id'];

    echo $id;
    return;
    $delete = mysqli_query($conn,"DELETE FROM 'todo' WHERE 'id'='$id'");
}

 $result = "SELECT * FROM todo";
 $query = mysqli_query($conn,$result);
 
    
}    
?>