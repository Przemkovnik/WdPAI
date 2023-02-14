<?php

class Contact
{
    private $contact_legal_name;
    private $contact_phone;
    private $contact_email;
    private $contact_topic;
    private $contact_message;

    public function __construct(string $contact_legal_name, string $contact_phone, string $contact_email, string $contact_topic, string $contact_message)
    {
        $this->contact_legal_name = $contact_legal_name;
        $this->contact_phone = $contact_phone;
        $this->contact_email = $contact_email;
        $this->contact_topic = $contact_topic;
        $this->contact_message = $contact_message;
    }

    public function getContactLegalName(): string
    {
        return $this->contact_legal_name;
    }

    public function setContactLegalName(string $contact_legal_name)
    {
        $this->contact_legal_name = $contact_legal_name;
    }

    public function getContactPhone(): string
    {
        return $this->contact_phone;
    }

    public function setContactPhone(string $contact_phone)
    {
        $this->contact_phone = $contact_phone;
    }

    public function getContactEmail(): string
    {
        return $this->contact_email;
    }

    public function setContactEmail(string $contact_email)
    {
        $this->contact_email = $contact_email;
    }

    public function getContactTopic(): string
    {
        return $this->contact_topic;
    }

    public function setContactTopic(string $contact_topic)
    {
        $this->contact_topic = $contact_topic;
    }

    public function getContactMessage(): string
    {
        return $this->contact_message;
    }

    public function setContactMessage(string $contact_message)
    {
        $this->contact_message = $contact_message;
    }
}