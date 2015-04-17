<?php

namespace MantisIntegrations\Model;

class ProjectAttachmentData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $filename
     * @access public
     */
    public $filename = null;

    /**
     * @var string $title
     * @access public
     */
    public $title = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var int $size
     * @access public
     */
    public $size = null;

    /**
     * @var string $content_type
     * @access public
     */
    public $content_type = null;

    /**
     * @var dateTime $date_submitted
     * @access public
     */
    public $date_submitted = null;

    /**
     * @var anyURI $download_url
     * @access public
     */
    public $download_url = null;

    /**
     * @var int $user_id
     * @access public
     */
    public $user_id = null;

    /**
     * @param int      $id
     * @param string   $filename
     * @param string   $title
     * @param string   $description
     * @param int      $size
     * @param string   $content_type
     * @param dateTime $date_submitted
     * @param anyURI   $download_url
     * @param int      $user_id
     * @access public
     */
    public function __construct($id, $filename, $title, $description, $size, $content_type, $date_submitted, $download_url, $user_id)
    {
        $this->id = $id;
        $this->filename = $filename;
        $this->title = $title;
        $this->description = $description;
        $this->size = $size;
        $this->content_type = $content_type;
        $this->date_submitted = $date_submitted;
        $this->download_url = $download_url;
        $this->user_id = $user_id;
    }
}
