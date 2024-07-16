@props(['name', 'value', 'placeholder'])

<input class="form-control form-control-sm border border-dark focus-ring focus-ring-dark" type="{{ $name }}" placeholder="{{ $placeholder }}" aria-label="Search" name="{{ $name }}" value="{{ $value }}">
<button class="btn btn-sm btn-outline-dark text-capitalize" type="submit">{{ $name }}</button>