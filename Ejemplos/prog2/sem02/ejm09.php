<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
$primera = 0;
if( !isset($_COOKIE["nombre"]) ) {
	setcookie("nombre","Claudia",time()+3600);
	$primera = 1;
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body bgcolor="#D2EBF7">

		<h1>PROGRAMACION II</h1>
		<h1>GUSTAVO CORONEL CASTILLO</h1>
		<h2>gcoronelc.blogspot.com</h2>
		<hr/>
			
		<?php
		if($primera){
			echo "Hola, esta es tu primera visita.";
		}else{
			echo "Hola " . $_COOKIE["nombre"] . "<br>";
		}
		?>
	</body>
</html>