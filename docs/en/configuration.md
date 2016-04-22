# Configuration

-[Basic Configuration](#basic)
-[Extra Configuration](#basic)

<hr>

Below is the full configuration available with defaults.

{% code php %}
protected $fields = [
    "example" => [
        "type"   => "anomaly.field_type.email",
        "config" => [
            "default_value" => null
        ]
    ]
];
{% endcode %}

<hr>

<a name="basic"></a>
## Basic Configuration

### Default Value

{{ code('php', '"default_type" => "ryan@pyrocms.com"') }}

The `default_value` is a core option. This field type accepts any valid email.

