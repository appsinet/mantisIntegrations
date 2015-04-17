<?php

namespace MantisIntegrations\Model;

class ProjectData
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
     * @var ObjectRef $status
     * @access public
     */
    public $status = null;

    /**
     * @var boolean $enabled
     * @access public
     */
    public $enabled = null;

    /**
     * @var ObjectRef $view_state
     * @access public
     */
    public $view_state = null;

    /**
     * @var ObjectRef $access_min
     * @access public
     */
    public $access_min = null;

    /**
     * @var string $file_path
     * @access public
     */
    public $file_path = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var ProjectDataArray $subprojects
     * @access public
     */
    public $subprojects = null;

    /**
     * @var boolean $inherit_global
     * @access public
     */
    public $inherit_global = null;

    /**
     * @param int              $id
     * @param string           $name
     * @param ObjectRef        $status
     * @param boolean          $enabled
     * @param ObjectRef        $view_state
     * @param ObjectRef        $access_min
     * @param string           $file_path
     * @param string           $description
     * @param ProjectDataArray $subprojects
     * @param boolean          $inherit_global
     * @access public
     */
    public function __construct($id, $name, $status, $enabled, $view_state, $access_min, $file_path, $description, $subprojects, $inherit_global)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->enabled = $enabled;
        $this->view_state = $view_state;
        $this->access_min = $access_min;
        $this->file_path = $file_path;
        $this->description = $description;
        $this->subprojects = $subprojects;
        $this->inherit_global = $inherit_global;
    }
}
