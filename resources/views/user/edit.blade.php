<x-layout>
  <x-slot:title>Edit User</x-slot:title>
  <div class="container">
    <div class="row d-grid gap-2 d-flex justify-content-center">
      <div class="col-6">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('put')
            <x-text-input type="text" name="name" label="Nama" placeholder="Masukan nama user" value="{{ old('name', $user->name) }}"></x-text-input>

            <x-text-input type="email" name="email" label="Email" placeholder="Masukan email user" value="{{ old('email', $user->email) }}"></x-text-input>

            <x-text-input type="password" name="password" label="password" placeholder="Masukan password baru" value="{{ old('password')}}"></x-text-input>

            <div class="d-grid gap-2 d-md-flex justify-content-md-between">
              <a href="{{ route('users.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
              <button type="submit" class="btn btn-success btn-sm px-5">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>