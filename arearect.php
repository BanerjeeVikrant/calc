<!DOCTYPE html>

<html>
  <head>
  
  </head>

  <body>
     <h1>Welcome to Calculating Area of a Rectangle(or Square)</h1>
     <h2>To do that in the first box type the length and in the next box type the width</h2>
     
     
     <p>Height: <input type = "text" id ="height"></p>
     <p>Width: <input type = "text" id ="width"></p>
     <input onClick="start()" type = "button" value="Submit"> 
     <br>
     <br>
     
     <h2 id = "result"></h2>
     <input type = "button" value= "Refresh! Click Me!" id = "restart">
    
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>
	$(document).ready(function(){
	    $("#restart").click(function(){
	    	$("#height").empty();
	    	$("#width").empty();
	    	$("#result").empty();
	    });
	});
     </script>
    <script>
       function start(){
        var height = document.getElementById("height").value;
        var width = document.getElementById("width").value;
        
        var answer = height * width;
        document.getElementById("result").innerHTML = "The answer to your question is " + answer;
       }
    </script>
  </body>
</html>