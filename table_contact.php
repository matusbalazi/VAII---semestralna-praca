<?php

    class TableContact
    {
        private int $id;
        private string $name;
        private string $surname;
        private string $subject;
        private string $email;
        private string $message;

        public function __construct($pId, $pName, $pSurname, $pSubject, $pEmail, $pMessage)
        {
            $this->id = $pId;
            $this->name = $pName;
            $this->surname = $pSurname;
            $this->subject = $pSubject;
            $this->email = $pEmail;
            $this->message = $pMessage;
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

        public function getSubject()
        {
            return $this->subject;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getMessage()
        {
            return $this->message;
        }

        public static function insert(TableContact $pContact, $pDatabase)
        {
            $pDatabase->getConnection()->query("INSERT INTO `tab_contact_form` (name, surname, subject, email, message) 
                                                VALUES('{$pContact->getName()}', '{$pContact->getSurname()}', 
                                                '{$pContact->getSubject()}', '{$pContact->getEmail()}',
                                                '{$pContact->getMessage()}')") or die($pDatabase->getConnection()->error);
        }

        public static function delete($pId, $pDatabase)
        {
            $pDatabase->getConnection()->query("DELETE FROM `tab_contact_form` WHERE id = {$pId}");
        }

        public static function update(TableContact $pContact, $pDatabase)
        {
            $pDatabase->getConnection()->query("UPDATE `tab_contact_form` SET `name` = '{$pContact->getName()}', 
                                                `surname` = '{$pContact->getSurname()}', 
                                                `subject` = '{$pContact->getSubject()}', 
                                                `email` = '{$pContact->getEmail()}', 
                                                `message` = '{$pContact->getMessage()}'
                                                WHERE `id` =  '{$pContact->getId()}'") 
                                                or die($pDatabase->getConnection()->error);
        }

    }

?>