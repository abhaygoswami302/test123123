@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="row p-2">
                <div class="col-sm-12 text-center">
                    <h3 class="m-0 font-weight-bold text-primary">Clear Database OTP</h3>
                    <p>
                        <small>
                            Please enter otp we sent you on <b>{{ Auth::user()->email }}</b>
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-3"></div>
        <div class="col-lg-6">
            @if (Session::get('message'))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success animate__animated animate__flash">
                        {{ Session::get('message') }}
                    </div>
                </div>
            </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="card shadow mb-4 p-4">
                <form action="{{ route('clearProducts.store') }}" method="POST">
                    @csrf
                    <label>Name</label>
                    <input type="text" placeholder="Name" name="name" value="{{ Auth::user()->name }}" class="form-control" required readonly></p>
                    <label>Email</label>
                    <input type="text" placeholder="Email" name="email" value="{{ Auth::user()->email }}" class="form-control" required readonly></p>
                    <label>Enter OTP</label>
                    <input type="text" placeholder="Enter OTP" name="otp" class="form-control" required></p>
                    <label>Enter Password</label>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" required>
                    <br>
                    <input type="submit" value="Clear Database" onclick="return confirm('Are You Sure You Want To Clear Products Database?');" class="btn btn-warning btn-block">
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection