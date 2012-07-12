<?php foreach ($view['assetic']->stylesheets(
		array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
		<link rel="stylesheet" href="<?php echo $view->escape($url)?>" />
<?php endforeach; ?>

<?php $view->extend('GameGuessNumberBundle:GameViews:layout.html.php') ?>
<div id="body">
	<div id="leftnav">
		<div class="text">
			<h4>Guess the Number!</h4>
			<P><br>
<ul>				
<b>How to Play:</b><br>
<li> The FunBrain Magician will pick a secret number and put it in his hat.</li>
<li> You guess what number it is.</li>
<li> If your guess is too high or too low, FunBrain will give you a hint.</li>
<li> See how many turns it takes you to win!</li>

</ul>
			</P>
		</div>	
	</div>
</div>