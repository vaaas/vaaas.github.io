<?php
require('utils.php');
?>
<!DOCTYPE html>
<html lang='en' class='p-2p print:p-0'>
	<head>
		<meta charset='utf-8'/>
		<title>Vasileios Pasioliokis - Software Developer</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'/>
		<meta name='description' content='CV of Vasileios Pasialiokis, senior full-stack engineer, Javascript, Typescript, Vue, PHP, Laravel'/>
		<style>
			<?php require('style.php'); ?>
		</style>
		<link rel='icon' href='<?= data_url('data:image/png', __DIR__ . '/favicon.png') ?>'/>
	</head>

	<body class='bg-fed col12 grid grid-col-gap-p m-auto max-w-96p print:bg-white print:h-full'>
		<?php require('fragments/header.php'); ?>

		<div class='col-span-12 col12 grid h-50p items-baseline mobile:h-auto pt-8p'>
			<div class='col-span-2 mobile:hidden no-select text-s'>(01)</div>

			<section class='col-span-10 mobile:col-span-12'>
				<?php require('fragments/experience.php'); ?>
			</section>
		</div>

		<div class='col-span-12 col12 grid h-30p items-baseline pt-8p mobile:h-auto'>
			<div class='col-span-2 mobile:hidden no-select text-s'>(02)</div>

			<section class='col-span-10 mobile:col-span-12'>
				<?php require('fragments/foss.php'); ?>
			</section>
		</div>

		<div class='col-span-12 col12 grid items-baseline pt-8p'>
			<div class='col-span-5 mobile:hidden no-select text-s'>(03)</div>

			<?php require('fragments/skills.php'); ?>
		</div>

		<footer class='col-span-12 flex justify-between mobile:hidden print:mt-auto print:p-0 pt-8p text-lowercase text-s'>
			<div></div>
			<a class='cursor-pointer hover:underline invisible print:visible' href='https://vaaas.github.io/cv'>This document is available online at vaaas.github.io/cv</a>
			<div class='no-select'>Page 1/1</div>
		</footer>
	</body>
</html>
