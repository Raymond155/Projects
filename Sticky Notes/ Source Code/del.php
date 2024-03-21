<?php


require_once('./connections.php');
$db = new modify();
if(isset($_GET['D_ID']))
{
    global $db;
    $ID = $_GET['D_ID'];
    if($db->Delete_Record($ID))
    {
        $db->set_message('<div class="alert alert-danger"> Your Record has been deleted : )</div>');
        header("location:main.php");
    }
    else 
    {
        $db->set_message('<div class="alert alert-danger"> Somtehing wrong to delete the record : )</div>');
    }

}   






?>

