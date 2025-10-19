<?php
    require_once 'dao/ContactDAO.php';
    require_once 'model/Contact.php';

   class HomeController { 
    public function getContacts(){
        $contactDAO = new ContactDAO();
        return $contactDAO->getContacts();
    }
}
?>