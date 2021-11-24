<?php
$hour=0;
$minutes=0;
 if(!empty($_POST["hour"]) && !empty($_POST["minutes"])){
   $minutes=$_POST["minutes"]*6;
   $hour=$_POST["hour"]*30+$minutes*0.083;
 }
 $ms=$minutes."deg";
 $hr=$hour."deg";
 $gradus=$hour-$minutes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      .clock{
         background-image: url('photos/Стандартный.png');
         width: 8.5vmax;
         height: 8.5vmax;
         background-size: cover;
         background-position: center;
         margin: 0.1vmax auto;
         /* display:flex; */
         border: 1px solid #03060d;
         position: relative;
         
      }
      
      .arrow_big{
      width: 4px;
      height: 4vmax;
      position:absolute;
      background: red;
      transform-origin: 1% 100%;
      transform: rotate(<?=$ms?>);
      top: 2%;
      left: 50%;
      }
      .arrow_small{
      width: 4px;
      height: 2.5vmax;
      position:absolute;
      /* background:-webkit-linear-gradient(#4e13f4 29%, #FFFFFF 50% ); */
      background: blue;
      transform-origin: 1% 100%;
      transform: rotate(<?=$hr?>);
      top: 19%;
      left: 50%;
      }

      .h_m{
         text-align:center;
      }

   </style>
</head>
<body>
   <div class="clock">
      <div id="arrow_b" class="arrow_big"></div>
      <div id="arrow_s" class="arrow_small"></div>
   </div>
   <div class="h_m">
      <form action="#" method="post">
        <input  type="number"  id="hour" name="hour" min="1" max="24" value="3">
        <input  type="number" id="minutes"  name="minutes" min="0" max="60" value="15">
        <input type="submit" name="" id="">
      </form>
   </div>
   <div class="h_m">
      <form action="#" method="post">
         Между стрелками <input type="number" value="<?=$gradus?>"> градусов 
      </form>
   </div>
   
        
        
      </div>
</body>
</html>