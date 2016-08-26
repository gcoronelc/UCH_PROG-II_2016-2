<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<h1>PROGRAMACION II</h1>
<h1>GUSTAVO CORONEL CASTILLO</h1>
<h2>gcoronelc.blogspot.com</h2>
<hr/>

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<body bgcolor="#D2EBF7">
	<?php
		echo("<b>Su nombre es:</b> $nombre<br>");
		echo("<b>Su Email:</b> $email<br>");
	?>
	<input type="button" value="Back" onClick="history.back()">
</body>