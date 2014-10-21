<?php namespace Anomaly\Streams\FieldType\Email;

use Streams\Core\Addon\FieldTypeAbstract;

class EmailFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';
}
