@props(['name', 'label'])

<a class="nav-link text-capitalize {{ request()->routeIs($name) ? 'active' : '' }}" href="{{ route($name) }}">
  {{ $label }}
</a>