<!DOCTYPE html>

<html>
  <head>
  
  </head>

  <body>
     <h1>Welcome to Calculating Area of a Circle</h1>
     <h2>To do that in the first box type the length and in the next box type the width</h2>
     
     
     <p>Radius: <input type = "text" id ="radius"></p>
     <p>OR Diameter: <input type = "text" id ="diameter"></p>
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
        var radius = document.getElementById("radius").value;
        var diameter = document.getElementById("diameter").value;
        var diatorad = diameter/2;
        if(radius != 0){
        	answer = Math.PI * Math.pow(radius, 2);
        }else if (diameter != 0){
        	answer = Math.PI * Math.pow(diatorad, 2);
        }
        document.getElementById("result").innerHTML = "The answer to your question is " + answer;
       }
    </script>
  </body>
</html>