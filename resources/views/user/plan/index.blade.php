@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row bg-container">
        <div class="col-sm-12 bg-white p-4">   
            <div class="PriceData_1">
                <div class="TitleMn">
                    <h2>Upgrade Plan</h2>
                </div>
                <ul style="list-style-type: none;" class="text-center">
                    <li>Full unrestricted access to view details of all collection types.</li>
                    <li>Track your own collectibles with a plan that suits your collection size.</li>
                    <li>7 day free trial with all new subscriptions.</li>
                    <li>Change or cancel your plan anytime.</li>
                </ul>
            </div>         
            <div class="PriceData_2">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="Price1">
                            <h2>$10.00</h2>
                            <p>Per Month</p>
                            <h4>Standard</h4>
                            <ul>
                                <li><b>1000</b> Products</li>
                            </ul>
                            <div class="PriceBtn">
                                <a href="{{ route('user_upgradePlan.create', [9, 2]) }}">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="Price1">
                            <h2>$100.00</h2>
                            <p>Per Year</p>
                            <h4>Standard</h4>
                            <ul>
                                <li><b>1000</b> Products</li>
                                
                            </ul>
                            <div class="PriceBtn">
                                <a href="{{ route('user_upgradePlan.create', [10, 2]) }}">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="Price1 Price2">
                            <h2>$15.00</h2>
                            <p>Per Month</p>
                            <h4>Premium</h4>
                            <ul>
                                <li><b>Unlimited</b> Products</li>
                            </ul>
                            <div class="PriceBtn">
                                <a href="{{ route('user_upgradePlan.create', [11, 3]) }}">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="Price1 Price2">
                            <h2>$150.00</h2>
                            <p>Per Year</p>
                            <h4>Premium</h4>
                            <ul>
                                <li><b>Unlimited</b> Products</li>
                            </ul>
                            <div class="PriceBtn">
                                <a href="{{ route('user_upgradePlan.create', [12, 3]) }}">Sign Up</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection