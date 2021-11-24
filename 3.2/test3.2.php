
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
  <link rel="stylesheet" href="test.3.2.css">
</head>
<body >
   <div id='block1'>
      <form action="#" method="post">
         <input name="day" type="number" min="1" max="31">
         <input name="month" type="number" min="1" max="12">
         <input type="submit" value="send" class="knopka">
      </form>

   </div>
   <div id="day">
      <div>
  
      <?php  
         
         if (!empty($_POST["day"]) && !empty($_POST["month"])) {
            
          function f3()
            {
               $months=array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря");
               $polo =$_POST["day"];
               $lolo =$_POST["month"]-1;
               $mxo = $polo."  ".$months[$lolo];
               echo $mxo;
         }
            f3();
           }  
     ?>
      </div>

   </div>
   
</body>
</html>