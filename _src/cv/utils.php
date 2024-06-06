<?php

#[\AllowDynamicProperties]
class Component {
	private string $component;

	public function __construct(string $component) {
		$this->component = './components/' . $component . '/php';
	}

	public function render(array $args = []): string {
		foreach ($args as $k => $v) $this->$k = $v;
		ob_start();
		require($this->component);
		return ob_get_clean();
	}
}

function render(string $component, array $args=[]): string {
	return (new Component($component))->render($args);
}

function data_url(string $header, string $source): string {
	$contents = file_get_contents($source);
	$b64 = base64_encode($contents);
	return "{$header};base64,{$b64}";
}
