<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>White Tiger Express | Home</title>

<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<style>
   .body{
	width:100%;
	margin:0;
	font-size:24px;
	line-height:20px;
	font-family:Arial, Helvetica, sans-serif;
}

</style>


</head>

<body>
	
<div class="main-content">
    
    	<div id="top-left">
    	 <a href="#"> <?php echo get_theme_mod('demo_setting_id'); ?></a>

        </div><!--ends top-left-->
    
    
        <div id="top-right">
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22%" rowspan="2"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" width="29" height="29" /></td>
            <td width="78%" valign="bottom">Toll Free</td>
          </tr>
          <tr>
            <td valign="top">000 - 0000 - 000</td>
          </tr>
          </table>

        </div><!--ends top right-->
        </div><!--ends main-content-->
        
        
        <div class="clear"></div>        
<div id="nav-bg">
  <div class="main-content">
  <?php wp_nav_menu(array('
               theme_location'=>'primary-menu'
              )); ?>
            </div><!--ends main content-->
</div><!--ends nav bg-->
      