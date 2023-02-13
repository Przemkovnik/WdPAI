<?php

class Personnel
{
    private $title;
    private $description;
    private $specialisation;
    private $image;

    public function __construct($title, $description, $specialisation, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->specialisation = $specialisation;
        $this->image = $image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getSpecialisation(): string
    {
        return $this->specialisation;
    }

    public function setSpecialisation(string $description)
    {
        $this->description = $specialisation;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }
}