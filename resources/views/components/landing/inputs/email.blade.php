@props([
    'name',
    'label',
    'value',
])

<x-landing.inputs.basic type="email" :name="$name" label="{{ $label ?? ''}}" :value="$value ?? ''" :attributes="$attributes"></x-landing.inputs.basic>
