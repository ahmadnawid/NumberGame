<?php

namespace Game\GuessNumberBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Game\GuessNumberBundle\Entity\Number;
use Game\GuessNumberBundle\Entity\Topscorers;
class MainController extends Controller
{
	public function indexAction(Request $request)
	{
		$topScorers = new Topscorers();
		
		
		$form = $this->createFormBuilder($topScorers)
		->add('username', 'text')
		->getForm();
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
		
			if ($form->isValid()) {
				// perform some action, such as saving the task to the database
			
				return $this->redirect($this->generateUrl('main', array(
				'name' => $topScorers->getUsername())));
			}
		}
		return $this->render('GameGuessNumberBundle::form.html.twig', array(
				'form' => $form->createView(),
		));
		
	}
	
	
	public function mainAction(Request $request, $name)
	{
		$topScorers = new Topscorers();
		$number = new Number();
		
	
		$form = $this->createFormBuilder($number)
		->add('number', 'number')
		->getForm();
	
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
	
			if ($form->isValid()) {
				// perform some action, such as saving the task to the database
					
				$guess  = $form["number"]->getData();;//$number->getNumber();
				//$numbe  = $_POST['number'];
				//if ($guess < $number){
				//	echo "Guess Higher";
				//}elseif($guess > $number){
				//	echo "Guess Lower";
				//}elseif($guess == $number){
					//echo "You got it!";
					//echo "<br />Random Number:".$number."<br />";
				//}
				
				
				return $this->render('GameGuessNumberBundle::test.html.twig', array(
						'number' => $guess));
			}
		}
		return $this->render('GameGuessNumberBundle::main.html.twig', array(
				'form' => $form->createView(), 'name' => $name
		));
	
	}

	

}