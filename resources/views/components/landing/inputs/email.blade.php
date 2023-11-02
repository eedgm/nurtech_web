@props([
    'name',
    'label',
    'value',
    'required' => null,
])

<x-landing.inputs.basic type="email" required="{{ $required }}" :name="$name" label="{{ $label ?? ''}}" :value="$value ?? ''" :attributes="$attributes"></x-landing.inputs.basic>
