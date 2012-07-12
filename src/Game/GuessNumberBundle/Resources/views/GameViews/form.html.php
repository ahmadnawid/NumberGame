
<?php foreach ($view['assetic']->stylesheets(
		array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
		<link rel="stylesheet" href="<?php echo $view->escape($url)?>" />
<?php endforeach; ?>

<?php $view->extend('GameGuessNumberBundle:GameViews:layout.html.php') ?>
<div id="body">
<div id="leftnav">
	<div class="text">
		<h3>Welcome dear user</h3>
		<p>Please login to play the number guessing game!</p>
	
	
	</div>
	<div class="f1" >
	<form  action="<?php echo $view['router']->generate('login') ?>" method="POST">
			<?php echo $view['slots']->set('title', "Number guess game")?>
			<?php echo $view['form']->enctype($form) ?> 
			<?php echo $view['form']->widget($form) ?>
			<input class="input" type="submit" name="sbm_1" value="Log in"> <br><br>
			
	</form>
	</div>
	</div>
	</div>