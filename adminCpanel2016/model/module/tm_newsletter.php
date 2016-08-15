<?php
class ModelModuleTMNewsletter extends Model
{
    public function addNewsletter($data){
        $this->db->query("INSERT INTO " . DB_PREFIX . "tm_newsletter SET tm_newsletter_email = '" . $data ."'");
    }

    public function deleteNewsletter($data){
        $this->db->query("DELETE FROM `" . DB_PREFIX . "tm_newsletter` WHERE tm_newsletter_email = '" . $data . "'");
    }

    public function getNewsletters(){
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "tm_newsletter");
            return $query->rows;
    }

    public function getNewsletterByEmail($email) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "tm_newsletter WHERE tm_newsletter_email = '" . $email . "'");

        return $query->row;
    }

}