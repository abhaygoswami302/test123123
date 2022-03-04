@extends('layouts.users')

@section('content')
<div class="container">
  <div class="row WtBg">
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
      <div class="ClctMnLft">
        <div class="Fltr1 box-shadows-products">
          <div class="Fltr1Ttl">
            <h4>Browse Collection</h4>
          </div>
          <div class="Fltr1Lst">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">My Collections</a>
              <a class="list-group-item list-group-item-action" id="list-category-list" data-toggle="list" href="#list-category" role="tab" aria-controls="category">My Categories</a>
              <a class="list-group-item list-group-item-action" id="list-products-list" data-toggle="list" href="#list-products" role="tab" aria-controls="products">My Products</a>
              <a class="list-group-item list-group-item-action" id="list-group-divider" href="#">User Details</a>
              <!--a class="list-group-item list-group-item-action" href="{{ route('userliked.products') }}">My Wishlist</a-->
              <a class="list-group-item list-group-item-action" href="{{ route('visibleProducts') }}">Visible Products</a>
              <a class="list-group-item list-group-item-action" href="{{ route('hiddenProducts') }}">Hidden Products</a>
              <a class="list-group-item list-group-item-action" href="{{ route('user_profile_settings') }}">Profile Settings</a>
              <a class="list-group-item list-group-item-action" href="{{ route('user_upgradePlan.index') }}">Upgrade Plan</a>
              <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 ">
      <div class="tab-content" id="nav-tabContent">
        <div class="ClctMnRt tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <livewire:guest-collections :collections="$collections" :total_products="$total_products" />
        </div>

        <div class="ClctMnRt tab-pane fade px-4" id="list-category" role="tabpanel" aria-labelledby="list-category-list">
        <livewire:guest-categories :categories="$categories" />
        </div>

        <div class="ClctMnRt tab-pane fade px-4" id="list-products" role="tabpanel" aria-labelledby="list-products-list">
        <livewire:guest-products :products="$products" />
        </div>
      </div>
    </div>
</div>
@endsection