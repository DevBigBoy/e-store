@props(['type' => 'text', 'name', 'value' => ''])

<input type="{{ $type }}" id="{{ $name }}" @class(['form-control', 'is-invalid' => $errors->has($name)]) placeholder="{{ $name }}"
    name="{{ $name }}" autofocus value="{{ old($name, $value) }}">

@error($name)
    <span class="text-danger">{{ $message }}</span>
@enderror
