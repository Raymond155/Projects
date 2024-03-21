<?php
require_once('./connections.php');
require_once('./modify.php');
include 'connection.php';


$db = new modify();
$result = $db->view_record();

$colors = array('#f1f58f', '#ffa930', '	#e68bbe', '#a9edf1', '#74ed4b');
$index = 0;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>















    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marck+Script&family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap');
    </style>




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Crimson+Text:wght@700&family=Fjalla+One&family=Pacifico&family=Teko:wght@300&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Crimson+Text:wght@700&family=Fjalla+One&family=Pacifico&family=Teko:wght@300&display=swap');
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap');
    </style>

</head>

<body>
    <div class="modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add note</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <?php $db->text(); ?>

                <form method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="h" class="form-label">Title</label>
                            <input name="h" type="title" class="form-control" id="h" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="g" class="form-label">Note something</label>
                            <textarea name="g" class="form-control" id="g" rows="3" required></textarea>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn8" data-bs-dismiss="modal">🡨</button>
                        <button type="add" class="btn9 btn btn-success" value="Login" name="add">Add</button>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
  


















    <img class="logo" src="ggg.png"></img>

    <label class="title">Sticky Notes</label>

    <button class="logout btn btn-warning">
        <a href="ui.html">logout</a>
    </button>

    <div class="header">
        <form class="s" method="POST">
            <input name="search" type="text" placeholder="Search note">
            <button class="btn btn-warning" name="submit">search</button>
        </form>
    </div>

    <button type="button" class="in" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add note<br>+
    </button>





    <div class="container2">

        <div class="row">
            <div class="d-flex flex-wrap">
                <?php

                while ($data = mysqli_fetch_assoc($result)) {
                    $color = $colors[$index % count($colors)];
                    echo '<div id="card1" class="card1 card" style="background-color: ' . $color . '">
                    <img class="pin" src="pin.png"></img>  
                    <p class="time card-title">' . $data['time'] . '</p> 
                <div id="card1" class="card-header">
                
                <b class="card-title">' . $data['h'] . '</b>
                
                </div>
               
                <div id="cards" class="card-body1 card-body">
                <p class="card-title">' . $data['g'] . '</p>
                </div>
                
                <div class="card-footer">
                    <a href="edit.php?U_ID=' . $data["id"] . '">
                    <img class="edit_icon" src="edit.png">
                    </a>

                    <a href="del.php?D_ID=' . $data["id"] . '">
                    <img class="delete_icon" src="delete2.png">
                    </a>

                </div>
                </div>';
                    $index++;
                }
                ?>


            </div>
        </div>
    </div>

    <!-- <button type="button" class="btn3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              edit
                              </button> -->
    <!-- <a href="edit.php?U_ID=' . $data["id"] . '" class="btn1 btn btn-warning">edit</a>  -->









  


    <?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];

    $sql = "select * from `text` where h='$search'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            echo '<div class="card2 card">
            <p class="time2 card-title">' . $data['time'] . '</p>
                <div class="card-header">
                    <b class="card-title">' . $data['h'] . '</b>
                </div>

                <div id="cards" class="card-body">
                    <p class="card-title">' . $data['g'] . '</p>
                </div>
                <div class="card-footer">
                    <button class="back_button btn btn-primary">
                        <a href="main.php">back</a>
                    </button>
                        <a id="btn1" href="edit.php?U_ID=' . $data["id"] . '" class="btn1 btn btn-warning">edit</a>    
                        <a id="btn2" href="del.php?D_ID=' . $data["id"] . '" class="btn2 btn btn-danger">Delete</a>
                    
                </div>
            </div>';
        }
    } else {
        echo '<div class="card3 card">
        <a class="x" href="main.php">x</a>
              <div id="cards" class="card-body">
              
                <p class="card-title">No match result</p>
            </div>
            </div>';
    }
}
?>



    <style>
       
        .edit_icon{
            width: 20px;
            height: 20px;
            margin-left: 70%;
            margin-top: 3px;
            position: absolute;
        }
        .delete_icon{
            width: 20px;
            height: 20px;
            margin-left: 90%;
        }
        .delete_icon:hover{
            background-color: red;
        }
      
        div.container4 {
            margin-left: 10px;
            position: absolute;
            width: 23%;
            height: 45%;
            bottom: 10px;
            
        }

        .pin {
            position: absolute;
            width: 40px;
            height: 40px;
            margin-left: 88%;
            margin-top: 0px;
        }


        .view {
            background-color: transparent;
            border: none;
        }

        .logo {
            position: absolute;
            width: 40px;
            height: 40px;
            margin-left: 30px;
        }

        .title {
            position: absolute;
            margin-left: 100px;
            font-size: 40px;
            font-family: Marck Script;
            color: white;

        }

        .header {
            padding: 20px;
            background: #83590b6e;

        }

        .header2 {
            padding: 20px;
            background: #83590b6e;
        }

        .card1:hover {
            transform: translate3D(0, -1px, 0) scale(1.13);
            transition: all .4s ease;
            position: relative;
            z-index: 9999;
        }

        /* .title{
                position: absolute;
                margin-left: 45%;
                margin-top: 5%;
                font-size: 50px;

            } */
        .in {
            position: absolute;
            width: 250px;
            height: 250px;
            border: 1px dashed black;
            margin-left: 7%;
            margin-top: 30px;
            margin-bottom: 5%;
            border-radius: 5px;
            background-color: #f1f58f;
        }


       


       
        .form:target {
            display: block;
        }

        .plus_card {
            position: absolute;
            width: 250px;
            height: 250px;
            margin-top: 7%;
            margin-left: 5%;
            font-size: 50px;
            font-family: none;
            display: none;
        }

        .plus {
            margin-left: 40%;
            margin-top: 30%;
            cursor: pointer;
        }

        .x {
            position: absolute;
            margin-left: 92%;
            color: black;

        }

        .back_button a {
            color: white;
        }

        body {
            background-image: linear-gradient(to right, #FFD194, #D1913C);

        }

        .your {
            margin-left: 50px;
            margin-top: 0px;
        }

        .card3 {
            position: absolute;

            margin-left: 64%;
            width: 250px;
            height: 50px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
        }

        .card2 {
            margin-top: 1%;
         
         margin-left: 35%;
         width: 500px;
         height: 500px;
         position: absolute;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
        }


        hr {
            color: red;

            margin-top: 20%;

        }

        .s {

            margin-left: 65%;

        }

        .logout {
            position: absolute;
            width: 112px;
            height: 35px;
            margin-left: 85%;
            margin-top: 22px;




        }

        a {
            text-decoration: none;
            color:red;
        }
        .time{
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 15px;
        }

        .time2{
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 15px;
        }


        .card-header{
            position: absolute;
           padding: 10px;
           margin-top: 11px;
        }
        .card-header,
        .card-footer {
            border: none;
            background-color: transparent;
           
        }


        .card-footer {
            background: relative;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding-bottom: 3px;
        }

     

        .card-body1{
            max-height: 159px;
            overflow: auto;
            white-space: pre-wrap;
            padding-top: 0;
           
          
           
        }

 



        .button1 {
            position: absolute;
            margin-left: 50%;
            margin-top: 2%;
            background-color: green;
            padding-left: 20px;
            padding-right: 20px;
        }

        /* .btn1 {
            position: absolute;
            margin-top: 50%;
        }

        .btn2 {
            position: absolute;
            margin-top: 50%;
            margin-left: 25%;
        } */
        .btn1 {
            width: 50px;
            height: 30px;
            font-size: 15px;
        }

        .btn2 {
            width: 70px;
            height: 30px;
            font-size: 15px;
        }

        .btn3 {
            position: absolute;
            margin-top: 50%;
            margin-left: 60%;
        }

        .but a {
            text-decoration: none;
            color: white;
        }

        .but1 a {
            text-decoration: none;
            color: white;
        }



        .input {
            border: 2px solid #ced4da;
            padding: 1rem;

        }

        .form {
            border: 1px solid #ced4dd;
            padding: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
            background-color: white;


        }

        .container1 {}

        /* .container1 form {
                position: absolute;
                margin-left: 4%;
                margin-top: 2%;
                padding-bottom: 5%;
            } */

        .container2 {
            width: 70%;
            float: right;






        }

        .containter3 {}

        #u {
            position: absolute;
            margin-left: 43%;
            margin-top: 15%;
            background-color: #080808;



        }

        #u:target {
            display: block;


        }









        .vl {
            border-left: 1px solid black;
            height: 800px;
            position: absolute;
            left: 30%;
            margin-left: -3px;
            top: 0;
        }

        .card1 {

            width: 280px;
            height: 290px;
            margin-left: 35px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
            transition: all .5s ease;
            margin-top: 30px;
            border-radius: 0;
            
        }




        .btn5 {
            width: 100px;
            height: 100px;

        }

        body {
            background-color: #f0f8ff;
            font-family: Architects Daughter;
        }
    </style>













</body>

</html>


<!-- <a href="edit.php?U_ID=' . $data["g"] . '" class="btn1 btn btn-warning">edit</a> -->

<!-- <a href="#u" class=" btn1 btn btn-warning">edit</a> -->
<!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio"> -->