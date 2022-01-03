<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
             <style>
            *, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Nunito', sans-serif;
    color: #384047;
  }
  
  form {
    max-width: 300px;
    margin: 10px auto;
    padding: 10px 20px;
    background: #f4f7f8;
    border-radius: 8px;
    margin-top: 100px;
    padding-top: 40px;
  }
  
  h1 {
    margin: 0 0 30px 0;
    text-align: center;
  }
  
  input[type="text"],
  input[type="password"],
  input[type="date"],
  input[type="datetime"],
  input[type="email"],
  input[type="number"],
  input[type="search"],
  input[type="tel"],
  input[type="time"],
  input[type="url"],
  textarea,
  select {
    background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 10px;
    width: 96%;
    background-color: #e8eeef;

    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
  }
  
  input[type="radio"],
  input[type="checkbox"] {
    margin: 0 4px 8px 0;
  }
  
  select {
    padding: 6px;
    height: 32px;
    border-radius: 2px;
  }
  
  button {
    padding: 16px 8px 14px 6px;
    color: #FFF;
    background-color: #5c5f5d;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    border-radius: 5px;
    width: 100%;
    border: 1px solid #5c5f5d;
    border-width: 1px 1px 3px;
    box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
    margin-bottom: 10px;
  }
  
  fieldset {
    margin-bottom: 30px;
    border: none;
  }
  
  legend {
    font-size: 1.4em;
    margin-bottom: 10px;
  }
  
  label {
    display: block;
    margin-bottom: 8px;
  }
  
  label.light {
    font-weight: 300;
    display: inline;
  }
  
  .number {
    background-color: #5fcf80;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 100%;
  }
  
  @media screen and (min-width: 480px) {
  
    form {
      max-width: 480px;
    }
  
  }
  
        </style>
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12">
   <form>
   <h1> PHP SIMPLE CALCULATOR </h1>
   <label for="email">Enter First Number</label>
    <input type="text" id="num1 "name="num1" placeholder="Enter Any Number">
    <label for="email">Enter Second Number</label>
    <input type="text" id="num2" name="num2" placeholder="Enter Any Number">
    <select name="operator">
        <option>None</option>
        <option>ADD</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>    
    <br>
    <button type="submit" name="submit"value="submit" > Calculator</button>
    <p> Ths Answer is : </p>
</form>


<?php
     if (isset($_GET['submit']))
     {
         $result1 = $_GET['num1'];
         $result2 = $_GET['num2'];

         $operator = $_GET['operator'];

         switch($operator)
         {
             case "None":
             echo " You need to select Method";
             break;

             case "ADD":
             echo $result1 + $result2;
             break;

             case "Subtract":
             echo $result1 - $result2;
             break;

             case "Multiply":
             echo $result1 *  $result2;
             break;

             case "Divide":
             echo $result1 / $result2;
             break;
         }

     }
?>
  </div>
</div>
</body>
</html>