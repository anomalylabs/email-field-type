<?php

use Anomaly\EmailFieldType\EmailFieldType;
use Anomaly\EmailFieldType\EmailFieldTypeServiceProvider;

class EmailFieldTypeServiceProviderTest extends TestCase
{

    public function testProvidesEmailFieldType()
    {
        $provider = app(EmailFieldTypeServiceProvider::class);

        $this->assertTrue(in_array(EmailFieldType::class, $provider->provides()));
        $this->assertTrue(in_array('anomaly.field_type.email', $provider->provides()));
    }
}
