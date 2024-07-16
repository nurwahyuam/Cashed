<x-layout>
  <x-slot:title>Users</x-slot:title>
  <div class="container">
    @if(session('success'))
      <div class="alert alert-success text-center fs-6" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-2">
      <a class="btn btn-sm btn-success" href="{{ route('users.create') }}">+ Tambah</a>
      <form class="d-flex gap-2" role="search" method="get">
        <x-search-input name="search" value="{{ request()->search }}" placeholder="Search User"></x-search-input>
      </form>
    </div>
    <div class="card overflow-hidden">
      <table class="table m-0 text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider"> 
          @forelse ($users as $index => $user)
          <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-grid gap-2 d-md-flex justify-content-md-center">
              <a class="btn btn-sm btn-primary px-5" href="{{ route('users.edit', ['user' => $user->id]) }}" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
              <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger px-5" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
          <tr  class="text-center">
            <td colspan="4">Tidak Ada Data User</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</x-layout>