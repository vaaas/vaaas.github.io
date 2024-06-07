<?php
require('utils.php');
?>
<!DOCTYPE html>
<html lang='en' class='p-2p'>
	<head>
		<meta charset='utf-8'/>
		<title>Vasileios Pasioliokis - Software Developer</title>
		<style>
			<?php require('style.php'); ?>
		</style>
	</head>

	<body class='bg-fed col12 grid grid-col-gap-p grid-row-gap-p6 m-auto print:bg-white print:h-full print:p-0 row-initial w-96p'>
		<?php require('fragments/header.php'); ?>

		<div class='col-span-12 col12 grid items-baseline'>
			<div class='col-span-3 text-s no-select'>(01)</div>

			<?php require('fragments/experience.php'); ?>
		</div>

		<div class='col-span-12 grid col12 items-baseline'>
			<div class='col-span-3 text-s no-select'>(02)</div>

			<?php require('fragments/foss.php'); ?>
		</div>

		<div class='col-span-12 grid col12 items-baseline'>
			<div class='col-span-5 text-s no-select'>(03)</div>

			<?php require('fragments/skills.php'); ?>
		</div>

		<footer class='col-span-12 flex justify-between text-lowercase text-s'>
			<div></div>
			<a class='hover:underline cursor-pointer invisible print:visible' href='https://vaaas.github.io/cv'>This document is available online at vaaas.github.io/cv</a>
			<div class='no-select'>Page 1/1</div>
		</footer>
	</body>
</html>
