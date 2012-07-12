<?php

namespace Game\GuessNumberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Game\GuessNumberBundle\Entity\Game;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class GameController extends Controller
{
	
	public function loginAction(Request $request){
		
		//$topScorers = new Topscorers();
		
		$login = new Game();
		$form = $this->createFormBuilder($login)
		->add('username', 'text')
		->getForm();
		
		$session = $this->getRequest()->getSession();
		$rand = rand(1,10);
		// store an attribute for reuse during a later user request
		$session->set('randNum', $rand);
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
		
			if ($form->isValid()) {
				// perform some action, such as saving the task to the database
		
		
		
				return $this->redirect($this->generateUrl('index_game'));
			}
		}
		return $this->render('GameGuessNumberBundle:GameViews:form.html.php', array(
				'form' => $form->createView(),
		));
		
		
	}
	
	
	public function indexAction(Request $request)
	{
		//session establishment
		
		$obj = new Game();
		
		$form = $this->createFormBuilder($obj)
			->add('type','choice',array(
							'choices' => array('1D' => '1D', '2D' => '2D', '3D' => '3D'),
							'required' => true,
							'expanded' => true,
							
							)
				)
			->add('your_guess','text')
			->add('guess_number', 'text',array('read_only' => true))
			->add('hint','text', array('read_only' => true))
			->add('score','text', array('read_only' => true))
			->getForm();
		
		if($this->getRequest()->getMethod()=='POST'){
			$form->bindRequest($request);
			
			//if ($form->isValid() ) {
				
			if($obj->getType()=='1D'){
					$randum = rand(1,10);
					$uguess = $obj->getYourGuess();
					if($randum == $uguess && $uguess != 0){
						$obj->setYourGuess('');
						$obj->setHint('You won!');
					}elseif ($randum > $uguess && $uguess != 0){
						$obj->setYourGuess('');
						$obj->setHint('Lower!');
					}else{
						if($uguess != 0){
						$obj->setYourGuess('');
						$obj->setHint('Higher!');
						}
					}

					$form = $this->createFormBuilder($obj)
					->add('type','hidden',array(
							'data'=>$obj->getType(),
						)
					)
					->add('your_guess','text')
					->add('guess_number', 'text',array('read_only' => true))
					->add('hint','text', array('read_only' => true))
					->add('score','text', array('read_only' => true))
					->getForm();
					
			}elseif ($obj->getType() =='2D'){
				//play 2D guess number game
				$randum = array('fr'=>rand(1,10), 'sr'=>rand(1,10));
				$uguess = array('fg'=> $obj->getFirstGuess(), 'sg'=>$obj->getSecondGuess());
				if($randum['fr'] == $uguess['fg'] && $randum['sr'] == $uguess['sg'] && $uguess != 0){
					$obj->setYourGuess('');
					$obj->setHint('You won!');
				}elseif ($randum['fr'] > $uguess['fg'] && $uguess != 0){
					$obj->setYourGuess('');
					$obj->setHint('Lower!');
				}else{
					if($uguess != 0){
						$obj->setYourGuess('');
						$obj->setHint('Higher!');
					}
				}
				
				//add the objects to the form
				$form = $this->createFormBuilder($obj)
					->add('type','hidden',array(
							'data'=>$obj->getType(),
						)
					)
					->add('first_guess', 'text')
					->add('second_guess', 'text')
					->add('guess_number', 'text',array('read_only' => true))
					->add('hint','text', array('read_only' => true))
					->add('score','text', array('read_only' => true))
					->getForm();
			}else{
				$form = $this->createFormBuilder($obj)
				->add('type','hidden',array(
						'data'=>$obj->getType(),
					)
				)
				->add('your_guess','text')
				->add('first_guess', 'text')
				->add('second_guess', 'text')
				->add('third_guess', 'text')
				->add('guess_number', 'text',array('read_only' => true))
				->add('hint','text', array('read_only' => true))
				->add('score','text', array('read_only' => true))
				->getForm();
			}
			//}
			return $this->render('GameGuessNumberBundle:GameViews:frmView.html.php', array('form' => $form->createView()));
					
			}
		return $this->render('GameGuessNumberBundle:GameViews:index.html.php', array('form' => $form->createView()));
	}
}	
