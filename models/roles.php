<?php
class roles {
    protected $id;
    protected $post;
	

    public function __construct($id, $post) {
		$this->id = $id;
		$this->post = $post;
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPost(){
		return $this->post;
	}

	public function setPost($post){
		$this->post = $post;
	}

	
}