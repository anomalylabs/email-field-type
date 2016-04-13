# Email Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.email`

The email field type provides an HTML5 email input.


<a name="configuration"></a>
## Configuration

**Example Definition:**

    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.email',
            'config' => [
                'default_value' => 'test@test.com'
            ]
        ]
    ];

### `default_value`

The default field value. The default value is `null`.


<a name="output"></a>
## Output

This field type returns the email address by default.

### `mailto($text = null)`

`$text` - The link text. If none is provided the email address will be used.

Returns an HTML mailto link.

    // Twig usage
    {{ entry.example.mailto|raw }} or {{ entry.example.mailto('Ryan Thompson')|raw }}
    
    // API usage
    $entry->example->mailto; or $entry->example->mailto('Ryan Thompson');

### `obfuscated()`

Returns the obfuscated email address.

    // Twig usage
    {{ entry.example.obfuscated }}
    
    // API usage
    $entry->example->obfuscated;
