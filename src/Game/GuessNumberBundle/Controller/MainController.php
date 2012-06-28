<?php

namespace Game\GuessNumberBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class MainController extends Controller
{

	public function indexAction($number)
	{
		return $this->render('GameGuessNumberBundle::main.html.twig', array('number' => $number));	
	}
	
	public function formAction(Request $request)
	{

		$form = $this->createFormBuilder()
		->add('number', 'number')
		->getForm();
		
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
		
			if ($form->isValid()) {
				// perform some action, such as saving the task to the database
		
				return $this->redirect($this->generateUrl('task_success'));
			}
		}

		return $this->render('GameGuessNumberBundle::form.html.twig', array(
				'form' => $form->createView(),
		));	}
}