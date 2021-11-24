<?php
if (!empty($_POST['in_sum']) && !empty($_POST['month']) && !empty($_POST['percent'])) {
   $in_sum=$_POST['in_sum'];
   $percent=$_POST['percent'];
   $month=$_POST['month'];
   
   for ($i=1; $i <= $month; $i++) { 
      $year=$in_sum*$percent/100;
      $a_month=$year/12;      
      $in_sum=$in_sum+$a_month;
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="test3.1.css">
</head>
<body>
   <form action="#" method="post">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
            <div class="block1" >Калькулятор вкладов</div>
            </div>
         </div>
         <div class="row block2 ">
            <div class="col-md-12 text-center d-flex justify-content-center block2_1">
               <div class=" ">
               <span>Сумма</span>
               <input type="number" name="in_sum" value="100000" >
               </div>
               <div class=" " >
                  <span>Валюта </span>
                  <select name="" id="">
                     <option value="">Рубли</option>
                     <option value="">Доллары</option>
                     <option value="">Евро</option>
                  </select>
               </div>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center   block2_1">
               <div class=" ">
               <span>Ставка</span>
               </div>
               <div class=" " >
               <input type="number" name="percent" value="8">
               </div>
               <div class=" " >
               %
               </div>
               <div class=" ">
                <span>срок </span>
                <select name="month" id="">
                  <option>3</option>
                  <option>6</option>
                  <option>12</option>
                </select>
               </div>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center block2_1">
                  <input type="submit" value="Россчитать" class='butt1'>
            </div>
            <div class="col-md-12 text-center d-flex justify-content-center   block2_1">
               <div class=" ">
                 <span>Сумма на конец срока:</span>
               </div>
               <input type="number" value="<?=$in_sum?>">
            </div>
         </div>  
      </div>
   </form>
</body>
</html>