<x-layout>
  <x-slot:title>Dashboard</x-slot:title>
  <div class="container">
    <h1>{{ request()->user()->name }}</h1>
  </div>
</x-layout>