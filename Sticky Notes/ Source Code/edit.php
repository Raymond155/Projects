<?php

require_once('./connections.php');
$db = new modify();
$db->update();
$id = $_GET['U_ID'];
$result = $db->get_record($id);
$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marck+Script&family=Noto+Sans+JP:wght@300&family=Reem+Kufi:wght@700&display=swap');
    </style>

</head>

<body>
    <style>
        body{
            background-image: linear-gradient(to right, #00b4db, #0083b0);
        }
       .image{
        position: absolute;
        width: 936px;
        height: 614px;
        margin-left: 21%;
       }
        .form {
            margin-top: 5%;
            border: none;
            border-radius: 10px;
            background-color:#f0f8ff ;
            box-shadow: 0 7px 10px 0 rgba(0, 0, 0, 5);
            position: absolute;


            border: none;
            padding: 30px;
            width: 30%;
            height: 400px;
            margin-left: 43%;
            

        }

        .t1 {

            width: 70%;
            height: 35px;
            margin-left: 13%;
            margin-top: 40px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: none;
            background: #f0f8ff;
          
            box-shadow: inset -5px -5px 9px rgba(255,255,255,0.99), 
            inset 5px 5px 9px rgba(70, 70, 70, 0.3);
            box-shadow: 1px;
        }

        .t2 {
            resize:none ;
            background: #f0f8ff;
            margin-left: 13%;
            width: 70%;
            height: 200px;
            border-radius: 5px;
            border: none;
            box-shadow: inset -5px -5px 9px rgba(255,255,255,0.99), inset 5px 5px 9px rgba(94,104,121,0.3);

        }

        .btn9 {
            width: 18%;
            height: 10%;

            margin-left: 20px;

        }

        .btn8 {
            margin-top: 6%;
            width: 9%;
            height: 10%;
            border: 0;
            border-radius: 10px;
            margin-left: 13%;
            box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 1);
            background-color: #f0f8ff;
            border: 1px;
            
        }

        .btn8 a {
            text-decoration: none;
            color: black;

        }


       




        /* CSS */
        .btn9 {
            cursor: pointer;
            border: none;
            background-color:#f0f8ff ;
            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 1);
}
        .title{
            position: absolute;
            font-size: 60px;
            margin-left: 20%;
            transform: rotate(-90deg);
            margin-top: 16%;
            font-family: Marck Script;
           
            
        }

        .title2{
            position: absolute;
            font-size: 20px;
            margin-left: 27%;
            transform: rotate(-90deg);
            margin-top: 15%;
            
        }

       


















        
    </style>


<img class="image" src="t2.avif"></image>
<p class="title" >Sticky</p>
<p class="title2" >Notes</p>


    <div class="container4">
        <?php $db->text(); ?>
        <form class="form" method="POST">
         
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="container4">
                <input type="text" name="h" placeholder="title" class="t1 form-control mb-2"
                    value="<?php echo $data['h']; ?>">
            </div>

            <div class="container5">
                <textarea type="text" name="g" placeholder="" class="t2 form-control mb-2"
                    value="<?php echo $data['g']; ?>"><?php echo $data['g']; ?></textarea>
            </div>



            <button class="btn8"><a href="main.php">X</a></button>
            <button class="btn9 btn btn-succes" name="btn_update">Update</button>

        </form>
    </div>
   
</body>

</html>