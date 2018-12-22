<?php

namespace PhpBenchmarksRestData;

class User
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $login;

    /** @var \DateTime */
    protected $createdAt;

    /** @var Comment[] */
    protected $comments = [];

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /** @return int */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /** @return string */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param \DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /** @return \DateTime */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /** @return Comment[] */
    public function getComments()
    {
        return $this->comments;
    }
}
