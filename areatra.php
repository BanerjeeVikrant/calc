<!DOCTYPE html>

<html>
  <head>
  
  </head>

  <body>
     <h1>Welcome to Calculating Area of a Trapazoid</h1>
     <h2>To do that in the first box type the length and in the next box type the width</h2>
     
     
     <p>Base 1: <input type = "text" id ="base1"></p>
     <p>Base 2: <input type = "text" id ="base2"></p>
     <p>Height: <input type = "text" id ="height"></p>
     <input onclick="start()" type = "button" value="Submit"> 
     <br>
     <br>
     
     <h2 id = "result"></h2>
     <input type = "button" value= "Refresh! Click Me!" id = "restart">
    
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>
	$(document).ready(function(){
	    $("#restart").click(function(){
	    	$("#result").empty();
	    });
	});
     </script>
    <script>
       var answer;
       function start(){
        var base1 = document.getElementById("base1").value;
        var base2 = document.getElementById("base2").value;
        var height = document.getElementById("height").value;
        
        var answer = ((Number(base1) + Number(base2)) * height / 2 );
        document.getElementById("result").innerHTML = "The answer to your question is " +answer + " sq meter.";
       }
    </script>
  </body>
</html>