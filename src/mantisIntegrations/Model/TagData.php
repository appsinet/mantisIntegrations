<?php

namespace MantisIntegrations\Model;

class TagData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var AccountData $user_id
     * @access public
     */
    public $user_id = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var dateTime $date_created
     * @access public
     */
    public $date_created = null;

    /**
     * @var dateTime $date_updated
     * @access public
     */
    public $date_updated = null;

    /**
     * @param int         $id
     * @param AccountData $user_id
     * @param string      $name
     * @param string      $description
     * @param dateTime    $date_created
     * @param dateTime    $date_updated
     * @access public
     */
    public function __construct($id, $user_id, $name, $description, $date_created, $date_updated)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->name = $name;
        $this->description = $description;
        $this->date_created = $date_created;
        $this->date_updated = $date_updated;
    }
}
