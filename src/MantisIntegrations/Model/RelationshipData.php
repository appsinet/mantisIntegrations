<?php

namespace MantisIntegrations\Model;

class RelationshipData
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var ObjectRef $type
     * @access public
     */
    public $type = null;

    /**
     * @var int $target_id
     * @access public
     */
    public $target_id = null;

    /**
     * @param int       $id
     * @param ObjectRef $type
     * @param int       $target_id
     * @access public
     */
    public function __construct($id, $type, $target_id)
    {
        $this->id = $id;
        $this->type = $type;
        $this->target_id = $target_id;
    }
}
