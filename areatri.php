<!DOCTYPE html>

<html>
  <head>
  
  </head>

  <body>
     <h1>Welcome to Calculating Area of Triangle</h1>
     <h2>To do that in the first box type the length and in the next box type the width</h2>
     
     
     <p>Base: <input type = "text" id ="base"></p>
     <p>Length: <input type = "text" id ="length"></p>
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
        var base = document.getElementById("base").value;
        var length = document.getElementById("length").value;
        
        var answer = (base * length)/2;
        document.getElementById("result").innerHTML = "The answer to your question is " + answer + " sq meter.";
       }
    </script>
  </body>
</html>