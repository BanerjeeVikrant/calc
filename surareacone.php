<!DOCTYPE html>

<html>
  <head>
  
  </head>

  <body>
     <h1>Welcome to Calculating Area of a Circle</h1>
     <h2>To do that in the first box type the length and in the next box type the width</h2>
     
     
     <p>Radius: <input type = "text" id ="radius"></p>
     <p>OR Diameter: <input type = "text" id ="diameter"></p>
     
     <p>And Height: <input type = "text" id ="height"></p>
     
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
        var height = document.getElementById("height").value;
        
        if(radius != 0){
        	var sh = Math.pow(height, 2);
        	var sr = Math.pow(radius, 2);
        	var add = sh + sr;
        	var sqroot = Math.pow(add, 0.5);
        	
        	answer = Math.PI * radius * (radius + sqroot);
        	
        }else if (diameter != 0){
        	answer = Math.PI * diatorad * (diatorad + Math.pow(((height * height) + (diatorad * diatorad )),0.5);
        }
        document.getElementById("result").innerHTML = "The answer to your question is " + answer;
       }
    </script>
  </body>
</html>