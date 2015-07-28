# Output

This field type returns the email address by default.

### `mailto`

`text` - The text value of the link. If none is provided the email address will be used.

Returns an HTML mailto link.

```
// Twig Usage
{{ entry.example.mailto|raw }} or {{ entry.example.mailto('Ryan Thompson')|raw }}

// API usage
$entry->example->mailto; or $entry->example->mailto('Ryan Thompson'); 
```

### `obfuscated`

Return the obfuscated email address.

```
// Twig Usage
{{ entry.example.obfuscated }}

// API usage
$entry->example->obfuscated;
```
