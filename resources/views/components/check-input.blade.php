@props(['name'])

<div class="col-12">
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="{{ $name }}" name="{{ $name }}" checked>
    <label class="form-check-label text-capitalize" for="{{ $name }}">{{ $name }}</label>
  </div>
</div>