

<?php foreach ($view['assetic']->stylesheets(
		array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
		<link rel="stylesheet" href="<?php echo $view->escape($url)?>" />
<?php endforeach; ?>



<?php $view->extend('GameGuessNumberBundle:GameViews:layout.html.php') ?>
<div id="body">
	<div id="leftnav">
		<div class="f1" >
			<div id="text">
				<p>Pick a Level </p>
			</div>
	
			<form  action="<?php echo $view['router']->generate('index') ?>" method="POST">
			<?php echo $view['slots']->set('title', "Number guess game")?>
			<?php echo $view['form']->enctype($form) ?> 
			<?php echo $view['form']->widget($form['type']) ?>
			<input class="input" type="submit" name="sbm_1" value="Start Game"> <br><br>
			
			</form><br>
	
			<form action="<?php echo $view['router']->generate('login') ?>">
			<input class="input" type="submit" name="logindiff" value="Change User">
			</form><br><br><br><br>
	
			<form action="<?php echo $view['router']->generate('show', array('gtype' => '1D'), true) ?>">
			<input class="input" type="submit" name="1D" value="1D Topscorers">
			</form><br><br>
		
			
		
			<form action="<?php echo $view['router']->generate('show', array('gtype' => '2D'), true) ?>">
			<input class="input" type="submit" name="2D" value="2D Topscorers">
			</form><br><br>
		
		
	
				
			<form action="<?php echo $view['router']->generate('show', array('gtype' => '3D'), true) ?>">
			<input class="input" type="submit" name="3D" value="3D Topscorers">
			</form>
	
	
		</div><!-- f1 -->
	</div><!-- leftnav -->
</div>
	