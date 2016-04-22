# Configuration

-[Basic Configuration](#basic)
-[Extra Configuration](#basic)

<hr>

Below is the full configuration available with defaults.

    {% code php %}
    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.email',
            'config' => [
                'default_value' => 'null'
            ]
        ]
    ];
    {% code php %}

### `default_value`

The default value is `null`.

