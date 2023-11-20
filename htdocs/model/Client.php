<?php

 Class Client{

 private $id;
 private $name;
 private $password;
 private $email;


 public function getId() {
    return $this->id;
}


public function getName() {
    return $this->name;
}

public function getPassword() {
    return $this->password;
}

public function getEmail() {
    return $this->email;
}
}

?>