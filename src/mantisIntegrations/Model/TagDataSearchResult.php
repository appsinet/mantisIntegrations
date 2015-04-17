<?php

namespace MantisIntegrations\Model;

class TagDataSearchResult
{

    /**
     * @var TagDataArray $results
     * @access public
     */
    public $results = null;

    /**
     * @var int $total_results
     * @access public
     */
    public $total_results = null;

    /**
     * @param TagDataArray $results
     * @param int          $total_results
     * @access public
     */
    public function __construct($results, $total_results)
    {
        $this->results = $results;
        $this->total_results = $total_results;
    }
}
