@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Castings</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Action</th>
                                <th>Casting Name</th>
                                <th>Subseries Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($castings as $casting)
                            <tr>
                                <td class="text-center">
                                    <a href="{{ route('admin_castings.edit', $casting->id) }}"><i class="fas fa-edit"></i></a>
                                </td>        
                                <td>
                                    <a href="#">{{ $casting->casting_name }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_series.show', $casting->subseries_id) }}">
                                        {{ $casting->subseries_name }}
                                    </a>
                                </td>
                                <td>
                                    @if ($casting->description <> NULL)
                                      {{   $casting->description }} 
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    @if ($casting->image <> null)
                                    <img src="{{ asset($casting->image) }}" alt=""></td>                                        
                                    @else
                                        N/A
                                    @endif
                                <td>{{ $casting->created_at->diffForHumans() }}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection