<x-layout>
  <x-slot:title>Edit Category</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
            @csrf
            @method('put')
            <x-text-input label="Nama Category" type="text" name="name" value="{{ old('name', $category->name) }}" placeholder="Masukan Nama Category"></x-text-input>
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" @checked((!old() && $category->active) || old('active') == 'on')>
                <label class="form-check-label" for="active">Aktif</label>
              </div>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-between">
              <a href="{{ route('categories.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary px-5">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>