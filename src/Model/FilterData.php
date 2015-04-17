<?php

namespace MantisIntegrations\Model;

class FilterData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var AccountData $owner
     * @access public
     */
    public $owner = null;

    /**
     * @var int $project_id
     * @access public
     */
    public $project_id = null;

    /**
     * @var boolean $is_public
     * @access public
     */
    public $is_public = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $filter_string
     * @access public
     */
    public $filter_string = null;

    /**
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @param int         $id
     * @param AccountData $owner
     * @param int         $project_id
     * @param boolean     $is_public
     * @param string      $name
     * @param string      $filter_string
     * @param string      $url
     * @access public
     */
    public function __construct($id, $owner, $project_id, $is_public, $name, $filter_string, $url)
    {
        $this->id = $id;
        $this->owner = $owner;
        $this->project_id = $project_id;
        $this->is_public = $is_public;
        $this->name = $name;
        $this->filter_string = $filter_string;
        $this->url = $url;
    }
}
