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
    $entry->example->mailto();           // <a href="mailto:ryan@pyrocms.com">ryan@pyrocms.com</a>
    $entry->example->mailto("Email Me"); // <a href="mailto:ryan@pyrocms.com">Email Me</a>
    {% endcode %}

#### Obfuscation

Returns the obfuscated email value.

    {% code php %}
    $entry->example->obfuscated(); // &#114;&#121;&#97;&#110;&#64;&#112;&#121;&#114;&#111;&#99;&#109;&#115;&#46;&#99;&#111;&#109;&#10;
    {% endcode %}
