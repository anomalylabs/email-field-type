# Usage

- [Mailto](#mailto)
- [Obfuscated](#obfuscated)

<hr>

This field type returns the email address by default.

<a name="mailto"></a>
### `mailto($text = null)`

`$text` - The link text. If none is provided the email address will be used.

Returns an HTML mailto link.

    // Twig usage
    {{ entry.example.mailto|raw }} or {{ entry.example.mailto('Ryan Thompson')|raw }}

    // API usage
    $entry->example->mailto; or $entry->example->mailto('Ryan Thompson');

<a name="obfuscated"></a>
### `obfuscated()`

Returns the obfuscated email address.

    // Twig usage
    {{ entry.example.obfuscated }}

    // API usage
    $entry->example->obfuscated;

