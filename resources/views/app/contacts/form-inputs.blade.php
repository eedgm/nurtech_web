@php $editing = isset($contact) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.textarea name="from" label="From" maxlength="255" required
            >{{ old('from', ($editing ? $contact->from : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea
            name="subject"
            label="Subject"
            maxlength="255"
            required
            >{{ old('subject', ($editing ? $contact->subject : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea name="to" label="To" maxlength="255" required
            >{{ old('to', ($editing ? $contact->to : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea name="cc" label="Cc" maxlength="255"
            >{{ old('cc', ($editing ? $contact->cc : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea name="cco" label="Cco" maxlength="255"
            >{{ old('cco', ($editing ? $contact->cco : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea name="body" label="Body" required
            >{{ old('body', ($editing ? $contact->body : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="code"
            label="Code"
            :value="old('code', ($editing ? $contact->code : ''))"
            maxlength="255"
            placeholder="Code"
        ></x-inputs.text>
    </x-inputs.group>
</div>
