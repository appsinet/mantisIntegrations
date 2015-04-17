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

    function getId()
    {
        return $this->id;
    }

    function getView_state()
    {
        return $this->view_state;
    }

    function getLast_updated()
    {
        return $this->last_updated;
    }

    function getProject()
    {
        return $this->project;
    }

    function getCategory()
    {
        return $this->category;
    }

    function getPriority()
    {
        return $this->priority;
    }

    function getSeverity()
    {
        return $this->severity;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getReporter()
    {
        return $this->reporter;
    }

    function getSummary()
    {
        return $this->summary;
    }

    function getVersion()
    {
        return $this->version;
    }

    function getBuild()
    {
        return $this->build;
    }

    function getPlatform()
    {
        return $this->platform;
    }

    function getOs()
    {
        return $this->os;
    }

    function getOs_build()
    {
        return $this->os_build;
    }

    function getReproducibility()
    {
        return $this->reproducibility;
    }

    function getDate_submitted()
    {
        return $this->date_submitted;
    }

    function getSponsorship_total()
    {
        return $this->sponsorship_total;
    }

    function getHandler()
    {
        return $this->handler;
    }

    function getProjection()
    {
        return $this->projection;
    }

    function getEta()
    {
        return $this->eta;
    }

    function getResolution()
    {
        return $this->resolution;
    }

    function getFixed_in_version()
    {
        return $this->fixed_in_version;
    }

    function getTarget_version()
    {
        return $this->target_version;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getSteps_to_reproduce()
    {
        return $this->steps_to_reproduce;
    }

    function getAdditional_information()
    {
        return $this->additional_information;
    }

    function getAttachments()
    {
        return $this->attachments;
    }

    function getRelationships()
    {
        return $this->relationships;
    }

    function getNotes()
    {
        return $this->notes;
    }

    function getCustom_fields()
    {
        return $this->custom_fields;
    }

    function getDue_date()
    {
        return $this->due_date;
    }

    function getMonitors()
    {
        return $this->monitors;
    }

    function getSticky()
    {
        return $this->sticky;
    }

    function getTags()
    {
        return $this->tags;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setView_state(ObjectRef $view_state)
    {
        $this->view_state = $view_state;
    }

    function setLast_updated(dateTime $last_updated)
    {
        $this->last_updated = $last_updated;
    }

    function setProject(ObjectRef $project)
    {
        $this->project = $project;
    }

    function setCategory($category)
    {
        $this->category = $category;
    }

    function setPriority(ObjectRef $priority)
    {
        $this->priority = $priority;
    }

    function setSeverity(ObjectRef $severity)
    {
        $this->severity = $severity;
    }

    function setStatus(ObjectRef $status)
    {
        $this->status = $status;
    }

    function setReporter(AccountData $reporter)
    {
        $this->reporter = $reporter;
    }

    function setSummary($summary)
    {
        $this->summary = $summary;
    }

    function setVersion($version)
    {
        $this->version = $version;
    }

    function setBuild($build)
    {
        $this->build = $build;
    }

    function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    function setOs($os)
    {
        $this->os = $os;
    }

    function setOs_build($os_build)
    {
        $this->os_build = $os_build;
    }

    function setReproducibility(ObjectRef $reproducibility)
    {
        $this->reproducibility = $reproducibility;
    }

    function setDate_submitted(dateTime $date_submitted)
    {
        $this->date_submitted = $date_submitted;
    }

    function setSponsorship_total($sponsorship_total)
    {
        $this->sponsorship_total = $sponsorship_total;
    }

    function setHandler(AccountData $handler)
    {
        $this->handler = $handler;
    }

    function setProjection(ObjectRef $projection)
    {
        $this->projection = $projection;
    }

    function setEta(ObjectRef $eta)
    {
        $this->eta = $eta;
    }

    function setResolution(ObjectRef $resolution)
    {
        $this->resolution = $resolution;
    }

    function setFixed_in_version($fixed_in_version)
    {
        $this->fixed_in_version = $fixed_in_version;
    }

    function setTarget_version($target_version)
    {
        $this->target_version = $target_version;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function setSteps_to_reproduce($steps_to_reproduce)
    {
        $this->steps_to_reproduce = $steps_to_reproduce;
    }

    function setAdditional_information($additional_information)
    {
        $this->additional_information = $additional_information;
    }

    function setAttachments(AttachmentDataArray $attachments)
    {
        $this->attachments = $attachments;
    }

    function setRelationships(RelationshipDataArray $relationships)
    {
        $this->relationships = $relationships;
    }

    function setNotes(IssueNoteDataArray $notes)
    {
        $this->notes = $notes;
    }

    function setCustom_fields(CustomFieldValueForIssueDataArray $custom_fields)
    {
        $this->custom_fields = $custom_fields;
    }

    function setDue_date(dateTime $due_date)
    {
        $this->due_date = $due_date;
    }

    function setMonitors(AccountDataArray $monitors)
    {
        $this->monitors = $monitors;
    }

    function setSticky($sticky)
    {
        $this->sticky = $sticky;
    }

    function setTags(ObjectRefArray $tags)
    {
        $this->tags = $tags;
    }


}
