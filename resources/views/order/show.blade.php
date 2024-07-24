<x-layout title="Order #{{ $order->id }}">
  <div class="container">
      <div class="row">
          <div class="col-4">
              <div class="card mb-2">
                  <div class="card-body border-bottom">
                      <div class="d-flex">
                          <div>Customer: </div>
                          <div class="ms-auto">{{ $order->customer }}</div>
                      </div>

                      <div class="d-flex">
                          <div>Date:</div>
                          <div class="ms-auto">{{ $order->formatted_created_at }}</div>
                      </div>
                  </div>

                  <div class="card-body border-bottom">
                      <div class="d-grid gap-2">
                          @foreach ($order->details as $detail)
                              <div class="card">
                                  <div class="card-body">
                                      <div>{{ $detail->product->name }}</div>

                                      <div class="d-flex">
                                          <div class="form-text">
                                              {{ number_format($detail->qty) }} x {{ number_format($detail->price) }}
                                          </div>
                                          <div class="ms-auto form-text">
                                              Rp{{ number_format($detail->qty * $detail->price) }}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>

                  <div class="card-body">
                      <div class="d-flex">
                          <div>Total</div>
                          <div class="ms-auto mb-0 fw-bold">Rp{{ number_format($order->total) }}</div>
                      </div>

                      <div class="d-flex">
                          <div>Payment</div>
                          <div class="ms-auto mb-0">Rp{{ number_format($order->payment) }}</div>
                      </div>

                      <div class="d-flex">
                          <div>Kembalian</div>
                          <div class="ms-auto mb-0">Rp{{ number_format($order->payment - $order->total) }}</div>
                      </div>
                  </div>
              </div>

              <a href="{{ route('orders.index') }}" class="btn btn-dark">Kembali</a>
          </div>
      </div>
  </div>
</x-layout>