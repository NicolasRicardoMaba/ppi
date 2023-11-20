<?php

    class ClientController{
        private $message;
        public function __construct(){
            $this ->pessoaDAO = new PessoaDAO();
        }
        public function list_users() {
                return ($users -> pessoaDAO -> list_users());
        } 
        public function  insert_users(Client $client) {
            try {
                $pessoaDAO -> insert_users($client);
                return $message="usuario Inserido Com Sucesso!";
            } catch (Exception $e) {
                return $message="falha ao cadastrar usuario!";
            }

        } 
        public function  update_user(Client $client) {
            try {
                $pessoaDAO -> update_user($client);
                return $message="Dados alterados Com Sucesso!";
            } catch (Exception $e) {
                return $message="falha ao alterar dados do usuario!";
            }
        }
            public function delete_user(Integer $id) {
                try {
                    $pessoaDAO -> delete_user($id);
                    return $message="Usuario Apagado Com Sucesso!";
                } catch (Exception $e) {
                    return $message="Falha ao Apagar Usuario!";
                }   
    }
    public function login(String $email, String $password) {

            return $pessoaDAO -> login($email, $password);

        }
        
  
        public function logout() {

            return $pessoaDAO -> logout();

        }
    
  
  
    }
?>