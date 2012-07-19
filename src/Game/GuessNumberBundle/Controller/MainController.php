<?php

namespace Game\GuessNumberBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Game\GuessNumberBundle\Entity\Number;
use Game\GuessNumberBundle\Entity\Topscorers;
use Game\GuessNumberBundle\Entity\Game;
use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller 
{
	
	public function loginAction(Request $request)
	{
		$topScorers = new Topscorers();
		
		$form = $this->createFormBuilder($topScorers)
		->add('username', 'text', array(
   		'label'  => 'User'))
		->getForm();

		
		if ($this->getRequest()->getMethod() == 'POST') {
  			$form->bindRequest($this->getRequest());
  			
  			if ($form->isValid()) {
				
  				
				$session = $this->getRequest()->getSession();
				$data = $request->request->all();
				$username = $data['form']['username'];
				$session->set('user', $username);
				$this->rando();
				
				
				return $this->redirect($this->generateUrl('index'));
			}
		}
				return $this->render('GameGuessNumberBundle::form.html.php', array(
						'form' => $form->createView(),
		));
		
	}
	
	// perform some action, such as saving the score to the database.
	public function saveAction($name, $score, $type){
		
		
				$session = $this->getRequest()->getSession();
				$topScorer = new Topscorers();				
				$topScorer->setUsername($name);
				$topScorer->setHighscore($score);
				$topScorer->setGameType($type);
		
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($topScorer);
				$em->flush();
		
				return $this->redirect($this->generateUrl('index'));
		
		
	}
	
	//Show the list of top scorers in Desc order.
	public function showAction($gtype){
	
				$em = $this->getDoctrine()->getEntityManager();
				$query = $em->createQuery(
				'SELECT p FROM GameGuessNumberBundle:Topscorers p WHERE p.gametype = :gtype ORDER BY p.highscore DESC'
				)->setParameter('gtype', $gtype);
				$topscorer = $query->setMaxResults(10)->getResult();
		
				return $this->render('GameGuessNumberBundle::tables.html.twig', array('topscorer' => $topscorer));
	
	}
	
	
	public function indexAction(Request $request)
	{
		
		$session = $this->getRequest()->getSession();
		
		//check if user name set.
		if($session->get('user')){
		
		$obj = new Game();
		
		$session = $this->getRequest()->getSession();
		$randum = $session->get('rand');
		$user = $session->get('user');
		$score = $session->get('score');
		$numofguess = $session->get('numofguess');
		$randum1 = $session->get('rand1');
		$randum2 = $session->get('rand2');
		$count = $session->get('count');
		
		
		$form = $this->createFormBuilder($obj)
		->add('type','choice',array(
				'choices' => array('1D' => '1D', '2D' => '2D', '3D' => '3D'),
				'required' => true,
				'expanded' => false,
					
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

		else{
			$session = $this->getRequest()->getSession();
			$this->get('session')->setFlash('request', 'Please give a username to login!');
			return $this->redirect($this->generateUrl('login'));
				
		}
	
		if($this->getRequest()->getMethod()=='POST'){
			$form->bindRequest($request);
				
			//play 2D guess number game
			if($obj->getType()=='1D'){
				
				$type = '1D';
				$uguess = $obj->getYourGuess();
				$obj->setScore($session->get('score'));
				
				
				if($randum < $uguess && $uguess != 0){
					$obj->setYourGuess('');
					$obj->setHint('Guess Lower');
					$session->set('score', $score -5);
					$obj->setScore($session->get('score'));
					$session->set('numofguess', $numofguess +1);
					
						
					
				}elseif ($randum > $uguess && $uguess != 0){
					$obj->setYourGuess('');
					$obj->setHint('Guess Higher');
					$session->set('score', $score -5);
					$obj->setScore($session->get('score'));
					$session->set('numofguess', $numofguess +1);
						
					
						
				}else{
					if($randum == $uguess && $uguess != 0){
						$this->rando();
						return $this->render('GameGuessNumberBundle::test.html.php', array(
								'number' => $uguess, 'name' => $user, 'score' => $score, 'numguess' => $numofguess, 'gtype' => $type ));
					}
				}
	
				$form = $this->createFormBuilder($obj)
				->add('type','hidden',array(
						'data'=>$obj->getType(),
				)
				)
				->add('your_guess','text', array('label' => '1. Guess:1-100'))
				->add('hint','text', array('read_only' => true))
				->add('score','text', array('read_only' => true))
				->getForm();
					
				}
				
				//play 2D guess number game
				if ($obj->getType() =='2D'){
			
						$type = '2D';
						$urguess = "$randum1,$randum2";
						$uguess = array('fg'=> $obj->getFirstGuess(), 'sg'=>$obj->getSecondGuess());
				
						
						if($randum1 == $uguess['fg'] && $randum2 == $uguess['sg'] && $uguess != 0){
							$this->rando();
							return $this->render('GameGuessNumberBundle::test.html.php', array(
							'number' => $urguess, 'name' => $user, 'score' => $score, 'numguess' => $numofguess, 'gtype' => $type ));
					
						}
				
						elseif($randum1 != $uguess['fg'] && $randum2 != $uguess['sg'] && $uguess != 0){
				
								if($randum1 > $uguess['fg'] && $randum2 > $uguess['sg']){
										$obj->setFirstGuess('');
										$obj->setSecondGuess('');
										$obj->setHint('Your guess is down Left');
						
										$session->set('score', $score -3);
										$obj->setScore($session->get('score'));
										$session->set('numofguess', $numofguess +1);
										if($session->get('count')==0){
											$session->set('count', 1);
											$session->set('score', $session->get('score') + 3);
											$obj->setScore($session->get('score'));
											$obj->setHint('');
												
										}
											
										
								}
						
								if($randum1 > $uguess['fg'] && $randum2 < $uguess['sg']){
										$obj->setFirstGuess('');
										$obj->setSecondGuess('');
										$obj->setHint('Your guess is top Left');
						
										$session->set('score', $score -3);
										$obj->setScore($session->get('score'));
										$session->set('numofguess', $numofguess +1);
								}
						
								if($randum1 < $uguess['fg'] && $randum2 < $uguess['sg']){
										$obj->setFirstGuess('');
										$obj->setSecondGuess('');
										$obj->setHint('Your guess is top Right');
						
										$session->set('score', $score -3);
										$obj->setScore($session->get('score'));
										$session->set('numofguess', $numofguess +1);
								}
						
								if($randum1 < $uguess['fg'] && $randum2 > $uguess['sg']){
										$obj->setFirstGuess('');
										$obj->setSecondGuess('');
										$obj->setHint('Your guess is down Right');
						
										$session->set('score', $score -3);
										$obj->setScore($session->get('score'));
										$session->set('numofguess', $numofguess +1);
								}
					
						}
				
				
						elseif($randum1 != $uguess['fg'] && $uguess != 0){
							
								if($randum1 > $uguess['fg']){
									$obj->setHint('(1.Guess) too much Low');
									$obj->setFirstGuess('');
							
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
						
								}
								elseif($randum1 < $uguess['fg']){
									$obj->setHint('(1.Guess) too much High');
									$obj->setFirstGuess('');
				
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
							
								}
						}	
				 		
						elseif($randum2 != $uguess['sg'] && $uguess != 0){
						
								if($randum2 > $uguess['sg']){
									$obj->setHint('(2.Guess) too much Low');
									$obj->setSecondGuess('');
							
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
								}
								elseif($randum2 < $uguess['sg']){
									$obj->setHint('(2.Guess) too much High');
									$obj->setSecondGuess('');
							
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
								}
						}
					
				
				//add the objects to the form
				$form = $this->createFormBuilder($obj)
				->add('type','hidden',array(
						'data'=>$obj->getType(),
				)
				)
				->add('first_guess', 'text', array('label' => '1. Guess:1-100'))
				->add('second_guess', 'text', array('label' => '2. Guess:1-100'))
				->add('hint','text', array('read_only' => true))
				->add('score','text', array('read_only' => true))
				->getForm();
			}
			
			
					//play 3D guess number game
					if($obj->getType() =='3D'){
				
				
						$type = '3D';
						$urguess = "$randum,$randum1,$randum2";
						$arr = array('fg'=> $obj->getFirstGuess(), 'sg'=>$obj->getSecondGuess(), 'tg'=>$obj->getThirdGuess());
				 

						if($randum == $arr['fg'] && $randum1 == $arr['sg'] && $randum2 == $arr['tg'] && $arr != 0){
				
									$this->rando();
									return $this->render('GameGuessNumberBundle::test.html.php', array(
									'number' => $urguess, 'name' => $user, 'score' => $score, 'numguess' => $numofguess, 'gtype' => $type ));
								
						}
					
						elseif($randum != $arr['fg'] && $randum1 != $arr['sg'] && $randum2 != $arr['tg'] && $arr != 0){
				
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
					
									$sum = ($randum + 20) * 13;
									$obj->setGuessNumber('(X + 20) * 13 = '.$sum);
					
					
									if($randum > $randum1 && $randum1 > $randum2)
											$obj->setHint('X > Y > Z');
									elseif($randum > $randum1 && $randum1 < $randum2)
											$obj->setHint('X > Y < Z');
									elseif($randum < $randum1 && $randum1 > $randum2)
											$obj->setHint('X < Y > Z');
									elseif($randum < $randum1 && $randum1 > $randum2)
											$obj->setHint('X < Y < Z');
					
					
									$obj->setFirstGuess('');
									$obj->setSecondGuess('');
									$obj->setThirdGuess('');
									
									if($session->get('count')==0){
										$session->set('count', 1);
										$session->set('score', $session->get('score') + 3);
										$obj->setScore($session->get('score'));
										$obj->setHint('');
										$obj->setGuessNumber('');
									
									}
									
						}
						
						
						elseif($randum == $arr['fg'] && $randum1 != $arr['sg'] && $randum2 != $arr['tg'] && $arr != 0){
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
				
									if($randum1 > $arr['sg']){
											$obj->setGuessNumber('(2.Guess) too much Low');
											$obj->setSecondGuess('');
						
									}
									elseif($randum1 < $arr['sg']){
											$obj->setGuessNumber('(2.Guess) too much High');
											$obj->setSecondGuess('');
					
									}
									if($randum2 > $arr['tg']){
											$obj->setHint('(3.Guess) too much Low');
											$obj->setThirdGuess('');
					
									}
									elseif($randum2 < $arr['tg']){
											$obj->setHint('(3.Guess) too much High');
											$obj->setThirdGuess('');
							
									}
					
					
						}
				
						elseif($randum != $arr['fg'] && $randum1 == $arr['sg'] && $randum2 != $arr['tg'] && $arr != 0){
									$session->set('score', $score -3);
									$obj->setScore($session->get('score'));
									$session->set('numofguess', $numofguess +1);
				
									if($randum > $arr['fg']){
										$obj->setGuessNumber('(1.Guess) too much Low');
										$obj->setFirstGuess('');
				
									}
									elseif($randum < $arr['fg']){
										$obj->setGuessNumber('(1.Guess) too much High');
										$obj->setFirstGuess('');
							
									}
									if($randum2 > $arr['tg']){
										$obj->setHint('(3.Guess) too much Low');
										$obj->setThirdGuess('');
							
									}
									elseif($randum2 < $arr['tg']){
										$obj->setHint('(3.Guess) too much High');
										$obj->setThirdGuess('');
							
									}
						
						
						}
				
						elseif($randum != $arr['fg'] && $randum1 != $arr['sg'] && $randum2 == $arr['tg'] && $arr != 0){
				
								$session->set('score', $score -3);
								$obj->setScore($session->get('score'));
								$session->set('numofguess', $numofguess +1);
				
								if($randum > $arr['fg']){
									$obj->setGuessNumber('(1.Guess) too much Low');
									$obj->setFirstGuess('');
				
								}
								elseif($randum < $arr['fg']){
									$obj->setGuessNumber('(1.Guess) too much High');
									$obj->setFirstGuess('');
							
								}
								if($randum1 > $arr['sg']){
									$obj->setHint('(2.Guess) too much Low');
									$obj->setSecondGuess('');
						
								}
								elseif($randum1 < $arr['sg']){
									$obj->setHint('(2.Guess) too much High');
									$obj->setSecondGuess('');
					
								}
						
						
						}
				
						elseif($randum == $arr['fg'] && $randum1 == $arr['sg'] && $randum2 != $arr['tg'] && $arr != 0){
					
								$session->set('score', $score -3);
								$obj->setScore($session->get('score'));
								$session->set('numofguess', $numofguess +1);
					
								if($randum2 > $arr['tg']){
									$obj->setHint('(3.Guess) too much Low');
									$obj->setThirdGuess('');
							
								}
								elseif($randum2 < $arr['tg']){
									$obj->setHint('(3.Guess) too much High');
									$obj->setThirdGuess('');
							
								}
			
						}
				
						elseif($randum == $arr['fg'] && $randum1 != $arr['sg'] && $randum2 == $arr['tg'] && $arr != 0){
					
								$session->set('score', $score -3);
								$obj->setScore($session->get('score'));
								$session->set('numofguess', $numofguess +1);

								if($randum1 > $arr['sg']){
									$obj->setHint('(2.Guess) too much Low');
									$obj->setSecondGuess('');
				
								}
								elseif($randum1 < $arr['sg']){
									$obj->setHint('(2.Guess) too much High');
									$obj->setSecondGuess('');
							
								}
				
						}
				
						elseif($randum != $arr['fg'] && $randum1 == $arr['sg'] && $randum2 == $arr['tg'] && $arr != 0){
					
								$session->set('score', $score -3);
								$obj->setScore($session->get('score'));
								$session->set('numofguess', $numofguess +1);
					
								if($randum > $arr['fg']){
									$obj->setGuessNumber('(1.Guess) too much Low');
									$obj->setFirstGuess('');
				
								}
								elseif($randum < $arr['fg']){
									$obj->setGuessNumber('(1.Guess) too much High');
									$obj->setFirstGuess('');
							
								}
				
						}
				
				
				$form = $this->createFormBuilder($obj)
				->add('type','hidden',array(
						'data'=>$obj->getType(),
				)
				)
				->add('first_guess', 'text', array('label' => '1. Guess:1-100'))
				->add('second_guess', 'text', array('label' => '2. Guess:1-100'))
				->add('third_guess', 'text', array('label' => '3. Guess:1-100'))
				->add('guess_number', 'text',array('read_only' => true, 'label' => 'Hint'))
				->add('hint','text', array('read_only' => true))
				->add('score','text', array('read_only' => true))
				->getForm();
			}
			
			
			return $this->render('GameGuessNumberBundle:GameViews:frmView.html.php', array('form' => $form->createView()));
				
		}
		return $this->render('GameGuessNumberBundle:GameViews:index.html.php', array('form' => $form->createView()));
	}
	
	public function rando(){
		
		$session = $this->getRequest()->getSession();
		
		$a = rand(1,20);
		$b = rand(1,100);
		$c = rand(1,100);
		
		$session->set('rand', $a);
		$session->set('rand1', $b);
		$session->set('rand2', $c);
		$session->set('score', 100);
		$session->set('numofguess', 0);
		$session->set('count', 0);
	}
	
	public function helpAction(){
		return $this->render('GameGuessNumberBundle::help.html.php');
	
	}
	
	public function logOutAction() {
		$session = $this->getRequest()->getSession();
		$session->clear();
		return $this->redirect($this->generateUrl('login'));
	}

}
