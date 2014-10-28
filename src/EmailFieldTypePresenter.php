<?php namespace Anomaly\Streams\Addon\FieldType\Email;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

class EmailFieldTypePresenter extends FieldTypePresenter
{

    public function link($title = null, $attributes = [])
    {
        $email = $this->resource->getValue();

        $title = $title ? : $email;

        return app('html')->mailto($email, $title, $attributes);
    }

}
 