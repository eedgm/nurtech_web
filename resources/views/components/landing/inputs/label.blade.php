<label class="{{ ($required ?? false) ? 'label label-required text-sm text-gray-700' : 'label mb-2 text-sm text-gray-600' }}" for="{{ $name }}">
    {{ $label }}
    @if ($required)
        <span class="text-red-500">*</span>
    @endif
</label>
