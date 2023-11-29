<?php

 Class Client{


    // Construtor vazio
    public function ConstructorWithArgument0() {
    }
    public function ConstructorWithArgument3($name, $password, $email, $id = null) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->id = $id;
    }
    public function ConstructorWithArgument4($name, $password, $email, $id) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->id = $id;
    }
    public function __construct() {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
  
        if (method_exists($this, $function = 
                'ConstructorWithArgument'.$numberOfArguments)) {
            call_user_func_array(
                        array($this, $function), $arguments);
        }
    }
    
    

    private $id;
    private $name;
    private $password;
    private $email;

    // Métodos de acesso...

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