<?php namespace Anomaly\Streams\Addon\FieldType\Email;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class EmailFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Email
 */
class EmailFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return an HTML mailto link.
     *
     * @param null  $title
     * @param array $attributes
     * @return mixed
     */
    public function link($title = null, $attributes = [])
    {
        $email = $this->obfuscate();

        return app('html')->mailto($email, $title ? : $email, $attributes);
    }

    /**
     * Return an HTML mailto link with obfuscation.
     *
     * @param null  $title
     * @param array $attributes
     * @return mixed
     */
    public function safe($title = null, $attributes = [])
    {
        $email = $this->obfuscate();

        return app('html')->mailto($email, $title ? : $email, $attributes);
    }

    /**
     * Return an obfuscated email.
     *
     * @return mixed
     */
    public function obfuscated()
    {
        return app('html')->email($this->resource->getValue());
    }
}
 