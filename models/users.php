<?php
class Users {
    protected $id;
    protected $roles_id;
    protected $name;
	protected $surname;
    protected $fathername;
	protected $telephone;
	protected $password;

    public function __construct($id, $roles_id, $name, $surname, $fathername, $telephone, $password) {
		$this->id = $id;
		$this->roles_id = $roles_id;
        $this->name = $name;
        $this->surname = $surname;
        $this->fathername = $fathername;
		$this->telephone = $telephone;
		$this->password = $password;
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getRole_id(){
		return $this->roles_id;
	}

	public function setRole_id($roles_id){
		$this->roles_id = $roles_id;
	}

	public function getName(){
		return $this ->name;
	}
	
	public function setName($name){
		$this->name = $name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getFathername(){
		return $this->fathername;
	}

	public function setFathername($fathername){
		$this->fathername = $fathername;
	}

	public function getTelephone(){
		return $this->telephone;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

}