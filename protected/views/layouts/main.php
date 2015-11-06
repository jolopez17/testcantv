
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="es" />
    
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logoCantv_portal.jpg">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  </head>
  <body>
    
    <div class="container" id="page">
      <table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
	  <td align="center" style='width: 32%; text-align: left'>
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cabecera_gobenlinea_cantv.png" style="width: 100%; " />
	  </td>
        </tr>
          <tr>	
	  <td align ='center' style='width: 40%; text-align: center'>
	   <p></p><h2><b>TESTCANTV</b></h2>
	  </td>
	  	      
	</tr>	
  </table>	

<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Personal('.Yii::app()->user->name.')','url'=>array('/datosPersonales/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?> 
             
       <?php $this->widget('Flashes'); ?>
       <?php echo $content; ?>
      <div class="clear"></div>
      
      <div id="footer">
	jose Lopez
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/yii.png" style="width: 10%; " />
	testcantv <?php echo date('Y'); ?>
      </div><!-- footer -->
    
    </div><!-- page -->
  </body>
</html>
