<x-layout>
  <x-slot:title>Tambah User</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <form class="m-3" action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control form-control-sm" id="name" placeholder="Elon Musk" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-sm" id="email" placeholder="Example@gmail.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" required>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-between">
              <a href="/users" class="btn btn-sm btn-danger">Batal</a>
              <button type="submit" class="btn btn-success btn-sm">Tambah</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</x-layout>