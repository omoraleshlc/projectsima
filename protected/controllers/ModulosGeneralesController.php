<?php

class ModulosGeneralesController extends Controller
{
	public function actioncatModulos()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('catModulos');
	}
}