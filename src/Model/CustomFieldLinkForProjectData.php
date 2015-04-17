<?php

namespace MantisIntegrations\Model;

class CustomFieldLinkForProjectData
{

    /**
     * @var ObjectRef $field
     * @access public
     */
    public $field = null;

    /**
     * @var int $sequence
     * @access public
     */
    public $sequence = null;

    /**
     * @param ObjectRef $field
     * @param int       $sequence
     * @access public
     */
    public function __construct($field, $sequence)
    {
        $this->field = $field;
        $this->sequence = $sequence;
    }
}
