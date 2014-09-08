<?php
/**
 * FileDoc: 
 * Controller for BarcodeGenerator
 * This is an extension controller to generate a standard / traditional barcode (as images). 
 *  
 * PHP version 5.3
 * 
 * @category Extensions
 * @package  barcodegenerator
 * @author   144key
 * 
 */ 
Yii::import('ext.barcodegenerator.*');

/**
 * ClassDoc:
 * Controller for BarcodeGenerator
 * This is an extension controller to generate a standard / traditional barcode (as images). 
 *  
 * PHP version 5.3
 * 
 * @category Extensions
 * @package  barcodegenerator
 * @author   144key
 * 
 */
class BarcodeGeneratorController extends CExtController
{

    /**
     * Yii filters for controller
     * 
     * @return array - action filters
     */
    public function filters() 
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Rules for widget access
     * 
     * @return array - yii access rules array
     */
    public function accessRules() 
    {
        return array(
            array('allow',
                'actions' => array('GenerateBarcode'),
                'users' => array('*'),
            )
        );
    }

    /**
     * (AJAX Action) 
     * Action to get generated barcode as Image
     */
    public function actionGenerateBarcode() 
    {
		/*$inputCode = Yii::app()->request->getParam("code", "");
		$bc = new BarcodeGenerator;
		$bc->init('png');
		$bc->build($inputCode);*/
		
		//$this->redirect(Yii::app()->createUrl("barcodegenerator/generateBarcodeImage",array("code"=>"code39","o"=>"1","t"=>"30", "text"=>"test", "f"=>"2", "r"=>"1","a1"=>"", "a2"=>"")));
		
		//$this->render('//barcodegenerator/img');

    /*}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function actionGenerateBarcodeImage() 
    {*/
    		if(isset($_GET['code']) && isset($_GET['t']) && isset($_GET['r']) && isset($_GET['text']) && isset($_GET['f']) && isset($_GET['o']) && isset($_GET['a1']) && isset($_GET['a2'])){
	define('IN_CB',true);
    		$code=$_GET['code'];
    		$t=$_GET['t'];
    		$r=2;
    		$text=$_GET['text'];
    		$f=$_GET['f'];
    		$o=$_GET['o'];
    		$a1=$_GET['a1'];
    		$a2=$_GET['a2'];
    		
				require('class/index.php');
				require('class/FColor.php');
				require('class/BarCode.php');
				require('class/FDrawing.php');
				if(include('class/'.$code.'.barcode.php')){
					$color_black = new FColor(0,0,0);
					$color_white = new FColor(255,255,255);
					if(!empty($a2))
						$code_generated = new $code($t,$color_black,$color_white,$r,$text,$f,$a1,$a2);
					elseif(!empty($a1))
						$code_generated = new $code($t,$color_black,$color_white,$r,$text,$f,$a1);
					else
						$code_generated = new $code($t,$color_black,$color_white,$r,$text,$f);
					
					$drawing = new FDrawing(1024,1024,'',$color_white);
					$drawing->init();
					$drawing->add_barcode($code_generated);
					$drawing->draw_all();
					$im = $drawing->get_im();
					//echo $code_generated->lastX."<br/>".$code_generated->lastY."<br/>";
					//$code_generated->lastX=543;
					$im2 = imagecreate($code_generated->lastX,$code_generated->lastY);
					imagecopyresized($im2, $im, 0, 0, 0, 0, $code_generated->lastX, $code_generated->lastY, $code_generated->lastX, $code_generated->lastY);
					$drawing->set_im($im2);
					$drawing->finish($o);
				}
				else{
					header('Content: image/png');
					readfile('error.png');
				}
			}
			else{
				header('Content: image/png');
				readfile('error.png');
			}
		
		
		
		
		
    }
    
    
    
    
    
    
    
    
    
    
}
