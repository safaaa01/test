<!DOCTYPE html>
<html>
    <head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Indie+Flower|Spirax');
h1{font-family: 'Spirax', cursive;
text-align: center;
font-size: 4em;}
    html {
    background-image: url("https://cdn4.vectorstock.com/i/1000x1000/28/38/groceries-cashier-at-work-vector-17862838.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-color: #000;
    height: 100%;
    
}


body {
  margin:3% 5%;
  text-align:center;
  font-family: Verdana;
  background-color: pink;
   
}

.output {
    font-family: 'Spirax', cursive;
    font-size: 2em;
}

#form-container {
    position: absolute;
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
    
}

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
        
        <title>function</title>
        <meta charset="utf-8">
      
       
        
    </head>    
    
    <body>
        
        <div id="form-container">
        
        <form action="function.php" method="POST">
            <h1>Your Store Calculator</h1>
            
            <label for="firstNum">Enter price of first Item: 
                <input type="number" id="firstNum" name="firstNum" required>
            </label>
            
            <br><br>
            
            <label for="secondNum">Enter price of second Item: 
                <input type="number" id="secondNum" name="secondNum" required>
            </label>
            
            <br><br>
            
            <label>What do you want to do?: 
                <select name="choice" required>
                    <option value="Multiplication">*</option>
                    <option value="Addition">+</option>
                    <option value="Subtraction">-</option>
                    <option value="Division">/</option>
                </select>
            </label>
            
            <br>
            

            <input class="btn" type="submit" value="Process!">
            
            <br>
            
        
        
                
        <a class="btn" href="function.php">Another items?</a>
        
        </form>
        
        </div>
        
    </body>
    
</html>
