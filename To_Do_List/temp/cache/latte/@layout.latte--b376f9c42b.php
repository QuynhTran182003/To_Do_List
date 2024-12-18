<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /Users/vinhquangtran/Documents/Work/Omnicado/To_Do_List/app/UI/@layout.latte */
final class Template_b376f9c42b extends Latte\Runtime\Template
{
	public const Source = '/Users/vinhquangtran/Documents/Work/Omnicado/To_Do_List/app/UI/@layout.latte';

	public const Blocks = [
		['scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>';
		if ($this->hasBlock('title')) /* line 7 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' | ';
		}
		echo 'To-Do List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.rounded-60{
			border-radius: 60px;
		}
		.background{
			background-image: url(\'/media/background.jpg\');
			background-size: cover;
			background-position: center;
		}
		.bg-black{
			background-color: rgba(0,0,0,0.5);
		}

	</style>
</head>

<body class="background">

';
		$this->renderBlock('content', [], 'html') /* line 27 */;
		echo '		<!-- Scripts -->
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 29 */;
		echo '</body>

</html>

';
	}


	/** {block scripts} on line 29 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
		<!-- own script -->
		<script src="Scripts/scriptHome.js"></script>
		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
';
	}
}
