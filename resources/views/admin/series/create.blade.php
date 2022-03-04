@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-10 mb-4 offset-1">
            @include('admin.partials.alert')

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Subseries</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin_series.store') }}" method="POST" class="user" enctype="multipart/form-data">
                        @csrf
                        <livewire:admin-subseries />
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Add New Subseries" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection