<?php
namespace Model\Entity;
class Nature{
    private $id;
    private $name;
    private $content;
    private $created;
private $picture;
private $tag;
    private $visit;

    public function __construct($id, $name, $content, $created, $picture, $tag, $visit)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
        $this->created = $created;
        $this->picture=$picture;
        $this->tag=$tag;
        $this->visit=$visit;
    }

    public function getVisit()
    {
        return $this->visit;
    }

    public function setVisit($visit)
    {
        $this->visit = $visit;
        return $this;
    }

    public function getId()
    {
        return $this->id;

    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    public function getTag()
    {
        return $this->tag;
    }
	
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

}