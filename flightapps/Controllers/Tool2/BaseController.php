<?php
namespace App\Controllers\Tool2;

class BaseController
{
	public static function index()
	{
		\Flight::render('template', [
			'title' => 'Tool 2',
			'body_content' => "<h1>Flight Tool 2</h1>",
		]);
	}
}