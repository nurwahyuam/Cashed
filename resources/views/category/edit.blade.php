<x-layout>
  <x-slot:title>Edit Category</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="col-12">
              <label for="name" class="form-label fs-6">Nama Category</label>
              <input type="text" class="form-control form-control-sm" id="name" placeholder="Masukan Nama Category" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" checked>
                <label class="form-check-label" for="active">Aktif</label>
              </div>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="/categories" class="btn btn-sm btn-danger">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary w-100">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>