<?php

/**
 * Created by PhpStorm.
 * User: mmalv
 * Date: 7/23/2016
 * Time: 10:35 AM
 */

class Account{
	/**
	 * id for this Account; this is the primary key
	 * @var int $accountId
	 **/
	private $accountId;
	/**
	 * email address for this Account
	 * @var string $accountEmail
	 **/
	private $accountEmail;
	/**
	 * the hash for this Account
	 * @var int $accountHash
	 **/
	private $accountHash;
	/**
	 * the salt for this Account
	 * @var int $accountSalt
	 **/
	private $accountSalt;
	/**
	 * the username for this Account
	 * @var string $accountUsername
	 **/
	private $accountUsername;

	/**
	 *constructor for this Account
	 * @param int|null $newAccountId id of this Account or null if a new Account
	 * @param string $newAccountEmail string containing email address for this Account
	 * @param string $newAccountUsername string containing username for this Account
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __construct(int $newAccountId = null, string $newAccountEmail, string $newAccountUsername) {
		try {
			$this->setAccountId($newAccountId);
			$this->setAccountEmail($newAccountEmail);
			$this->setAccountUsername($newAccountUsername);
		} catch(\InvalidArgumentException $invalidArgument) {

			//rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range){
			//rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(),0,$range));
		}catch(\Exception $exception){
			//rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(),0,$exception));
		}
	}

	/**
	 * accessor method for account id
	 *
	 * @return int|null value of account id
	 **/
	public function getAccountId() {
		return ($this->accountId);
	}

	/**
	 * mutator method for account id
	 *
	 * @param int|null $newAccountId new value of account id
	 * @throws \RangeException if $newAccountId is not positive
	 * @throws \TypeError if $newAccountId is not an integer
	 **/
	public function setAccountId(int $newAccountId = null) { //if id is null, it goes through first if statement and comes out as null? does it go through MySQL auto_increment and then get sent back through this method to check that it is positive and to store the id?
		//base case: if the account id is null, this is a new account without a mySQL assigned id(yet)
		if($newAccountId === null) {
			$this->accountId = null;
			return;
		}
		//verify the account id is positive
		if($newAccountId <= 0) {
			throw(new \RangeException("account id is not positive"));
		}
		//verify the account id is positive
		if($newAccountId <= 0) {
			throw(new \RangeException("account id is not positive"));
		}
		//convert and store the account id
		$this->accountId = $newAccountId;
	}

/**
 * accessor method for accountEmail
 * @return string value of accountEmail
 **/
public function getAccountEmail() {
	return ($this->accountEmail);
}

/**
 * mutator method for accountEmail
 * @param string $newAccountEmail new value of account Email
 * @throws /InvalidArgumentException if $newAccountEmail is not a string
 * @throws /RangeException if $newAccountEmail is > 120 characters
 * @throws /TypeError if $newAccountEmail is not a string (is invalid argument exception and type error the same in this case???)
 **/
public function setAccountEmail(string $newAccountEmail) {
	//verify that the account email entered is secure
	$newAccountEmail = trim($newAccountEmail);
	$newAccountEmail = filter_var($newAccountEmail, FILTER_SANITIZE_STRING);
	if(empty($newAccountEmail) === true) {
		throw(new \InvalidArgumentException ("account email is empty or insecure"));
	}
	//verify the account email will fit in the database
	if(strlen($newAccountEmail) > 120) {
		throw(new \RangeException ("account email has too many characters"));
	}
		//store the email content
		$this->accountEmail = $newAccountEmail;
		}//probably more exceptions for ensuring it's an actual email address like @foo.com or something

	/**
	 *accessor method for account Username
	 * @return string value of account Username
	 **/
	public
	function getAccountUsername() {
		return ($this->accountUsername);
	}

	/**
	 * mutator method for account Username
	 * @param string $newAccountUsername new value of account username
	 * @throws \InvalidArgumentException if $newAccountUsername is not a string or insecure
	 * @throws \RangeException if $newAccountUsername > 32 characters
	 * @throws \TypeError if $newAccountUsername is not a string
	 **/
	public function setAccountUsername(string $newAccountUsername) {
		//verify new username is a string and secure
		$newAccountUsername = trim($newAccountUsername);
		$newAccountUsername = filter_var($newAccountUsername, FILTER_SANITIZE_STRING);
		if(empty($newAccountUsername) === true) {
			throw(new \InvalidArgumentException("tweet content empty or insecure"));
		}
		if(strlen($newAccountUsername) > 32) {
			throw(new \RangeException("account username is more than 32 characters"));
		}
		//store the account username
		$this->accountUsername = $newAccountUsername;
	}
}
