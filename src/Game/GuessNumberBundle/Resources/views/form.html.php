
<?php foreach ($view['assetic']->stylesheets(
		array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
		<link rel="stylesheet" href="<?php echo $view->escape($url)?>" />
<?php endforeach; ?>

<?php $view->extend('GameGuessNumberBundle:GameViews:layout.html.php') ?>

<div id="body">
	<div id="leftnav">

<form  action="<?php echo $view['router']->generate('login') ?>" method="POST">
			<?php echo $view['slots']->set('title', "Number guess game")?>
			<?php echo $view['form']->enctype($form) ?> 
			<?php echo $view['form']->widget($form) ?>
			<input class="input" type="submit" name="login" value="Login"> <br><br>
			
	</form>


 
</div>
</div>
