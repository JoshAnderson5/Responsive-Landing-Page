<html>
 <head>
  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>FeeX Project - Josh Anderson</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" type="text/css" href="css/style.css">
				
				<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,400,300,800' rel='stylesheet' type='text/css'>
 </head>

<body>
 <div class="container">
	<div id="lefthalf"></div>
	<div id="righthalf"></div>		

<div class="pull-right">

<input class="passive btn-sm" type="button" value="Log In">
<input class="aggressive btn-sm" type="button" value="Sign Up">

<ul id="nav">
	<div class="dropdown">
	<li><a href="#">About Feex</a></li>
	<li><a href="#">FAQ</a></li>
	<li><a href="#">Blog</a></li>
</div>
</ul>

</div>	


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
	$("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
	$("#menu").click(function(){
		$("#nav").toggle();
	});
	$(window).resize(function(){
		if(window.innerWidth > 0) {
			$("#nav").removeAttr("style");
		}
	});
</script>





<div id="incase">
	<div id="logo">
	<a href="" target="_blank">
	<!--<img alt="FeeX: Robin Hood of Fees" src="css/images/hp_logo.png" title="FeeX">--></a>
	</div>
	<br/>
	<div class="tagline">Find the retirement fees <span class="bold-tagline">you never knew you had.</span></div>

	<div class="tag-description">
	FeeX finds the hidden fees in your IRA and shows you how to reduce them.
	</div>

	<div id="convert-area">
		<input class="skybluebttn activate btn" type="button" value="Sign up for free">
	<div class="convert-text">And find your fees in 2 minutes.</div>
	</div>

	<div class="intrigue">
	Intrigued?
	</div>
</div>


</div>

<div id="banner">
<div class="horizontal-logo">
<ul class="banner">

	<div style="width: 8%!important;float:left; margin-right:2%;">
		<div class="foxnews"></div>
	</div>

	<div style="width: 8%!important;float:left; margin-right:5%;">
		<div class="dowjones"></div>
	</div>
 

 	<div style="width: 16%!important;float:left; margin-right:3%;">
		<div class="fastcompany"></div>
	</div>

	<div style="width: 8%!important;float:left; margin-right:5%;">
		<div class="bloomberg"></div>
	</div>

	<div style="width: 8%!important;float:left; margin-right:7%;">
		<div class="forbes"></div>
	</div>

	<div style="width: 8%!important;float:left; margin-right:5%;">
		<div class="financialtimes"></div>
	</div>

	<div style="width: 8%!important;float:left; margin-right:5%;">
		<div class="businessinsider"></div>
	</div>
 
 
 
 
 
</div>

 </body>
</html>