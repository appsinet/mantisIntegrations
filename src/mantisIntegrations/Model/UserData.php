<?php

namespace MantisIntegrations\Model;

class UserData
{

    /**
     * @var AccountData $account_data
     * @access public
     */
    public $account_data = null;

    /**
     * @var int $access_level
     * @access public
     */
    public $access_level = null;

    /**
     * @var string $timezone
     * @access public
     */
    public $timezone = null;

    /**
     * @param AccountData $account_data
     * @param int         $access_level
     * @param string      $timezone
     * @access public
     */
    public function __construct($account_data, $access_level, $timezone)
    {
        $this->account_data = $account_data;
        $this->access_level = $access_level;
        $this->timezone = $timezone;
    }
}
