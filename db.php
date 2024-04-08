<?php
require_once("models\users.php");
require_once("models\books.php");


class db {
    protected $pdo_instance = null;

    protected $host = "web.edu";
    protected $user = "20293";
    protected $password = "mmzjah";
    protected $db = "20293_biblioteka1";
    
    public function connect() {
        if($this->pdo_instance==null)
            $this->pdo_instance = new PDO('mysql:host='.$this->host. ';dbname='.$this->db.";charset=utf8",$this->user,$this->password);
    }
    
    public function all($query){
        if($this->pdo_instance != null)
            return $this->pdo_instance->query($query);
        else
            throw new Exception("Not connected to the database");
    }

    public function insertCustomer(users $users) {
        if($this->pdo_instance != null)
            return $this->pdo_instance->query('INSERT INTO `users` (`id`, `roles_id`, `name`, `surname`, `fathername`, `telephone`, `password`) 
            VALUES (NULL, "1", "'.$users->getName().'", "'.$users->getSurname().'", "'.$users->getFathername().'", "'.$users->getTelephone().'", "'.$users->getPassword().'")');
        else
            throw new Exception("Not connected to the database");
    }
    public function loginCustomer($telephone, $password) {
        if($this->pdo_instance != null)
            return $this->pdo_instance->query('SELECT * FROM `users` WHERE `telephone`="'.$telephone.'" AND `password`="'.$password.'"');
        else
            throw new Exception("Not connected to the database");
    }
    public function selectAllProduct()
    {
        if($this->pdo_instance != null)
        return $this->pdo_instance->query('SELECT * FROM `books` ');
    else 
        throw new Exception("Not connected to the database");
    }
    public function selectProduct($id)
    {
        if($this->pdo_instance != null)
        return $this->pdo_instance->query('SELECT `books`.`name`, `describe`,`price`,`img`,`users_id`,`bibliya_id`.`name` as typ, `opis`, `shops_id` FROM `books` inner join `type` on `type`.`id` = `books`.`type_id` WHERE `books`.`id`='.$id);
    else 
        throw new Exception("Not connected to the database");
    }
    public function searchProduct($pop, $typ)
    {
        
        if($this->pdo_instance != null)
       
       return $this->pdo_instance->query("SELECT * FROM `books` WHERE `name` LIKE '%$pop%'OR `describe`LIKE '%$pop%' AND `price`='".$typ."' ");
    else 
        throw new Exception("Not connected to the database");
    }
    public function searchPop($pop)
    {
        
        if($this->pdo_instance != null)
       
       return $this->pdo_instance->query("SELECT * FROM `books` WHERE `name` LIKE '%$pop%'OR `describe`LIKE '%$pop%'");
    else 
        throw new Exception("Not connected to the database");
    }
    public function searchTyp($typ)
    {
        
        if($this->pdo_instance != null)
       
       return $this->pdo_instance->query("SELECT * FROM `books` WHERE `price`='".$typ."' ");
    else 
        throw new Exception("Not connected to the database");
    }
    public function searchEmployee($anything)
    {
        if($this->pdo_instance != null)
        {
            if(is_numeric($anything)) 
            {
                return $this->pdo_instance->query('SELECT * FROM `users` WHERE `id`='.$anything);
            }
            else
            {
                return $this->pdo_instance->query('SELECT * FROM `users` WHERE `surname`="'.$anything.'" OR `telephone`="'.$anything.'"');
            }
        }
    else 
        throw new Exception("Not connected to the database");
    } 
    public function selectEmployee($id)
    {
        if($this->pdo_instance != null)
        return $this->pdo_instance->query('SELECT * FROM `users` WHERE `id`='.$id);
    else 
        throw new Exception("Not connected to the database");
    } 
    public function deleteEmployee($id) {
        if($this->pdo_instance != null)
        {
            $sql = 'DELETE FROM `users` WHERE `id`='.$id;
            $stmt = $this->pdo_instance->prepare($sql);
            return $stmt->execute();
        }
        else
            throw new Exception("Not connected to the database");
    }
    public function insertUser(Users $employee) {
        if($this->pdo_instance != null)
            return $this->pdo_instance->query('INSERT INTO `users` (`id`, `roles_id`, `name`, `surname`, `fathername`, `telephone`, `password`) 
            VALUES (NULL, "'.$employee->getRole_id().'", "'.$employee->getName().'", "'.$employee->getSurname().'", "'.$employee->getFathername().'", "'.$employee->getTelephone().'", "'.$employee->getPassword().'")');
        else
            throw new Exception("Not connected to the database");
    }
    public function updateEmployee(Users $employee) {
        if($this->pdo_instance != null)
            return $this->pdo_instance->query('UPDATE `users` SET `roles_id` = "'.$employee->getRole_id().'", `name` = "'.$employee->getName().'", `surname` = "'.$employee->getSurname().'", `fathername` = "'.$employee->getFathername().'", `telephone` = "'.$employee->getTelephone().'", `password` = "'.$employee->getPassword().'" WHERE `id`="'.$employee->getId().'"');
        else 
            throw new Exception("Not connected to the database");
    }
    public function selectAllUsers()
    {
        if($this->pdo_instance != null)
        return $this->pdo_instance->query('SELECT * FROM `users`');
    else 
        throw new Exception("Not connected to the database");
    }
    public function deleteZakaz($id) {
        if($this->pdo_instance != null)
        {
            $sql = 'DELETE FROM `books` WHERE `users_id`='.$id;
            $stmt = $this->pdo_instance->prepare($sql);
            return $stmt->execute();
        }
        else
            throw new Exception("Not connected to the database");
    }
    public function deleteProduct($id) {
        if($this->pdo_instance != null)
        {
            $sql = 'DELETE FROM `books` WHERE `id`='.$id;
            $stmt = $this->pdo_instance->prepare($sql);
            return $stmt->execute();
        }
        else
            throw new Exception("Not connected to the database");
    }
    public function insertProduct($name, $describe, $price, $img) {
        if ($this->pdo_instance != null) {
            $sql = 'INSERT INTO `books` (`id`, `name`,`describe`, `price`, `img`, `users_id`,`bibliya_id`) 
                    VALUES (NULL, :name, :describe, :price, :img, 6, 1)';
            $stmt = $this->pdo_instance->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':describe', $describe, PDO::PARAM_STR);
            $stmt->bindParam(':price', $price, PDO::PARAM_STR);
            $stmt->bindParam(':img', $img, PDO::PARAM_STR);
            return $stmt->execute();
        } else {
            throw new Exception("Not connected to the database");
        }
    }

}