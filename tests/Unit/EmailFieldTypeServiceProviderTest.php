<?php

use Anomaly\EmailFieldType\EmailFieldType;
use Anomaly\EmailFieldType\EmailFieldTypeServiceProvider;

class EmailFieldTypeServiceProviderTest extends TestCase
{

    public function testProvides()
    {
        $provider = app(EmailFieldTypeServiceProvider::class, ['app' => app()]);

        $this->assertTrue(in_array(EmailFieldType::class, $provider->provides()));
        $this->assertTrue(in_array('anomaly.field_type.email', $provider->provides()));
    }
}
