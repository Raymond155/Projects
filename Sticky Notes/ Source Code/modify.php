<?php

require_once('./connections.php');
$db = new connection1();
$db = new modify();



class modify extends connection1
{


    public function text()
    {
        global $db;
        if (isset($_POST['add'])) {


            $g = $db->check($_POST['g']);
            $h = $db->check($_POST['h']);

            if ($this->insert_record($g, $h)) {
                echo "notes inserted in database";
                header("location:main.php");

            } else {
                echo 'Failed';
            }
        }




    }

    public function view_record()
    {
        global $db;
        $query = "select * from text";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }

    public function get_record($id)
    {
        global $db;
        $sql = "select * from text where id='$id'";
        $data = mysqli_query($db->connection, $sql);
        return $data;
    }



    function insert_record($a, $b)
    {
        global $db;
        $query = "insert into `text` (g, h)  values ('$a','$b')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

  




    public function update()
    {
        global $db;
        if (isset($_POST['btn_update'])) {
            $id = $_POST['id'];
            $g = $_POST['g'];
            $h = $_POST['h'];





            if ($this->update_record($id, $g, $h)) {
                $this->set_message('<div class="alert alert-success"> Your Record has been Updated : )</div>');
                header("location:main.php");
            } else {
                $this->set_message('<div class="alert alert-success"> Something wrong : ) </div>');
            }


        }
    }






    public function update_record($id, $g, $h)
    {
        global $db;
        $sql = "UPDATE text SET g='$g', h='$h' WHERE id='$id'";
        $result = mysqli_query($db->connection, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }





    public function set_message($msg)
    {
        if (!empty($msg)) {
            $_SESSION['Message'] = $msg;
        } else {
            $msg = "";
        }
    }


    public function display_message()
    {
        if (isset($_SESSION['Message'])) {
            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
        }
    }

    public function Delete_Record($id)
    {
        global $db;
        $query = "DELETE from `text` WHERE id='$id'";
        $result = mysqli_query($db->connection, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }


    }


}

?>