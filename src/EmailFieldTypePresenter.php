<?php namespace Anomaly\EmailFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class EmailFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\EmailFieldType
 */
class EmailFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return an HTML mailto anchor.
     *
     * @param null|string $text
     * @return null|string
     */
    public function mailto($text = null)
    {
        if (!$email = $this->object->getValue()) {
            return null;
        }

        return app('html')->mailto($email, $text);
    }

    /**
     * Return the obfuscated email.
     *
     * @return null|string
     */
    public function obfuscate()
    {
        if (!$email = $this->object->getValue()) {
            return null;
        }

        return app('html')->obfuscate($email);
    }
}
