<?php

namespace MantisIntegrations\Model;

class ProfileData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var AccountData $user_id
     * @access public
     */
    public $user_id = null;

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
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @param int         $id
     * @param AccountData $user_id
     * @param string      $platform
     * @param string      $os
     * @param string      $os_build
     * @param string      $description
     * @access public
     */
    public function __construct($id, $user_id, $platform, $os, $os_build, $description)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->platform = $platform;
        $this->os = $os;
        $this->os_build = $os_build;
        $this->description = $description;
    }
}
