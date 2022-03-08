@extends('dashboard.seller.layouts.master')
@section('pageTitle', 'Seller Home')
@section('content')
<div class="sellerHome__container">
    <h1>{{ Auth::guard()->user()->company_name }} seller</h1>
    <img src='{{asset('admin_images/'.Auth::guard()->user()->hero_image)}}' alt= {{ Auth::guard()->user()->company_name }} >
        <div class="sellerHome__innerContainer">
            <div class="sellerHome__categories">
                <ul>
                    <li class="sellerHome__secondTitle">{{ Auth::guard()->user()->company_name }} Categories</li>
                    @foreach ($all_store_categories as $category)
                        <li class="store__mainCategory">{{ $category }}</li>
                            <ul>
                                @foreach ($all_store_subcategories as $subcategory)
                                    @if ($subcategory->category->category_name === $category)
                                        <li class="store__category"><a href="{{ route('seller.filter', ['id'=>$subcategory->id])}}">{{ $subcategory->subcategory_name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                    @endforeach
                </ul>
            </div>
            <div class="sellerHome__products">
                <div class="sellerHome__top">
                    <button class="store__addProductBtn"><a href={{ route('seller.shop.create') }}>Add New Product</a></button>
                </div>
                <div class="sellerHome__middle">
                    @foreach ($all_products as $product)
                        <div class="singleProduct">
                            <img src={{ asset('products_images/'.$product->product_image) }} alt={{ $product->product_name }}>
                            <h4>{{ $product->product_name }}</h4>
                            <h5>{{ $product->product_price }} JD</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>
@endsection