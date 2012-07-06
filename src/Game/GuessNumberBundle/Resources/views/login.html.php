
<?php foreach ($view['assetic']->stylesheets(
    array('@GameGuessNumberBundle/Resources/public/css/*')) as $url): ?>
<link rel="stylesheet" href="<?php echo $view->escape($url) ?>" />
<?php endforeach; ?>

<form id="login" action="<?php echo $view['router']->generate('task_new') ?>" method="POST">
    <h1>Guess Number Game</h1>
    <fieldset id="inputs">
        <input id="username" type="text" name="name" placeholder="Username" autofocus required>   
      
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
       
    </fieldset>

</form>