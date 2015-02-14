# Email Field Type

*anomaly.field_type.email*

#### An email input field type.

The email field type provides an HTML5 email input.

## Configuration

- `placeholder` - any string including translatable keys

#### Example

	config => [
	    'placeholder' => 'name@company.com'
	]

## Decorator Methods

- `mailto` - returns a mailto HTML anchor
- `obfuscate` - returns the obfuscated email 

#### Example

	{{ user.email.mailto }}
