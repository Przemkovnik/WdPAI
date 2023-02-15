<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Contact.php';

class ContactRepository extends Repository {

    public function addContact(Contact $contact)
    {
        $date = new DateTime();
        
        $stmt = $this->database->connect()->prepare('
            INSERT INTO "SUPERB_MED".enquiries (contact_legal_name, contact_phone, contact_email, contact_topic, contact_message, contact_created_at)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $contact->getContactLegalName(),
            $contact->getContactPhone(),
            $contact->getContactEmail(),
            $contact->getContactTopic(),
            $contact->getContactMessage(),
            $date->format('Y-m-d')
        ]);
    }
}