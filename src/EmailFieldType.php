<?php namespace Anomaly\Streams\Addon\FieldType\Email;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class EmailFieldType extends FieldTypeAddon
{
    protected $slug = 'email';

    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';
}
