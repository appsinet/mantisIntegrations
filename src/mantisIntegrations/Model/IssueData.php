<?php

namespace MantisIntegrations\Model;

class IssueData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var ObjectRef $view_state
     * @access public
     */
    public $view_state = null;

    /**
     * @var dateTime $last_updated
     * @access public
     */
    public $last_updated = null;

    /**
     * @var ObjectRef $project
     * @access public
     */
    public $project = null;

    /**
     * @var string $category
     * @access public
     */
    public $category = null;

    /**
     * @var ObjectRef $priority
     * @access public
     */
    public $priority = null;

    /**
     * @var ObjectRef $severity
     * @access public
     */
    public $severity = null;

    /**
     * @var ObjectRef $status
     * @access public
     */
    public $status = null;

    /**
     * @var AccountData $reporter
     * @access public
     */
    public $reporter = null;

    /**
     * @var string $summary
     * @access public
     */
    public $summary = null;

    /**
     * @var string $version
     * @access public
     */
    public $version = null;

    /**
     * @var string $build
     * @access public
     */
    public $build = null;

    /**
     * @var string $platform
     * @access public
     */
    public $platform = null;

    /**
     * @var string $os
     * @access public
     */
    public $os = null;

    /**
     * @var string $os_build
     * @access public
     */
    public $os_build = null;

    /**
     * @var ObjectRef $reproducibility
     * @access public
     */
    public $reproducibility = null;

    /**
     * @var dateTime $date_submitted
     * @access public
     */
    public $date_submitted = null;

    /**
     * @var int $sponsorship_total
     * @access public
     */
    public $sponsorship_total = null;

    /**
     * @var AccountData $handler
     * @access public
     */
    public $handler = null;

    /**
     * @var ObjectRef $projection
     * @access public
     */
    public $projection = null;

    /**
     * @var ObjectRef $eta
     * @access public
     */
    public $eta = null;

    /**
     * @var ObjectRef $resolution
     * @access public
     */
    public $resolution = null;

    /**
     * @var string $fixed_in_version
     * @access public
     */
    public $fixed_in_version = null;

    /**
     * @var string $target_version
     * @access public
     */
    public $target_version = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $steps_to_reproduce
     * @access public
     */
    public $steps_to_reproduce = null;

    /**
     * @var string $additional_information
     * @access public
     */
    public $additional_information = null;

    /**
     * @var AttachmentDataArray $attachments
     * @access public
     */
    public $attachments = null;

    /**
     * @var RelationshipDataArray $relationships
     * @access public
     */
    public $relationships = null;

    /**
     * @var IssueNoteDataArray $notes
     * @access public
     */
    public $notes = null;

    /**
     * @var CustomFieldValueForIssueDataArray $custom_fields
     * @access public
     */
    public $custom_fields = null;

    /**
     * @var dateTime $due_date
     * @access public
     */
    public $due_date = null;

    /**
     * @var AccountDataArray $monitors
     * @access public
     */
    public $monitors = null;

    /**
     * @var boolean $sticky
     * @access public
     */
    public $sticky = null;

    /**
     * @var ObjectRefArray $tags
     * @access public
     */
    public $tags = null;

    /**
     * @param int                               $id
     * @param ObjectRef                         $view_state
     * @param dateTime                          $last_updated
     * @param ObjectRef                         $project
     * @param string                            $category
     * @param ObjectRef                         $priority
     * @param ObjectRef                         $severity
     * @param ObjectRef                         $status
     * @param AccountData                       $reporter
     * @param string                            $summary
     * @param string                            $version
     * @param string                            $build
     * @param string                            $platform
     * @param string                            $os
     * @param string                            $os_build
     * @param ObjectRef                         $reproducibility
     * @param dateTime                          $date_submitted
     * @param int                               $sponsorship_total
     * @param AccountData                       $handler
     * @param ObjectRef                         $projection
     * @param ObjectRef                         $eta
     * @param ObjectRef                         $resolution
     * @param string                            $fixed_in_version
     * @param string                            $target_version
     * @param string                            $description
     * @param string                            $steps_to_reproduce
     * @param string                            $additional_information
     * @param AttachmentDataArray               $attachments
     * @param RelationshipDataArray             $relationships
     * @param IssueNoteDataArray                $notes
     * @param CustomFieldValueForIssueDataArray $custom_fields
     * @param dateTime                          $due_date
     * @param AccountDataArray                  $monitors
     * @param boolean                           $sticky
     * @param ObjectRefArray                    $tags
     * @access public
     */
    public function __construct($id, $view_state, $last_updated, $project, $category, $priority, $severity, $status, $reporter, $summary, $version, $build, $platform, $os, $os_build, $reproducibility, $date_submitted, $sponsorship_total, $handler, $projection, $eta, $resolution, $fixed_in_version, $target_version, $description, $steps_to_reproduce, $additional_information, $attachments, $relationships, $notes, $custom_fields, $due_date, $monitors, $sticky, $tags)
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
        $this->version = $version;
        $this->build = $build;
        $this->platform = $platform;
        $this->os = $os;
        $this->os_build = $os_build;
        $this->reproducibility = $reproducibility;
        $this->date_submitted = $date_submitted;
        $this->sponsorship_total = $sponsorship_total;
        $this->handler = $handler;
        $this->projection = $projection;
        $this->eta = $eta;
        $this->resolution = $resolution;
        $this->fixed_in_version = $fixed_in_version;
        $this->target_version = $target_version;
        $this->description = $description;
        $this->steps_to_reproduce = $steps_to_reproduce;
        $this->additional_information = $additional_information;
        $this->attachments = $attachments;
        $this->relationships = $relationships;
        $this->notes = $notes;
        $this->custom_fields = $custom_fields;
        $this->due_date = $due_date;
        $this->monitors = $monitors;
        $this->sticky = $sticky;
        $this->tags = $tags;
    }
}
