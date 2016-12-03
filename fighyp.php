<!DOCTYPE html>

<html>
<head>

  <style>

   </style>
</head>

<body>
   <h1>Welcome to find the Hypotenuse of a Right Angle Triangle</h1>
   <h2>To find the hypotenuse give the 2 sides</h2>
   
   <p>Leg1: <input type = "text" id = "leg1"></p>
   <p>Leg2: <input type = "text" id = "leg2"></p>
   
   <input type = "button" onClick = "PythoFunc()" value = "Calculate">
   
   <h1 id ="result"></h1>
</body>

<script>
    function PythoFunc(){
            var leg1 = document.getElementById("leg1").value;
            var leg2 = document.getElementById("leg2").value;
            
            var square_val1 = Math.pow(leg1, 2);
            var square_val2 = Math.pow(leg2, 2);
            var add_squares = square_val1 + square_val2;
            
            var answer = Math.pow(add_squares, 0.5)
            
            document.getElementById("result").innerHTML = "Your Answer is " + answer;
            
    }
</script>


</html>