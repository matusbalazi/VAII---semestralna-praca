<?php

    class TableRegister
    {
        private int $id;
        private string $name;
        private string $surname;
        private string $email;
        private string $nickname;
        private string $password;
        private int $is_admin;

        public function __construct($pId, $pName, $pSurname, $pEmail, $pNickname, $pPassword, $pIsAdmin)
        {
            $this->id = $pId;
            $this->name = $pName;
            $this->surname = $pSurname;
            $this->email = $pEmail;
            $this->nickname = $pNickname;
            $this->password = $pPassword;
            $this->is_admin = $pIsAdmin;
            echo "Succesfully created!";
        }

        public function getId()
        {   
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getSurname()
        {
            return $this->surname;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getNickname()
        {
            return $this->nickname;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getIsAdmin()
        {
            return $this->is_admin;
        }

        public static function insert(TableRegister $pRegister, $pDatabase)
        {
            $hashedPassword = password_hash($pRegister->getPassword(), PASSWORD_BCRYPT);
            $pDatabase->getConnection()->query("INSERT INTO `tab_registered_users` (name, surname, email, nickname, password, is_admin) 
                                                VALUES('{$pRegister->getName()}', '{$pRegister->getSurname()}', 
                                                '{$pRegister->getEmail()}', '{$pRegister->getNickname()}',
                                                '{$hashedPassword}', '{$pRegister->getIsAdmin()}')") 
                                                or die($pDatabase->getConnection()->error);
        }
    }
?>