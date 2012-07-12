<!DOCTYPE html>



<html>
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', "Default title") ?></title>
    </head>
    <body>
    	<div id="container" >
    		<div id="header">
    		<img src="<?php echo $view['assets']->getUrl('bundles/gameguessnumber/images/Banner.png') ?>" />
    			<div class="HorizLinks">
    	 			<ul>
						<li><a href="<?php ?>">Home</a></li>
						<li><a href="<?php echo $view['router']->generate('help', array(), true) ?>">How to Play</a></li>
						<li><a href="<?php ?>">About</a></li>
						<li><a href="<?php ?>">Contact</a></li>
				
						</ul>
    	
    			</div><!-- HorizLinks -->
    	
    	
    		</div><!-- end of header -->
    		<div id="rightnav">
    			<img class="image" src="<?php echo $view['assets']->getUrl('bundles/gameguessnumber/images/guess.gif') ?>" />
    		</div><!-- rightnav -->
	      <?php $view['slots']->output('_content') ?>
	 	
	 	
	 	<div id="footer">
	 	
	 	</div><!-- footer -->
	 	
	 	</div><!-- container -->
    </body>
</html>