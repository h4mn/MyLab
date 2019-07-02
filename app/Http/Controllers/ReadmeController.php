<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GrahamCampbell\Markdown\Facades\Markdown;

/**
* Controler para leitura do arquivo readme.md que está na pasta raiz do projeto
*/
class ReadmeController extends Controller
{
	
	function index()
	{
		# code...

		//$file_content = Converter::convertToHtml(require_once(__DIR__."/../../../readme.md"));
		$file_content = require_once __DIR__."/../../../readme.md";
		//$file_content = "# Título \n## Subtítulo";

		return Markdown::convertToHtml(require_once __DIR__."/../../../readme.md");
	}
}