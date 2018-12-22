<?php

namespace PhpBenchmarksRestData;

class Comment
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $message;

    /** @var CommentType */
    protected $type;

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
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /** @return string */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param CommentType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /** @return CommentType */
    public function getType()
    {
        return $this->type;
    }
}
