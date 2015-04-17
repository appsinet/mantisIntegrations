<?php

namespace MantisIntegrations\Model;

class IssueNoteData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var AccountData $reporter
     * @access public
     */
    public $reporter = null;

    /**
     * @var string $text
     * @access public
     */
    public $text = null;

    /**
     * @var ObjectRef $view_state
     * @access public
     */
    public $view_state = null;

    /**
     * @var dateTime $date_submitted
     * @access public
     */
    public $date_submitted = null;

    /**
     * @var dateTime $last_modified
     * @access public
     */
    public $last_modified = null;

    /**
     * @var int $time_tracking
     * @access public
     */
    public $time_tracking = null;

    /**
     * @var int $note_type
     * @access public
     */
    public $note_type = null;

    /**
     * @var string $note_attr
     * @access public
     */
    public $note_attr = null;

    /**
     * @param int         $id
     * @param AccountData $reporter
     * @param string      $text
     * @param ObjectRef   $view_state
     * @param dateTime    $date_submitted
     * @param dateTime    $last_modified
     * @param int         $time_tracking
     * @param int         $note_type
     * @param string      $note_attr
     * @access public
     */
    public function __construct($id, $reporter, $text, $view_state, $date_submitted, $last_modified, $time_tracking, $note_type, $note_attr)
    {
        $this->id = $id;
        $this->reporter = $reporter;
        $this->text = $text;
        $this->view_state = $view_state;
        $this->date_submitted = $date_submitted;
        $this->last_modified = $last_modified;
        $this->time_tracking = $time_tracking;
        $this->note_type = $note_type;
        $this->note_attr = $note_attr;
    }
}
