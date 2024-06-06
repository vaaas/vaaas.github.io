* {
	all: unset;
	display: flex;
	flex-direction: column;
}

:root {
	--spacing-xs: 0.25rem;
	--spacing-s: 0.5rem;
	--spacing-m: 1rem;
	--spacing-l: 1.5rem;
	--spacing-xl: 2rem;
	--spacing-xxl: 3rem;

	--font-s: 0.75rem;
	--font-sm: 0.9rem;
	--font-l: 1.25rem;
	--font-xl: 1.5rem;
	--font-xxl: 2rem;
	--font-xxxl: 3rem;

	--color-faded: #0002;
	--color-slightly-faded: #000a;
}

head { display: none; }
html { font-family: 'Playfair Display', serif; }
body { background: #fed; }

.flex-row { flex-direction: row; }
.items-center { align-items: center; }
.items-baseline { align-items: baseline; }
.justify-between { justify-content: space-between; }
.w-12 { width: 8rem; }
.border-b-solid { border-bottom-style: solid; }
.border-b-m { border-bottom-width: 1px; }
.border-b-faded { border-bottom-color: var(--color-faded); }
.max-w-50 { max-width: 50rem; }
.text-s { font-size: var(--font-s); }
.text-sm { font-size: var(--font-sm); }
.text-l { font-size: var(--font-l); }
.text-xl { font-size: var(--font-xl); }
.text-xxl { font-size: var(--font-xxl); }
.text-xxxl { font-size: var(--font-xxxl); }
.text-slightly-faded { color: var(--color-slightly-faded); }
.w-full { width: 100%; }
.w-half { width: 40%; }
.p-s { padding: var(--spacing-s); }
.p-m { padding: var(--spacing-m); }
.py-s { padding-top: var(--spacing-s); padding-bottom: var(--spacing-s); }
.py-m { padding-top: var(--spacing-m); padding-bottom: var(--spacing-m); }
.pt-xs { padding-top: var(--spacing-xs); }
.pt-s { padding-top: var(--spacing-s); }
.pt-m { padding-top: var(--spacing-m); }
.pt-xl { padding-top: var(--spacing-xl); }
.pl-xl { padding-left: var(--spacing-xl); }
.pr-xxl { padding-right: var(--spacing-xxl); }
.hover\:underline:hover { text-decoration: underline; }
.cursor-pointer { cursor: pointer; }
.absolute { position: absolute; }
.relative { position: relative; }
.right-0 { right: 0; }
.bottom-0 { bottom: 0; }
.bold { font-weight: bold; }
.italic { font-style: italic; }
.mt-auto { margit-top: auto; }
.ml-auto { margin-left: auto; }
.leading-m { line-height: 1.5em; }
.gap-8 { gap: 8rem; }
.gap-20 { gap: 20rem; }
.gap-s { gap: var(--spacing-s); }
.gap-m { gap: var(--spacing-m); }
.gap-xl { gap: var(--spacing-xl); }
.flex-wrap { flex-wrap: wrap; }
.invisible { visibility: hidden; }
.text-lowercase { text-transform: lowercase; }

@media screen {
	html { font-size: 20px; }
	.screen\:gap-xxl { gap: var(--spacing-xxl); }
}

@media print {
	html { font-size: 12px; }
	.print\:bg-white { background: white; }
	.print\:p-0 { padding: 0; }
	.print\:visible { visibility: visible; }
	.print\:h-full { height: 100vh; }
}

<?php require('fonts.php'); ?>
