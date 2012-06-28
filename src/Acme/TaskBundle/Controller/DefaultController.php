<?php

// src/Acme/TaskBundle/Controller/DefaultController.php
namespace Acme\TaskBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	public function newAction(Request $request)
	{
		// create a task and give it some dummy data for this example
		$task = new Task();
		//$task->setTask('Write a blog post');
		//$task->setDueDate(new \DateTime('tomorrow'));

		$form = $this->createFormBuilder($task)
		->add('task', 'text')
		->add('dueDate', 'date')
		->getForm();

	 if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
			
            
        }
	}			    return new Response();
					//return $this->redirect($this->generateUrl('task_success'));
	
}
}