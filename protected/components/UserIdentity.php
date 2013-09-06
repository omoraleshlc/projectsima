<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	 // Need to store the user's ID:
	 private $_folio;
         public $usuario;
         public $passwd;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            
		//$user = Usuarios::model()->findByAttributes(array('usuario'=>$this->usuario));
                $user = Usuarios::model()->findByAttributes(array('usuario'=>$this->username));
                //echo trim($user->usuario).' -> '.trim($this->username);
                
                //echo $this->password;
		if ($user===null) { // No user found!
                    
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else if (trim($user->passwd) !== md5($this->password) ) { // Invalid password!
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                        //echo $user->passwd.' --- ' .md5($this->password);
		} else { // Okay!
		    $this->errorCode=self::ERROR_NONE;
		    // Store the role in a session:
		        //$this->setState('role', $user->role);
			$this->_folio = $user->folio;
		}
		return !$this->errorCode;
                
	}
	
	public function folio()
	{
	 return $this->_folio;
	}

	
}