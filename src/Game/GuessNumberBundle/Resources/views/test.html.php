<?php foreach ($view['assetic']->stylesheets(
		array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
		<link rel="stylesheet" href="<?php echo $view->escape($url)?>" />
<?php endforeach; ?>

<?php $view->extend('GameGuessNumberBundle:GameViews:layout.html.php') ?>



 
 <div id="body">
	<div id="leftnav">
		<div class="text">

		 It took you <?php echo $numguess ?> turns to guess my number, which was <?php echo $number  ?>
		 <br><br><br>
		 
		<a href="<?php echo $view['router']->generate('index')?>"> Play Guess the Number Again </a><br><br>
		<a href="<?php echo $view['router']->generate('save', array('name' => $name, 'score' => $score, 'type' => $gtype), true)?>"> Save your score in the list of topscorers </a>
		
		<br><br>
		<form action="<?php echo $view['router']->generate('logout') ?>">
			<input class="input" type="submit" name="logout" value="Logout">
			</form>
		
		</div>	
	</div>
</div>