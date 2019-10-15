


<!DOCTYPE html>
<html>
    <head>
    <style>
    html {
    background-image: url("https://images.pexels.com/photos/595804/pexels-photo-595804.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-color: #000;
    height: 100%;
    
}


body {
    font-family: 'Josefin Slab', serif;
    font-weight: 900;
}

.output {
    font-family: 'Grenze', serif;
    font-size: 2em;
}

#form-container {
    position: absolute;
    margin: auto;
    padding: 1em;
    width: 25em;
    height: 25em;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 0.5em solid white;
    border-radius: 1em;
    box-shadow: 2em 2em 2em #000;
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
    font-family: 'Josefin Slab', serif;
    font-size: 1em; 
}

a {
    text-decoration: none;
    color: #FFF;
}




    </style>
        
        <title>Homework 7 - Function Machine</title>
        <meta charset="utf-8">
      
        <link href="https://fonts.googleapis.com/css?family=Grenze|Josefin+Slab&display=swap" rel="stylesheet"> 
        
    </head>    
    
    <body>
        
        <div id="form-container">
        
        <form action="functions.php" method="POST">
            <h1>Your Store Operator</h1>
            
            <label for="firstNum">Enter Value of first Item: 
                <input type="number" id="firstNum" name="firstNum" required>
            </label>
            
            <br><br>
            
            <label for="secondNum">Enter Value of first Item: 
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
            

            <input class="btn" type="submit" value="Calculate Now!">
            
            <br>
            
        
        
                
        <a class="btn" href="functions.php">Try Again!</a>
        
        </form>
        
        </div>
        
    </body>
    
</html>
