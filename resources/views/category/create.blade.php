<x-layout>
  <x-slot:title>Tambah Category</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
            <form class="row g-3 p-3" action="{{ route('categories.store') }}" method="post">
              @csrf
              <x-text-input label="Nama Category" type="text" name="name" placeholder="Masukan Nama Category" value="{{ old('name') }}"></x-text-input>
              <x-check-input name="active"></x-check-input>
              <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-between">
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
                <button type="submit" class="btn btn-sm btn-success px-5">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>