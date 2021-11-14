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
            echo "Sended";
        }
    }

?>