<?php 

namespace  Game\GuessNumberBundle\Entity;

class Game
{
    protected $your_guess, $guess_number, $hint, $score, $type, $first_guess, $second_guess, $third_guess;
   	protected $username;
	
   	public function getUsername(){
   		return $this->username;
   	}
   	
   	public function setUsername($uname){
   		$this->username = $uname;
   	}
   	
    public function getYourGuess()
    {
        return $this->your_guess;
    }
    public function setYourGuess($your_guess)
    {
        $this->your_guess = $your_guess;
    }
    public function getGuessNumber()
    {
    	return $this->guess_number;
    }
    public function setGuessNumber($guess)
    {
    	$this->guess_number = $guess;
    }
    
    public function getHint()
    {
    	return $this->hint;
    }
    public function setHint($hint)
    {
    	$this->hint  = $hint;
    }
    
    public function getScore()
    {
        return $this->score;
    }
    public function setScore($score)
    {
        $this->score = $score; 
    }
    
    public function getFirstGuess(){
    	return $this->first_guess;
    }
    
    public function setFirstGuess($fguess){
		$this->first_guess=$fguess;
    }
    
    public function getSecondGuess(){
    	return $this->second_guess;
    }
    
    public function setSecondGuess($sguess){
    	$this->second_guess=$sguess;
    }
    
    public function getThirdGuess(){
    	return $this->third_guess;
    }
    
    public function setThirdGuess($thguess){
    	$this->third_guess=$thguess;
    }
    
    public function getType()
    {
    	return $this->type;
    }
    
    public function setType($type)
    {
    	$this->type = $type;
    }
    
}
  