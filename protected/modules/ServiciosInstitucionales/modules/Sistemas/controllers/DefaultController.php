<?php
/**
 * Controller de módulo de sistemas.
 *
 * Accesa a los catálogos de equipo, de telefonía y al inventario de telefonía y equipos de computo.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package ServiciosInstitucionales.Sistemas
 */
class DefaultController extends Controller
{

	public $layout='//layouts/column1';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	
	/**
	 * Muestra los catálogos de equipos
	 */
	public function actionCatalogoEquipos()
	{
		$this->render('catalogoEquipo');
	}
	
	/**
	 * Muestra los catálogos de telefonía
	 */
	public function actionCatalogoTelefonia()
	{
		$this->render('catalogoTelefonia');
	}
	
	/**
	 * Muestra los catálogos de soporte
	 */
	public function actionCatalogoSoporte()
	{
		$this->render('catalogoSoporte');
	}
	
	
	/**
	 * Muestra la pantalla donde se imprimen las etiquetas.
	 * Se generan y filtran las etiquetas
	 */
	public function actionPrintLabels()
	{
		$model=new EquipoComputo('searchLabels');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EquipoComputo']))
			$model->attributes=$_GET['EquipoComputo'];
			

		$modelt=new TelefoniaCelular('searchLabels');
		$modelt->unsetAttributes();  // clear any default values
		if(isset($_GET['TelefoniaCelular']))
			$modelt->attributes=$_GET['TelefoniaCelular'];

		$this->render('printLabels',array(
			'model'=>$model,
			'modelt'=>$modelt,
		));
	}
	
}
