* { all: unset; }
head { display: none; }

:root {
	--p: 0.5rem;

	--color-faded: #0002;
	--color-slightly-faded: #000a;
	--color-fed: #fed;
	--color-white: #fff;
}

html { font-family: 'Playfair Display', serif; }

.bg-fed { background: var(--color-fed); }
.block { display: block; }
.bold { font-weight: bold; }
.col-span-10 { grid-column: span 10; }
.col-span-12 { grid-column: span 12; }
.col-span-3 { grid-column: span 3; }
.col-span-5 { grid-column: span 5; }
.col-span-7 { grid-column: span 7; }
.col-span-9 { grid-column: span 9; }
.col12 { grid-template-columns: repeat(12, 1fr); }
.col7 { grid-template-columns: repeat(7, 1fr); }
.cursor-pointer { cursor: pointer; }
.flex { display: flex; }
.flex-wrap { flex-wrap: wrap; }
.gap-2p { gap: calc(2 * var(--p)); }
.grid { display: grid; }
.grid-col-gap-p { grid-column-gap: var(--p); }
.grid-row-gap-p6 { grid-row-gap: calc(6 * var(--p)); }
.h-136p { height: calc(136 * var(--p)); }
.hover\:underline:hover { text-decoration: underline; }
.invisible { visibility: hidden; }
.italic { font-style: italic; }
.items-baseline { align-items: baseline; }
.justify-between { justify-content: space-between; }
.m-auto { margin: auto; }
.ml-auto { margin-left: auto; }
.no-select { user-select: none; }
.p-2p { padding: calc(2 * var(--p)); }
.pt-2p { padding-top: calc(2 * var(--p)); }
.pt-3p { padding-top: calc(3 * var(--p)); }
.row-initial { grid-template-rowns: initial; }
.text-huge { font-size: calc(4 * var(--p)); }
.text-lowercase { text-transform: lowercase; }
.text-s { font-size: calc(1.5 * var(--p)); }
.text-slightly-faded { color: var(--color-slightly-faded); }
.text-sm { font-size: calc(1.75 * var(--p)); }
.w-96p { width: calc(96 * var(--p)); }
.w-half { width: 50%; }

@media screen {
	html { font-size: 20px; }
	.screen\:gap-xxl { gap: var(--spacing-xxl); }
}

@media print {
	html { font-size: 12px; }
	.print\:bg-white { background: var(--color-white); }
	.print\:p-0 { padding: 0; }
	.print\:visible { visibility: visible; }
}

<?php require('fonts.php'); ?>
