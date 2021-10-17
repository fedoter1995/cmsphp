<?php


namespace Admin\Model\Post;


use Engine\Core\Database\ActiveRecord;

class Post
{
    use ActiveRecord;


    /**
     * var [str]
     */
    protected $table = 'post';


    /**
     * [$id Post ID]
     *
     */
    public $id;

    /**
     * [$email Post title]
     *
     */
    public $title;
    /**
     * [$password Post content]
     *
     */
    public $content;
    /**
     * [$date_reg Post]
     *
     */
    public $date_reg;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get [$email Page title]
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set [$email Page title]
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of conent
     */
    public function getContent()
    {
        return $this->conent;
    }

    /**
     * Set the value of conent
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of date_reg
     */
    public function getDateReg()
    {
        return $this->date_reg;
    }

    /**
     * Set the value of date_reg
     */
    public function setDateReg($date_reg): self
    {
        $this->date_reg = $date_reg;

        return $this;
    }
}