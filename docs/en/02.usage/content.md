## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the email field type value with any valid email.

    $entry->example = "example@domain.com";


### Basic Output[](#usage/basic-output)

The email field type returns `null` or the email value.

    $entry->example; // example@domain.com


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\EmailFieldType\EmailFieldTypePresenter` class.


#### EmailFieldTypePresenter::mailto()[](#usage/presenter-output/emailfieldtypepresenter-mailto)

The `mailto` method returns an HTML mailto link.

###### Returns: `string`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$text

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The email address.

</td>

<td>

The text of the link.

</td>

</tr>

<tr>

<td>

$attributes

</td>

<td>

false

</td>

<td>

array

</td>

<td>

null

</td>

<td>

The HTML attributes of the link.

</td>

</tr>

</tbody>

</table>

###### Example

    $decorated->example->mailto('Email me!', ['class' => 'btn btn-success']);

###### Twig

    {{ decorated.example.mailto('Email me!', {'class': 'btn btn-success'})|raw }}


#### EmailFieldTypePresenter::obfuscated()[](#usage/presenter-output/emailfieldtypepresenter-obfuscated)

The `obfuscated` method returns the obfuscated email.

###### Returns: `string`

###### Example

    $decorated->example->obfuscated();

###### Twig

    {{ decorated.example.obfuscated()|raw }}
