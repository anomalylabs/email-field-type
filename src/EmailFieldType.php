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

    /**
     * Get view data for the filter.
     *
     * @return array
     */
    public function getFilterData()
    {
        $data = parent::getFilterData();

        $data['type'] = 'text';

        return $data;
    }
}
