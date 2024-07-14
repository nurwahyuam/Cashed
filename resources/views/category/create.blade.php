<x-layout>
  <x-slot:title>Tambah Category</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="col-12">
              <label for="name" class="form-label fs-6">Nama Category</label>
              <input type="text" class="form-control form-control-sm" id="name" placeholder="Masukan Nama Category" name="name" required>
            </div>
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" checked>
                <label class="form-check-label" for="active">Aktif</label>
              </div>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-sm btn-success w-100">Tambah</button>
            </div>
          </form>
          </div>
          <div class="mt-3">
            <a class="link-underline link-underline-opacity-0 link-dark link-opacity-75-hover" href="/categories">&laquo; Back to categories</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>