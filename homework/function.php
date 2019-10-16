<!DOCTYPE html>
<?php
 function sum($a, $b) {
 return ($a + $b);
 }
 function difference($a, $b) {
 return ($a - $b);
 }
 function product($a, $b) {
  return ($a*$b);
 }
 function quotient($a, $b) {
  return ($a/=$b);
 }
 function error() {
  echo "You cannot divide by ZERO. Try again.";
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
 $operator = $_POST['value3'];
 
 
?>
<html>
    <head>
        
        <title>function</title>
        <meta charset="utf-8">
      
    <style>
@import url('https://fonts.googleapis.com/css?family=Indie+Flower|Spirax');

h1{font-family: 'Spirax', cursive;

text-align: center;
font-size: 4em;}
h2{color:purple;font-family: 'Indie Flower', cursive;}
body {
  margin:3% 5%;
  text-align:center;
  font-family: Verdana;
  background-image: url("data:image/jpeg;base64,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");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-color: purple;
    height: 90%;
   
}
  

.output {
    font-family: 'Spirax', cursive;
    font-size: 2em;
}

/*#form-container {
    position: center;
    margin: auto;
    padding: 1em;
    width: 40em;
    height: 25em;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 1em;
    text-align: center;
    background-color: #F8F8F8;
    opacity: 0.8;
    
}*/

.warning {
    color: red;
    
}

.btn {
    background-color: #000;
    border: 0.2em solid white;
    border-radius: 0.5em;
    padding: 0.3em;
    margin: 0.5em;
    color: #FFF;
    font-family: 'Spirax', cursive;
    font-size: 1em; 
}


    </style>
        
       
        
    </head>    
    
    <body>
        
       <div id="form-container">
        
        <form action="function.php" method="POST">
            <h1>Store Calculator</h1>
            
            <label for="firstNum">First item price: 
                <input type="number" name="value1" required>
            </label>
            
            <br><br>
            
            <label for="secondNum">Second item price: 
                <input type="number" name="value2" required>
            </label>
            
            <br><br>
            
            <label for="input3"> What do you want to do? : 
                <select name="value3" id="operator" required>
                    <option value="product"> * </option>
                    <option value="sum"> + </option>
                    <option value="difference"> - </option>
                    <option value="quotient"> / </option>
                </select>
            </label>
            
            <br><br>
            

            <input class="btn" type="submit" value="Calculate Now!">
            
            <br>
            
        
        
                
        <a class="btn" href="function.php"> Another items!</a>
        
        </form>
        
        </div>
        <br>
        <?php
if ($operator == "sum") {
        echo $value1 . " + " . $value2 . " = ";
        echo sum($value1, $value2);
} elseif ($operator == "difference") {
        echo $value1 . " - " . $value2 . " = ";
        echo difference($value1, $value2);
} elseif ($operator == "product") {
        echo $value1 . " x " . $value2 . " = ";
        echo product($value1, $value2);
} elseif ($operator == "quotient") {
        echo $value1 . " / " . $value2 . " = ";
        echo quotient($value1, $value2);
} else {
    echo "";
}
?> 
        
    </body>
    
</html>
