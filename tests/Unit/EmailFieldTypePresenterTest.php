<?php

use Anomaly\EmailFieldType\EmailFieldType;

class EmailFieldTypePresenterTest extends TestCase
{

    public function testMailto()
    {
        $fieldType = app(EmailFieldType::class)
            ->setValue('test@domain.com');

        $mailto = (string) decorate($fieldType)->mailto('Foo Bar', ['data-foo' => 'bar']);

        $this->assertStringContainsString('Foo Bar', $mailto);
        $this->assertStringContainsString('data-foo="bar"', $mailto);
        $this->assertStringNotContainsString('href="mailto:test@domain.com', $mailto);
        $this->assertStringContainsString('href="mailto:test@domain.com', html_entity_decode($mailto));

        $mailto = (string) decorate($fieldType)->mailto();

        $this->assertStringContainsString('>test@domain.com</a>', html_entity_decode($mailto));
    }
}
