@props(['name', 'label'])

<a class="nav-link text-capitalize mx-2 {{ request()->routeIs($name) ? 'active' : '' }}" href="{{ route($name) }}">
  {{ $label }}
</a>