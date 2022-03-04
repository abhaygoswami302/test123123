@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">About</h3>
        </div>

        <div class="col-xl-12">
            @include('admin.partials.alert')
            <div class="card shadow mb-4">
                <div class="card-header text-primary font-weight-bold">About Page Form</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('admin_about.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Page Text</label>
                                       <textarea name="description" id="editor" cols="30" rows="10" class="form-control">
                                           {!! $about->description !!}
                                       </textarea>
                                    </div>

                                    <div class="col-sm-12 pt-2">
                                        <button class="btn btn-primary text-white mb-2" 
                                            type="submit" >Update Page</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.partials.alert')

        </div>      
    </div>
</div>
@endsection