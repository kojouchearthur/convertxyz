<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html"/>
  <meta name="HandheldFriendly" content="true"/>
  <meta name="MobileOptimized" content="width"/>
  <meta name="robots" content="index,follow"/>
  <meta http-equiv="refresh" content="3000"/>
  <meta name="description" content="Convert values beween metric units, currency (wrt Naira), number bases, all in one place"/>
  <meta name="keyword" content="metric conversion, number conversion, binary, octal, hexadecimal conversion, currency, barrel conversion, hectare, acre, volume conversion"/>
  <title>. : : . Convert Numbers | Number Base | Currency | Metric Units | ConvertXYZ</title>
  
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <!-- <link rel="stylesheet" href="css/semantic.min.css"/> -->
  <link rel="stylesheet" href="css/mainstyle.css"/>
  <link rel="shortcut-icon" href=""/>
  
  <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	  <div class="navbar-brand">
	    <a href="#" style="color:inherit;">ConvertXYZ</a>
	  </div>
	  <button class="navbar-toggle" data-toggle="collapse" data-target="#mnav">
	    <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	</div>
	<div id="mnav" class="collapse navbar-collapse">
	  <ul class="nav navbar-nav" style="text-align:center;">
	    <li><a href="#">&nbsp;</a></li>	
		
		<li><h5 id="men_tit"><i class="fa fa-money"></i> Currencies | <i class="fa fa-balance-scale"></i> Metric Units | <i class="fa fa-calculator"></i> Number Bases | </h5></li>		
		
	  </ul>
	  <ul  class="nav navbar-nav navbar-right">
	    <li><a href="https://jsfiddle.net/user/kojouchearthur" target="_blank"><i class="fa fa-jsfiddle"></i> JsFiddle</a></li>
		<li><a href="https://github.com/kojouchearthur" target="_blank"><i class="fa fa-github"></i> Github</a></li>
	  </ul>
	</div>
	<span></span>
  </div>
</nav>  
<div class="jumbotron well well-lg" id="chron">
  <h5 id="chrono" class="">
    <span id="crntm"></span>
	
	<span id="crndt"></span>
  </h5>
</div>
<div class="container">
<!--  <h3>Convert values between Currencies, Metric Units, Number Bases</h3>-->
  <div class="row">
    <div class="" id="conv_con">
	  <div class="col-xs-12 col-sm-4">
	  <div id="crncy_con" class="op_con">
		<form id="crncy" class="opForm">
		  <div id="crncy_hd" class="opHd">
		    <i class="fa fa-money fa-3x"></i>
			<div class="form-group">
			  <select class="form-control opSelect" id="crncy_opSelect">
			    <option value="" selected disabled>Choose Currency to convert</option>
				<option value="USD">USD - NGN</option>
				<option value="EUR">EUR - NGN</option>
				<option value="GBP">GBP - NGN</option>
				<option value="CNY">CNY - NGN</option>
				<option value="INR">INR - NGN</option>
				<option value="GHC">GHC - NGN</option>
				<option value="RND">ZAR - NGN</option>
				<option value="KSH">KSH - NGN</option>				
			  </select>
			</div>
		    <h5 class="opTitle" id="crncy_title"></h5>
		  </div><hr>
		  
		  <div class="vals">
		    <div class="input-group">
		      <span class="input-group-addon"><i class="fa fa-money"></i></span>
			  <input type="text" class="form-control fVal val" id="crncy_fVal" placeholder="" />			
		    </div>
		    <div class="valNote fValNote" id="crncy_fValNote"></div>
		  </div>
		  <div class="swp_con">
		    <button type="button" class="btn btn-primary swp" id="crncy_swp">
			  <span class="fa fa-exchange"></span>
			</button>
		  </div>
		  <div class="vals">
		    <div class="input-group">
		      <span class="input-group-addon"><i class="fa fa-money"></i></span>
			  <input type="text" class="form-control sVal val" id="crncy_sVal" placeholder="" disabled />
		    </div>
			<div class="valNote sValNote" id="crncy_sValNote"></div>
		  </div>
		  <br>
		<h6 style='text-align:center;font-size:10px;'>Currency exchange Rates are set using data from <a href='https://floatrates.com' target="_blank"><em>floatrates.com</em></a> API with slight modification</h6>
		</form>
	  </div>
	  </div>
	  
	  <div class="col-xs-12 col-sm-4">
	  <div id="metrc_con" class="op_con">
	    <form id="metrc" class="opForm">
		  <div id="metrc_hd" class="opHd">
		    <i class="fa fa-balance-scale fa-3x"></i>
			<div class="form-group">
			  <select class="form-control opSelect" id="metrc_opSelect">
			    <optgroup label="Length">
				  <option selected disabled>Choose Metric Units to Convert</option>				
		          <option value="KmMi">Km - Mile</option>
			      <option value="FtM">Ft - Metre</option>
			      <option value="YdM">Yard - Metre</option>
				  <option value="InCm">Inch - Cm</option>
			    </optgroup>
				<optgroup label="Weight">
				  <option value="KgPd">Kg - Pound (lb)</option>
				  <option value="KgSt">Kg - Stone</option>
				  <option value="CaG">Carat (ct) - Gram</option>
				  <option value="OzG">Ounce (oz) - Gram</option>
				  <option value="TozG">Troy Ounce (toz) - Gram</option>
				</optgroup>
				<optgroup label="Area">
				  <option value="Ft2M2">Ft&sup2; - Metre&#178;</option>
				  <option value="In2Cm2">In&sup2; - Cm&sup2;</option>
				  <option value="HcAc">Hectare - Acre</option>
				</optgroup><!--
				<optgroup label="Temperature">
				  <option value="CeF">Celsius - Farenheit</option>
				  <option value="CeK">Celsius - Kelvin</option>
				</optgroup> -->
				<optgroup label="Volume">
				  <option value="GaL">Gallon - Litre</option>
				  <option value="LBbl">Litre - US Barrel (Liquid)</option>
				  <option value="Cm3In3">Cm&sup3; - Inch&sup3;</option>
				  <option value="Ft3M3">Ft&sup3; - Metre&sup3;</option>
				</optgroup>
			  </select>
			</div>
			<h5 class="opTitle" id="metrc_title"></h5>
		  </div><hr>
		  <div class="vals">
		    <div class="input-group" id="metrc_fVal">
			  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
			  <input type="text" class="form-control fVal val" id="metrc_fVal" placeholder="" />
			</div>
			<div class="valNote fValNote" id="metrc_fValNote"></div>		  
		  </div>
		  
		  <div class="swp_con">
		    <button type="button" class="btn btn-default swp" id="metrc_swp">
			  <span class="fa fa-exchange"></span>
			</button>
		  </div>
		  
		  <div class="vals">
		    <div class="input-group" id="metrc_sVal">
			  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
			  <input type="text" class="form-control sVal val" id="metrc_sVal" placeholder="" disabled />
			</div>
			<div class="valNote sValNote" id="metrc_sValNote"></div>
		  </div><br>
		  <h6 style="text-align:center;font-size:12px;">Conversion between Metric Units</h6><br>
		</form>		
	  </div>
	  </div>
	  
	  <div class="col-xs-12 col-sm-4">
	  <div id="nbase_con" class="op_con">
		<form id="nbase" class="opForm">
		  <div class="opHd" id="nbase_hd">
		    <i class="fa fa-calculator fa-3x"></i>
			<div class="form-group">
			  <select class="form-control opSelect" id="nbase_opSelect">
			    <option value="" selected disabled>Select Number Bases to convert</option>
			    <option value="BinDec">Binary (2) - Decimal (10)</option>
				<option value="OctDec">Octal (8) - Decimal (10)</option>
		    	<option value="HexDec">Hexadecimal (16) - Decimal (10)</option>  
			  </select>
			</div>
			<h5 class="opTitle" id="nbase_title"></h5>
		  </div><hr>
		  <div class="vals">
		    <div class="input-group">
			  <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
			  <input type="text" class="form-control fVal val" id="nbase_fVal" placeholder="" />
			</div>
			<div class="valNote fValNote" id="nbase_fValNote"></div>
		  </div>
		  
		  <div class="swp_con">
		    <button type="button" class="btn btn-warning swp" id="nbase_swp">
		      <span class="fa fa-exchange"></span>
			</button>
		  </div>
		  
		  <div class="vals">
		    <div class="input-group">
			  <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
			  <input type="text" class="form-control sVal val" id="nbase_sVal" placeholder="" disabled />
			</div>
			<div class="valNote sValNote" id="nbase_sValNote"></div>
		  </div><br>
		  <h6 style="text-align:center;font-size:12px;">Conversion between Number Bases</h6><br>		
		</form>
	  </div>
	  </div>
	</div>  
  </div>
</div>
<script src="js/mainscript.js"></script>

<!--<script src="js/semantic.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/mainscript.js"></script> -->
</body>
</html>