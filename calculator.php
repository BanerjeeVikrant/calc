<!DOCTYPE html>

<html>

<head>
    <style>
	body > div {
	    width: 404px;
	    border: 1px solid black;
	    padding: 8px;
	}
	
	.header {
	    margin-bottom: 5px;
	}
	
	.header input {
	    width: 400px;
	    height: 40px;
	    border: 1px solid black;
	    text-align: right;
	}
	
	.numberFields {
	    margin: 0;
	    width: 360px;
	    font-size:0;
	    overflow: auto;
	    float: left;
	}
	
	.numberFields input {
	    background-color: green;
	    border: 1px solid black;
	    width: 120px;
	    height: 40px;
	}

	
	.operations {
	    margin-left: 4px;
	    width: 40px;
	    font-size: 0;
	    display: inline-block;
	}
	
	.operations input {
	    background-color: purple;
	    border: 1px solid black;
	    width: 40px;
	    height: 40px;
	}
	
	.sum {
	    margin-top: 5px;
	}
	
	.sum input {
	    background-color: purple;
	    border: 1px solid black;
	    width: 404px;
	    height: 40px;
	}
	.myButton {
		-moz-box-shadow: 2px 5px 10px 0px #1564ad;
		//-webkit-box-shadow: 2px 5px 10px 0px #1564ad;
		box-shadow: 2px 5px 10px 0px #1564ad;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
		background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
		background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
		background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
		background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
		background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
		background-color:#79bbff;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		border:1px solid #337bc4;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:17px;
		font-weight:bold;
		padding:5px 53px;
		text-decoration:none;
		//text-shadow:0px 1px 0px #528ecc;
	}
	.myButton:hover {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
		background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
		background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
		background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
		background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
		background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
		background-color:#378de5;
	}
	.myButton:active {
		position:relative;
		top:1px;
	}
	

    </style>
</head>

<body>
    <div>
        <div class="header">
            <input name="box" value="" disabled>
        </div>
        <div class="numberFields">
            <a href="#" class="myButton">1</a>
            <a href="#" class="myButton">2</a>
            <a href="#" class="myButton">3</a>
            <a href="#" class="myButton">4</a>
            <a href="#" class="myButton">5</a>
            <a href="#" class="myButton">6</a>
            <a href="#" class="myButton">7</a>
            <a href="#" class="myButton">8</a>
            <a href="#" class="myButton">9</a>
            <a href="#" class="myButton">(</a>
            <a href="#" class="myButton">0</a>
            <a href="#" class="myButton">)</a>
            
        </div>
        <div class="operations">
            <input type="button" name="+" value="+" />
            <input type="button" name="-" value="-" />
            <input type="button" name="*" value="*" />
            <input type="button" name="/" value="/" />
        </div>
        <div class="sum">
            <input type="button" name="=" value="=" />
        </div>
    </div>
</body>

</html>