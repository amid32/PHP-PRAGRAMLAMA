<?php 
$header = "My First Echo Page";

$wikipedia = 
[
   'firstname' => 'Amid',
   'lastname' => 'Mirzeyev',
   'birsday' => '1986'
];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$header; ?></title>
	<style>
		.row{background: #EEE;margin-bottom: 4px; padding: 10.px;}
		.coln-1{font-weight:bold; width: 100px; display:inline-block;}
		.coln-2{};
		.coln-3{};

	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br>
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php foreach ($wikipedia as $key => $value) {?>

	<div class="row">
	<span class="coln-1"><?=$key?></span>
	<span class="coln-2"> : </span>
	<span class="coln-3"><?=$value?></span>
	</div>
<?php } ?>
</body>
</html>