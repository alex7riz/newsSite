<?php

namespace Model\Entity;

class Answer_comment{
    private $id;
    private $user_name;
    private $comment_id;
    private $comments;
    private $likes;
    private $status;
    private $created;

    public function __construct($id, $user_name, $comment_id, $comments)
    {
        $this->id = $id;
        $this->user_name = $user_name;
        $this->comment_id = $comment_id;
        $this->comments = $comments;
        $this->likes=0;
        $this->status=0;
        $this->created=new \DateTime();

    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
        return $this;
    }

	    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
        return $this;
    }
	
    public function getCommentId()
    {
        return $this->comment_id;
    }
	
    public function setCommentId($comment_id)
    {
        $this->comment_id = $comment_id;
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
	
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
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

    public function getComments()
    {
        return $this->comments;
    }
	
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

}
