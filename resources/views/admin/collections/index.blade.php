@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Collections</h3>
            <br>
            @include('admin.partials.alert')
        </div>
        @foreach ($collections as $collection)
        <div class="col-sm-4">
            <div class="card shadow mb-4 my-card">
                <div class="d-block card-header py-3"  >
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-sm-8 py-2">
                                {{ $collection->name }}
                            </div>
                            <div class="col-sm-4 text-right">
                                
                               <a href="{{ route('admin_collections.edit', $collection->id) }}">
                                <button class="btn btn-outline-primary btn-sm">Edit</button>
                               </a>
                            </div>
                        </div>
                    </h6>
                </div>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample_{{ $collection->id }}">
                    <div class="card-body">
                        <div class="text-center">
                            @if ($collection->name == 'Hot Wheels')
                            <a href="{{ route('admin_collections.show', $collection->id) }}">
                            @endif
                            @if ($collection->name == 'Lego MiniFigures')
                            <a href="{{ route('lego_minifigures_form.index') }}">
                            @endif
                            @if ($collection->name == 'Hot Toys')
                            <a href="{{ route('hotToys.index') }}">
                            @endif
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="
                                @if ($collection->image == null)
                                    {{ asset('images/admin/undraw_posting_photo.svg') }}
                                @else
                                    {{ asset($collection->image) }}
                                @endif
                                " alt="...">
                            </a>      
                               
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                {{ $collection->updated_at->diffForHumans() }}
                            </div>
                            <p>
                                {{ $collection->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach              
    </div>
</div>
@endsection