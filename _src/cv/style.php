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
.border-top-1px { border-top-width: 1px; }
.border-top-black { border-top-color: black; }
.border-top-solid { border-top-style: solid; }
.col-span-10 { grid-column: span 10; }
.col-span-12 { grid-column: span 12; }
.col-span-2 { grid-column: span 2; }
.col-span-3 { grid-column: span 3; }
.col-span-5 { grid-column: span 5; }
.col-span-7 { grid-column: span 7; }
.col-span-9 { grid-column: span 9; }
.col12 { grid-template-columns: repeat(12, 1fr); }
.col7 { grid-template-columns: repeat(7, 1fr); }
.cursor-pointer { cursor: pointer; }
.flex { display: flex; }
.flex-col { flex-direction: column; }
.flex-wrap { flex-wrap: wrap; }
.flexible { flex: 1; }
.gap-2p { gap: calc(2 * var(--p)); }
.grid { display: grid; }
.grid-col-gap-p { grid-column-gap: var(--p); }
.grid-row-gap-p6 { grid-row-gap: calc(6 * var(--p)); }
.h-14p { height: calc(14 * var(--p)); }
.h-30p { height: calc(30 * var(--p)); }
.h-50p { height: calc(50 * var(--p)); }
.hover\:underline:hover { text-decoration: underline; }
.invisible { visibility: hidden; }
.items-baseline { align-items: baseline; }
.justified { text-align: justify; }
.justify-between { justify-content: space-between; }
.leading-2hp { line-height: calc(2.5 * var(--p)); }
.leading-reset { line-height: 1em; }
.line { top: 0.70rem; }
.m-auto { margin: auto; }
.no-select { user-select: none; }
.p-2p { padding: calc(2 * var(--p)); }
.pt-2p { padding-top: calc(2 * var(--p)); }
.pt-3p { padding-top: calc(3 * var(--p)); }
.pt-8p { padding-top: calc(8 * var(--p)); }
.relative { position: relative; }
.text-huge { font-size: calc(4 * var(--p)); }
.text-lowercase { text-transform: lowercase; }
.text-s { font-size: calc(1.5 * var(--p)); }
.text-slightly-faded { color: var(--color-slightly-faded); }
.text-sm { font-size: calc(1.75 * var(--p)); }
.w-96p { width: calc(96 * var(--p)); }
.w-half { width: 50%; }

@media screen {
	html { font-size: 20px; }
}

@media print {
	html { font-size: 12px; }
	.print\:bg-white { background: var(--color-white); }
	.print\:p-0 { padding: 0; }
	.print\:visible { visibility: visible; }
}

<?php require('fonts.php'); ?>
