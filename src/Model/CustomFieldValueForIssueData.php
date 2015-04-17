<?php

namespace MantisIntegrations\Model;

class CustomFieldValueForIssueData
{

    /**
     * @var ObjectRef $field
     * @access public
     */
    public $field = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param ObjectRef $field
     * @param string    $value
     * @access public
     */
    public function __construct($field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }
}
