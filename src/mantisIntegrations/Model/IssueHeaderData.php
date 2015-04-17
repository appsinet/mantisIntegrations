<?php

namespace MantisIntegrations\Model;

class IssueHeaderData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var int $view_state
     * @access public
     */
    public $view_state = null;

    /**
     * @var dateTime $last_updated
     * @access public
     */
    public $last_updated = null;

    /**
     * @var int $project
     * @access public
     */
    public $project = null;

    /**
     * @var string $category
     * @access public
     */
    public $category = null;

    /**
     * @var int $priority
     * @access public
     */
    public $priority = null;

    /**
     * @var int $severity
     * @access public
     */
    public $severity = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @var int $reporter
     * @access public
     */
    public $reporter = null;

    /**
     * @var string $summary
     * @access public
     */
    public $summary = null;

    /**
     * @var int $handler
     * @access public
     */
    public $handler = null;

    /**
     * @var int $resolution
     * @access public
     */
    public $resolution = null;

    /**
     * @var int $attachments_count
     * @access public
     */
    public $attachments_count = null;

    /**
     * @var int $notes_count
     * @access public
     */
    public $notes_count = null;

    /**
     * @param int      $id
     * @param int      $view_state
     * @param dateTime $last_updated
     * @param int      $project
     * @param string   $category
     * @param int      $priority
     * @param int      $severity
     * @param int      $status
     * @param int      $reporter
     * @param string   $summary
     * @param int      $handler
     * @param int      $resolution
     * @param int      $attachments_count
     * @param int      $notes_count
     * @access public
     */
    public function __construct($id, $view_state, $last_updated, $project, $category, $priority, $severity, $status, $reporter, $summary, $handler, $resolution, $attachments_count, $notes_count)
    {
        $this->id = $id;
        $this->view_state = $view_state;
        $this->last_updated = $last_updated;
        $this->project = $project;
        $this->category = $category;
        $this->priority = $priority;
        $this->severity = $severity;
        $this->status = $status;
        $this->reporter = $reporter;
        $this->summary = $summary;
        $this->handler = $handler;
        $this->resolution = $resolution;
        $this->attachments_count = $attachments_count;
        $this->notes_count = $notes_count;
    }
}
