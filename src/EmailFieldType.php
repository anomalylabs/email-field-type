<?php namespace Anomaly\Streams\Addon\FieldType\Email;

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
     * Base validation rules.
     *
     * @var array
     */
    protected $rules = ['email'];

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['type'] = 'email';

        return $data;
    }
}
