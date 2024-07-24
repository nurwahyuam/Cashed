<x-layout>
  <x-slot:title>Dashboard</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="my-2 gap-3 d-md-flex justify-content-center ">
          <a href="{{ route('orders.index') }}" class="card mb-3 p-3 bg-primary-subtle card-hover text-decoration-none" style="width: 14rem; height: 14rem;">
            <div class="card-body text-center">
              <div>
                <i class="bi bi-cart4" style="font-size:60px;"></i>
              </div>
              <h5 class="card-title text-center">Total Order</h5>
              <p class="card-text text-center">Jumlah order: {{ count($orders) }}</p>
            </div>
          </a>
          <a href="{{ route('categories.index') }}" class="card mb-3 p-3 bg-warning-subtle card-hover text-decoration-none" style="width: 14rem; height: 14rem;">
            <div class="card-body text-center">
              <div>
                <i class="bi bi-box-seam" style="font-size:60px;"></i>
              </div>
              <h5 class="card-title">Total Category</h5>
              <p class="card-text">Jumlah Category: {{ count($categories) }}</p>
            </div>
          </a>
          <a href="{{ route('products.index') }}" class="card mb-3 p-3 bg-success-subtle card-hover text-decoration-none" style="width: 14rem; height: 14rem;">
            <div class="card-body text-center">
              <div>
                <i class="bi bi-card-checklist" style="font-size:60px;"></i>
              </div>
              <h5 class="card-title">Total Product</h5>
              <p class="card-text">Jumlah Product: {{ count($products) }}</p>
            </div>
          </a>
          <a href="{{ route('users.index') }}" class="card mb-3 p-3 bg-info-subtle card-hover text-decoration-none" style="width: 14rem; height: 14rem;">
            <div class="card-body text-center">
              <div>
                <i class="bi bi-person-circle" style="font-size:60px;"></i>
              </div>
              <h5 class="card-title">Total User</h5>
              <p class="card-text">Jumlah User: {{ count($users) }}</p>
            </div>
          </a>
          </div>
        </div>
      </div> 
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Selamat datang, {{ auth()->user()->name }}!</h5>
            <p class="card-text">Anda dapat melihat informasi, memesan, dan melihat detail order-order anda disini.</p>
            <a href="{{ route('orders.index') }}" class="btn btn-primary">Lihat Order</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div>Product Terjual</div>
            <h1 class="fw-bold">{{ number_format($orderDetail) }}</h1>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <div>Pendapatan</div>
            <h1 class="fw-bold">{{ number_format($ordersRevenue) }}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col my-3">
      <div class="card overflow-hidden">
      <table class="table m-0 text-center text-capitalize ">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Customer</th>
            <th scope="col">Payment</th>
            <th scope="col">Total</th>
            <th scope="col">User</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @forelse ($recentOrders as $order)
          <tr>
            <td>Order #{{ $order->id }}</td>
              <td>{{ $order->customer }}</td>
              <td>Rp.{{ number_format($order->payment) }}</td>
              <td>Rp.{{ number_format($order->total) }}</td>
              <td>{{ $order->user->name }}</td>
              <td>{{ $order->formatted_created_at }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="7">Data Order Belum Ada</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    </div>
  </div>
</x-layout>