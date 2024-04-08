<?php
class biblia {
    protected $id;
    protected $name;
    protected $telephone;
    protected $adress;
	

    public function __construct($id, $name, $telephone, $adress) {
		$this->id = $id;
		$this->name = $name;
        $this->telephone = $telephone;
        $this->adress = $adress;
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
    public function getTelephone(){
		return $this->telephone;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}
    public function getAdress(){
		return $this->adress;
	}

	public function setAdress($adress){
		$this->adress = $adress;
	}

	
}