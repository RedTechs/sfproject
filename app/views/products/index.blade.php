<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>Standard Data Input Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1,	minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/css/app.min.css">
<script src="/js/jQuery2.0.2.min.js"></script>
<script src="/js/zebra_datepicker.min.js"></script>
<script src="/js/jquery.nouislider.min.js"></script>
<script src="/js/main.min.js"></script>

</head>

<body>

<div class="app-wrapper">

<nav class="main-menu">
<a href="#">Something</a>
<a href="#">Something</a>
<a href="#">Something</a>
</nav><!--#main-menu-->

<header>
<div class="main-menu-button main-menu-button-left"><a class="left-arrow">&nbsp;</a></div>
<div class="main-menu-button main-menu-button-right"><a class="gear">&nbsp;</a></div>
<h1>testing</h1>
</header>

<div class="app-content">

<form>

<section class="border-bottom">
	<div class="content">
		<h3>BEER</h3>
		<div class="form-control-group">
			<div class="form-control form-control-text">
				<input type="text" name="text">
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="border-bottom">
	<div class="content">
		<h3>Order Date</h3>
		<div class="form-control-group">
			<div class="form-control form-control-date">
				<input type="date" name="date">
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="border-bottom">
	<div class="content">
		<h3>Include marketing tools</h3>
		<div class="form-control-group">
			<div class="form-control form-control-toggle" data-on-label="yes" data-off-label="no">
				<input type="checkbox" name="toggle">
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="border-bottom">
	<div class="content">
		<h3>Remarks</h3>
		<div class="form-control-group">
			<div class="form-control form-control-textarea">
				<textarea></textarea>
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="border-bottom">
	<div class="content">
		<h3>Container type</h3>
		<div class="span-50 form-control-group">
			<div class="form-control form-control-checkbox">
			<input type="checkbox"><label>Single</label>
			</div>
			<div class="form-control form-control-checkbox">
			<input type="checkbox"><label>Double</label>
			</div>
		</div>
		<div class="span-50 form-control-group">
			<div class="form-control form-control-checkbox">
			<input type="checkbox"><label>triple</label>
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="border-bottom">
	<div class="content">
		<h3>Hotel Type</h3>
		<div class="form-control-group">
			<div class="form-control form-control-select">
				<select>
					<option>Owner Operated</option>
					<option>Co-op</option>
					<option>Pure Anarchy</option>
				</select>
			</div>
		</div>
	</div><!--.content-->
</section>

<section >
	<div class="content">
		<h3>Number of Rooms</h3>
		<div class="form-control-group">
			<div class="form-control form-control-number">
			<input type="number" >
			</div>
		</div>
	</div><!--.content-->
</section>

<section class="data-capture-buttons one-buttons">
	<div class="content">
    	<a href="#">submit</a>
    </div>
</section><!--.data-capture-buttons-->

</form>

</div><!--#app-content-->
</div><!--#app-wrapper-->

</body>
</html