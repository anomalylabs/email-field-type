# Usage

- [Setting Values](#mutator)
- [Basic Output](#output)
- [Presenter Output](#presenter)

<hr>

<a name="mutator"></a>
## Setting Values

You can set the decimal field type value with any valid email.

{{ code('php', '$entry->example = "ryan@pyrocms.com";') }}

<hr>

<a name="output"></a>
## Basic Output

The email field type returns `null` or the email value.

{% code php %}
$entry->example; // ryan@pyrocms.com
{% endcode %}

<hr>

<a name="presenter"></a>
## Presenter Output

When accessing the value from a decorated entry, like one in a view, the country field type presenter is returned instead.

#### Mailto Link

Return an HTML mailto link with optional text override.

{% code php %}
$entry->example->mailto();
$entry->example->mailto("Email Me");
{% endcode %}

#### Obfuscation

Returns the obfuscated email value.

{% code php %}
$entry->example->obfuscated();
{% endcode %}
