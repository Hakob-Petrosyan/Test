<?php
$finishResult="";
if (!empty($_POST["numb1"]) && !empty($_POST["numb2"]) && !empty($_POST["oper1"])) {
  $number1=$_POST["numb1"];
  $operator1=$_POST["oper1"];
  $number2=$_POST["numb2"];
   function f1($t1, $t2, $t3)
    {
      switch ($t2) {
        case '+':
          $result=$t1+$t3;
          break;
        case '-':
          $result=$t1-$t3;
          break;
        case '*':
          $result=$t1*$t3;
          break;
        case '/':
          $result=$t1/$t3;
          break;
        default:
        $result="ups";
      }
      return $result;
    }
    $finishResult=f1($number1, $operator1, $number2 );
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body{
        background: #B9E1F1;
        margin: 0;
        padding: 0;
      }

      input{
        height: 60px;
        width: 300px;
        display: block;
        margin: 8px 0;
        border: none;
        font-size: 40px;
      }

      input[type='text']:focus{
        background: #D1F2FF;
      }

      select{
         width: 200px;
         height: 50px;
         font-size: 26px;
      }

      .input_sub{
        border: none;
        background: #BCF0F4;
        font-size: 20px;
        width:200px;
        float:left;
        margin:10px 5px;
      }

      .div1{
        margin: 300px 0 0 0;
        padding: 0 42.1%;
      }

      .div2{
        padding:0 0 0 17%;
      }
      .div2 > input {
        cursor: pointer;
      }

      .div3{
        padding: 0 42.1%;
        margin-top: 15px;
      }

      .div3 input{
        height: 45px;
        border-radius: 8px;
      }

    </style>
</head>
<body>

  <div class="div1">
    <form action="#" method="post">
      <input id="in1" type="number" name="numb1" style="border-top-left-radius:10px; border-top-right-radius:10px;" maxlength="4">
        <div class="div2">
          <select type="submit" name="oper1" id="" >
            <option> </option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
          </select>
        </div>
      <input id="in2" type="number" name="numb2" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px;" maxlength="4">
        
      <div class="div2"><input type="submit" value="резултат" class="input_sub"></div>
    </form>
  </div>
  <div class="div3">
  <input id="ardyunq" type="text" name="" value="<?=$finishResult ?>">
  </div>
 
</body>
</html>