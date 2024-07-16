<x-layout>
  <x-slot:title>Tambah User</x-slot:title>
  <div class="container">
    <div class="row d-grid gap-2 d-flex justify-content-center">
      <div class="col-6">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('users.store') }}" method="post">
            @csrf
            <x-text-input name="name" type="text" label="nama" placeholder="Masukan nama user" value="{{ old('name') }}"></x-text-input>
            <x-text-input name="email" type="email" label="email" placeholder="Masukan email user" value="{{ old('email') }}"></x-text-input>
            <x-text-input name="password" type="password" label="password" placeholder="Masukan password user" value="{{ old('password') }}"></x-text-input>
            <div class="d-grid gap-2 d-md-flex justify-content-md-between">
              <a href="{{ route('users.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
              <button type="submit" class="btn btn-success btn-sm px-5">Tambah</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</x-layout>