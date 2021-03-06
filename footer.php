<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);
body{
  font-family: 'Source Sans Pro', sans-serif;
  font-weight:300;
  background-color:lightblue;
  color:#FFF;
}
.footer #button{
	width:35px;
	height:35px;
	border: brown 12px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
.footer #button:hover{
	width:35px;
	height:35px;
	border: #3A3A3A 12px solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	position:relative;
}
.footer {
	bottom:0;
	left:0;
	position:fixed;
    width: 100%;
    height: 4em;
    overflow:hidden;
    margin:0 auto;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	z-index:999;
}
.footer:hover {
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	height: 10em;
}
.footer #container{
    
	margin-top:5px;
	width:100%;
    height:100%;
    position:relative;
    top:0;
    left:0;
	background: black;
}
.footer #cont{
    
  position:relative;
  top:-45px;
  right:190px;
	width:150px;
	height:auto;
	margin:0 auto;
}
.footer_center{
    
	width:500px;
	float:left;
  text-align:center;
}
.footer h3{
    
	font-family: 'Helvetica';
	font-size: 25px;
	font-weight: 100;
	margin-top:70px;
  margin-left:40px;
  
}

</style>    
<body>
<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
     <h3> Copyright &copy; 2018
     <?php include 'contador.php';?>
     </h3>
</div>
</div>
</div>
</div>
  

</body>
</html>