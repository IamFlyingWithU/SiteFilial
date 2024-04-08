<?php
class books {
    protected $id;
    protected $name;
    protected $describe;
    protected $price;
    protected $users_id;
    protected $bibliya_id;
	

    public function __construct($id, $name, $describe, $price, $users_id, $bibliya_id) {
		$this->id = $id;
		$this->name = $name;
        $this->describe = $describe;
        $this->price = $price;
        $this->users_id = $users_id;
        $this->bibliya_id = $bibliya_id;
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}
    public function getDescribe(){
		return $this->describe;
	}

	public function setDescribe($describe){
		$this->describe = $describe;
	}
    public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}
    public function getUsers_id(){
		return $this->users_id;
	}

	public function setUsers_id($users_id){
		$this->users_id = $users_id;
	}
    public function getBibliya_id(){
		return $this->bibliya_id;
	}

	public function setBibiya_id($bibliya_id){
		$this->bibliya_id = $bibliya_id;
	}

	
}