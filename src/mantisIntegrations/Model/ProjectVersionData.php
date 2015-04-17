<?php

namespace MantisIntegrations\Model;

class ProjectVersionData
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
     * @var int $project_id
     * @access public
     */
    public $project_id = null;

    /**
     * @var dateTime $date_order
     * @access public
     */
    public $date_order = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var boolean $released
     * @access public
     */
    public $released = null;

    /**
     * @var boolean $obsolete
     * @access public
     */
    public $obsolete = null;

    /**
     * @param int      $id
     * @param string   $name
     * @param int      $project_id
     * @param dateTime $date_order
     * @param string   $description
     * @param boolean  $released
     * @param boolean  $obsolete
     * @access public
     */
    public function __construct($id, $name, $project_id, $date_order, $description, $released, $obsolete)
    {
        $this->id = $id;
        $this->name = $name;
        $this->project_id = $project_id;
        $this->date_order = $date_order;
        $this->description = $description;
        $this->released = $released;
        $this->obsolete = $obsolete;
    }
}
