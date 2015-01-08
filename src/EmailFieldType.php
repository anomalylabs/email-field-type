<?php namespace Anomaly\EmailFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class EmailFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Email
 */
class EmailFieldType extends FieldType
{

    /**
     * Field type validation rules.
     *
     * @var array
     */
    protected $rules = ['email'];

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.email::input';
}
