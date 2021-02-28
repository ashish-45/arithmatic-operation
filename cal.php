<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
<div class="container p-5 mt-2" style="border:1px solid black">

<form method="POST">
<h1 class="text-center mb-5">Calculator</h1>
  <div class="form-group">
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Value 1">
  </div>
  <div class="form-group">
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1" placeholder="Enter Value 2">
  </div>
  <div class="select-style text-center ">
    <select class="form-control" name="operation">
        <option value="add">ADD</option>
        <option value="sub">SUB</option>
        <option value="mult">MULT</option>
        <option value="div">DIV</option>
    </select>
  </div><br>
  <div>
  <input type="submit" value="submit" name="submit" class="btn btn-primary mt-2 text-bold">
  </div>
</form>
<div class="app-form-group showdata">
<p>
<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    // echo "{$num1} {$num2}";

    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $sum = $num2 + $num2;
                echo "The addition of two no is {$sum}";
            break;
        case 'sub':
            $sub = $num2 - $num2;
               echo "The substration of two no is {$sub}";
            break; 
        case 'mult':

            $mul = $num2 * $num2;
                echo "The multipication of two no is {$mul}";
            break;  
        case 'div':

            $div = $num2 / $num2;
                echo "The division of two no is {$div}";
            break; 
        
        default:
           echo "sorry its not exist";
        }
}
   
?>
</p>
</div>
</div>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>