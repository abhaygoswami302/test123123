@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">Feedback For <b>{{ $feedback->product_name }}</b> </h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4 p-4">
                <a href="{{ route('admin.user.show', $feedback->user_id) }}">
                    <h4 class="text-primary">By : {{ $feedback->username }} <br></h4>
                </a>
                <div class="row">
                    <div class="col-sm-6">
                       <a href="{{ route('admin_products.show', $feedback->product_id) }}">
                        <h5 class="text-primary">For Product Name : {{ $feedback->product_name }} <br></h5>
                       </a>
                    </div>
                    <div class="col-sm-6 text-right">
                        {{ $feedback->created_at->diffForHumans() }}
                    </div>
                </div>
                @if($feedback->name <> null)
                   <h5 class="alert alert-success">
                    Name Feedback : {{ $feedback->name }} </h5>
                @endif
                @if($feedback->series <> null)
                    <h5 class="alert alert-success">Series Feedback : {{ $feedback->series }}</h5>
                @endif
                @if($feedback->category_name <> null)
                    <h5 class="alert alert-success">Category Name Feedback :  {{ $feedback->category_name }}</h5>
                @endif  
                @if($feedback->collection_name <> null)
                    <h5 class="alert alert-success">Collection Name Feedback :{{ $feedback->collection_name }}</h5>
                @endif 
                @if($feedback->subseries_name <> null)
                    <h5 class="alert alert-success">Subseries Name Feedback :{{ $feedback->subseries_name }}</h5>
                @endif
                @if($feedback->theme <> null)
                <h5 class="alert alert-success">Theme Feedback :{{ $feedback->theme }}</h5>
                @endif
                @if($feedback->model_name <> null)
                <h5 class="alert alert-success">Model Name Feedback :{{ $feedback->model_name }}</h5>
                @endif
                @if($feedback->casting_name <> null)
                <h5 class="alert alert-success">Casting Name Feedback :{{ $feedback->casting_name }}</h5>
                @endif             
                @if($feedback->year <> null)
                <h5 class="alert alert-success">Year Feedback :{{ $feedback->year }}</h5>
                @endif
                @if($feedback->colour <> null)
                <h5 class="alert alert-success">Colour Feedback :{{ $feedback->colour }}</h5>
                @endif
                @if($feedback->tampo <> null)
                <h5 class="alert alert-success">Tampo Feedback :{{ $feedback->tampo }}</h5>
                @endif
                @if($feedback->base_colour <> null)
                <h5 class="alert alert-success">Base Colour Feedback :{{ $feedback->base_colour }}</h5>
                @endif
                @if($feedback->type <> null)
                <h5 class="alert alert-success">Type Feedback :{{ $feedback->type }}</h5>
                @endif
                @if($feedback->window_colour <> null)
                <h5 class="alert alert-success">Window Colour Feedback :{{ $feedback->window_colour }}</h5>
                @endif
                @if($feedback->interior_colour <> null)
                <h5 class="alert alert-success">Interior Colour Feedback :{{ $feedback->interior_colour }}</h5>
                @endif                
                @if($feedback->wheel_type <> null)
                <h5 class="alert alert-success">Wheel Type Feedback :{{ $feedback->wheel_type }}</h5>
                @endif
                @if($feedback->country <> null)
                <h5 class="alert alert-success">Country Feedback :{{ $feedback->country }}</h5>
                @endif                
                @if($feedback->class <> null)
                <h5 class="alert alert-success">Class Feedback :{{ $feedback->class }}</h5>
                @endif
                @if($feedback->notes <> null)
                <h5 class="alert alert-success">Notes Feedback :{{ $feedback->notes }}</h5>
                @endif
                @if($feedback->toy_hash <> null)
                <h5 class="alert alert-success">Toy Hash Feedback :{{ $feedback->toy_hash }}</h5>
                @endif
                @if($feedback->col_hash <> null)
                <h5 class="alert alert-success">Col Hash Feedback :{{ $feedback->col_hash }}</h5>
                @endif
                @if($feedback->series_hash <> null)
                <h5 class="alert alert-success">Series Hash Feedback :{{ $feedback->series_hash }}</h5>
                @endif
                @if($feedback->lego_mf_fig_num <> null)
                <h5 class="alert alert-success">Fig Num :{{ $feedback->lego_mf_fig_num }}</h5>
                @endif
                @if($feedback->lego_mf_name <> null)
                <h5 class="alert alert-success">Lego MiniFigures Product Name :{{ $feedback->lego_mf_name }}</h5>
                @endif
                @if($feedback->lego_mf_num_parts <> null)
                <h5 class="alert alert-success">Num Parts :{{ $feedback->lego_mf_num_parts }}</h5>
                @endif
            </div>
        </div>      
    </div>
</div>
@endsection