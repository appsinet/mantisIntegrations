<?php

namespace MantisIntegrations\Model;

class CustomFieldDefinitionData
{

    /**
     * @var ObjectRef $field
     * @access public
     */
    public $field = null;

    /**
     * @var int $type
     * @access public
     */
    public $type = null;

    /**
     * @var string $possible_values
     * @access public
     */
    public $possible_values = null;

    /**
     * @var string $default_value
     * @access public
     */
    public $default_value = null;

    /**
     * @var string $valid_regexp
     * @access public
     */
    public $valid_regexp = null;

    /**
     * @var int $access_level_r
     * @access public
     */
    public $access_level_r = null;

    /**
     * @var int $access_level_rw
     * @access public
     */
    public $access_level_rw = null;

    /**
     * @var int $length_min
     * @access public
     */
    public $length_min = null;

    /**
     * @var int $length_max
     * @access public
     */
    public $length_max = null;

    /**
     * @var boolean $advanced
     * @access public
     */
    public $advanced = null;

    /**
     * @var boolean $display_report
     * @access public
     */
    public $display_report = null;

    /**
     * @var boolean $display_update
     * @access public
     */
    public $display_update = null;

    /**
     * @var boolean $display_resolved
     * @access public
     */
    public $display_resolved = null;

    /**
     * @var boolean $display_closed
     * @access public
     */
    public $display_closed = null;

    /**
     * @var boolean $require_report
     * @access public
     */
    public $require_report = null;

    /**
     * @var boolean $require_update
     * @access public
     */
    public $require_update = null;

    /**
     * @var boolean $require_resolved
     * @access public
     */
    public $require_resolved = null;

    /**
     * @var boolean $require_closed
     * @access public
     */
    public $require_closed = null;

    /**
     * @param ObjectRef $field
     * @param int       $type
     * @param string    $possible_values
     * @param string    $default_value
     * @param string    $valid_regexp
     * @param int       $access_level_r
     * @param int       $access_level_rw
     * @param int       $length_min
     * @param int       $length_max
     * @param boolean   $advanced
     * @param boolean   $display_report
     * @param boolean   $display_update
     * @param boolean   $display_resolved
     * @param boolean   $display_closed
     * @param boolean   $require_report
     * @param boolean   $require_update
     * @param boolean   $require_resolved
     * @param boolean   $require_closed
     * @access public
     */
    public function __construct($field, $type, $possible_values, $default_value, $valid_regexp, $access_level_r, $access_level_rw, $length_min, $length_max, $advanced, $display_report, $display_update, $display_resolved, $display_closed, $require_report, $require_update, $require_resolved, $require_closed)
    {
        $this->field = $field;
        $this->type = $type;
        $this->possible_values = $possible_values;
        $this->default_value = $default_value;
        $this->valid_regexp = $valid_regexp;
        $this->access_level_r = $access_level_r;
        $this->access_level_rw = $access_level_rw;
        $this->length_min = $length_min;
        $this->length_max = $length_max;
        $this->advanced = $advanced;
        $this->display_report = $display_report;
        $this->display_update = $display_update;
        $this->display_resolved = $display_resolved;
        $this->display_closed = $display_closed;
        $this->require_report = $require_report;
        $this->require_update = $require_update;
        $this->require_resolved = $require_resolved;
        $this->require_closed = $require_closed;
    }
}
