@props(['name' => '', 'label' => '', 'value' => '', 'placeholder' => '', 'type' => 'text'])

<div class="col-12">
  <label for="{{ $name }}" class="form-label text-capitalize">{{ $label }}</label>
  <input type="{{ $type }}" class="form-control form-control-sm @error('name') is-invalid @enderror" id="{{ $name }}" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}">
  @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>