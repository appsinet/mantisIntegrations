<?php

namespace MantisIntegrations\Model;

class AccountData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $real_name
     * @access public
     */
    public $real_name = null;

    /**
     * @var string $email
     * @access public
     */
    public $email = null;

    /**
     * @param int    $id
     * @param string $name
     * @param string $real_name
     * @param string $email
     * @access public
     */
    public function __construct($id, $name, $real_name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->real_name = $real_name;
        $this->email = $email;
    }
}
