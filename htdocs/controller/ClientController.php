<?php
include_once "../model/ClientDAO.php";
    class ClientController{
        private $message;
        private $clientDAO;
        public function __construct(){
            $this->clientDAO = new ClientDAO();
        }
        public function list_users() {
            return $this->clientDAO->list_users();
        } 
        public function  insert_user(Client $client) {
            try {
                
                $this->clientDAO -> insert_user($client);
                return $message="usuario Inserido Com Sucesso!";
            } catch (Exception $e) {
                return $message="falha ao cadastrar usuario!";
            }

        } 
        public function  update_user(Client $client) {
            try {
                $this->clientDAO -> update_user($client);
                return $message="Dados alterados Com Sucesso!";
            } catch (Exception $e) {
                return $message="falha ao alterar dados do usuario!";
            }
        }
            public function delete_user($id) {
                try {
                $this->clientDAO -> delete_user($id);
                    return $message="Usuario Apagado Com Sucesso!";
                } catch (Exception $e) {
                    return $message="Falha ao Apagar Usuario!";
                }   
    }
    public function login(String $email, String $password) {

            return $this->clientDAO -> login($email, $password);

        }
        
  
        public function logout() {

            return $this->clientDAO -> logout();

        }
    
  
  
    }
?>