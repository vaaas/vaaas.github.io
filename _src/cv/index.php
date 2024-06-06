<?php
require('utils.php');
?>
<!DOCTYPE html>
<html lang='en' class='items-center'>
	<head>
		<meta charset='utf-8'/>
		<title>Vasileios Pasioliokis - Software Developer</title>
		<style>
			<?php require('style.php'); ?>
		</style>
	</head>

	<body class='max-w-50 w-full p-m relative print:p-0 print:bg-white print:h-full justify-between screen:gap-xxl'>
		<?php require('fragments/header.php'); ?>

		<div class='gap-8 flex-row items-baseline'>
			<div class='text-s'>(01)</div>

			<?php require('fragments/experience.php'); ?>
		</div>

		<div class='gap-8 flex-row items-baseline'>
			<div class='text-s'>(02)</div>

			<?php require('fragments/foss.php'); ?>
		</div>

		<div class='gap-20 flex-row items-baseline'>
			<div class='text-s'>(03)</div>

			<?php require('fragments/skills.php'); ?>
		</div>

		<footer class='text-s flex-row justify-between'>
			<div></div>
			<a class='hover:underline cursor-pointer invisible print:visible' href='https://vaaas.github.io/cv'>this document is available online at vaaas.github.io/cv</a>
			<div>Page 1/1</div>
		</footer>
	</body>
</html>
