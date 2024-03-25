<?php
require_once('Database.php');
$db = new Database();

$id = $_GET['id'];

if($db->delete($id) > 0){
    echo "<script>
            document.location.href = 'index.php'
          </script>";
}else{
    echo "<script>
    document.location.href = 'index.php'
    </script>";
}