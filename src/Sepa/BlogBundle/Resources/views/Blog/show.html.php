
<?php $view->extend('SepaBlogBundle:Blog:layout.html.php') ?>


<?php $view['slots']->set('title', $post->gettitle()) ?>

	<h1>Details of Posts</h1>
    
   
 <b>          <?php echo $post->getTitle() ?>    </b><br>
            <ul>
            
             <?php echo $post->getBody() ?>
       </ul>
    
