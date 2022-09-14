@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Single Product</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <img src="https://picsum.photos/400/300.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->price }} $</p>
                            </div>
                        </div>
                        <div class="col py-4">
                            <h3>Form to Generate Order</h3>
                            <form method="post" action="{{ route('orders.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="customer_mobile" name="customer_mobile" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Generate order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
