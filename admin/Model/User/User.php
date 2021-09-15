<?php


namespace Admin\Model\User;

class User
{
    /**
     *
     * @var [str]
     */
    protected $table = 'user';


    /**
     * [$id User ID]
     *
     */
    public $id;

    /**
     * [$email User Email]
     *
     */
    public $email;
    /**
     * [$password User Password]
     *
     */
    public $password;

    /**
     * [$role User Role]
     *
     */
    public $role;

    /**
     * [$hash User Hash]
     *
     */
    public $hash;

    
    /**
     * [$date_reg description]
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self
    {
        $this->role = $role;

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