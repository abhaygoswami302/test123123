@extends('layouts.app')

@section('content')
<section class="InnerBanner" style="background-image: url({{ asset('images/banner.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                
                <div class="InnerBannerTxt">
                        <div class="TitleMn">
                            <h2 class="animate__animated animate__slideInRight">Under Development <br> Forum</h2>
                        </div>

                        <div class="col-xl-12t">
                            <h4 class="animate__animated animate__slideInRigh">We are currently
                                working on a super
                                awesome forum page</h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection