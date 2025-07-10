@extends('user.layouts.main')

@section('container')


<div class="my-5">
    <div class="container">
      <div class="row justify-content-around">

        <p class="mt-5 text-center fs-2 fw-bold custom-font" style="text-shadow:2px 2px 4px rgba(0, 0, 0, 0.3);">My Orders</span></p>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="step-container mb-4">
                    <div class="step"><div class="step-circle active">✔</div><div>Not yet paid</div></div>
                    <div class="step"><div class="step-circle active">✔</div><div>Packed</div></div>
                    <div class="step"><div class="step-circle active">✔</div><div>Send it</div></div>
                    <div class="step"><div class="step-circle">4</div><div>Rate it</div></div>
                    <div class="step-line"></div>
                </div>

        {{-- not yet paid --}}
        <div class="row" style="margin-bottom: 250px">
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card" style="background-color: rgb(233, 231, 197);">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'pending')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Pending</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Packed --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'settlement')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Packed</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Send --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'send')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Send</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="/review/{{ $transaction->id }}" class="btn btn-primary">Konfirmasi Pesanan</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Rate it --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'rate it')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Rate it</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
        {{-- end --}}
      </div>
    </div>
</div>




@endsection
