<div class='flex flex-col gap-2p'>
	<h2 class='leading-reset text-huge text-lowercase'>Experience.</h2>

	<?= render('work-item', [
		'company' => 'Kaizen Gaming',
		'title' => 'Frontend Developer',
		'period' => '2024 — now',
		'description' => 'Live betting team. Frontend development with Vue, Vuex, Tailwind. Composable, functional, fully unit tested code. Mentoring of new employees.',
	]) ?>

	<?= render('work-item', [
		'company' => 'Aylo',
		'title' => 'Backend Developer',
		'period' => '2023 — 2024',
		'description' => 'Maintenance and modernisation of legacy code (Zend Framework 1). Migration to a microservices architecture. Improvements on content search functionality. PHP, Laravel, MySQL, Elasticsearch, React.',
	]) ?>

	<?= render('work-item', [
		'company' => 'Phenometry',
		'title' => 'Full-stack Developer',
		'period' => '2022 — 2023',
		'description' => 'Full-stack development in node.js, Express, Typescript, Vue, PostgreSQL. Significant refactoring of legacy code. 0% → 80% test coverage. Optimisation and bundle size reduction. Mentoring of new employees. Implementation of Phi for tablet and pen interfaces. Integration of Stripe payments.',
	]) ?>

	<?= render('work-item', [
		'company' => 'Doppler SA',
		'title' => 'Full-stack Developer, DevOps',
		'period' => '2020 — 2022',
		'description' => 'Full-stack development in PHP, Laravel, Lumen, Vue, SQL Server, MariaDB. Architected the CI/CD pipelines. Development of order automation, BI analytics, and internal tooling extending the company ERP. Mentoring of new employees.',
	]) ?>
</div>
