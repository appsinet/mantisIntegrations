<?php

namespace MantisIntegrations\Model;

class HistoryData
{

    /**
     * @var int $date
     * @access public
     */
    public $date = null;

    /**
     * @var int $userid
     * @access public
     */
    public $userid = null;

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @var string $field
     * @access public
     */
    public $field = null;

    /**
     * @var int $type
     * @access public
     */
    public $type = null;

    /**
     * @var string $old_value
     * @access public
     */
    public $old_value = null;

    /**
     * @var string $new_value
     * @access public
     */
    public $new_value = null;

    /**
     * @param int    $date
     * @param int    $userid
     * @param string $username
     * @param string $field
     * @param int    $type
     * @param string $old_value
     * @param string $new_value
     * @access public
     */
    public function __construct($date, $userid, $username, $field, $type, $old_value, $new_value)
    {
        $this->date = $date;
        $this->userid = $userid;
        $this->username = $username;
        $this->field = $field;
        $this->type = $type;
        $this->old_value = $old_value;
        $this->new_value = $new_value;
    }
}
