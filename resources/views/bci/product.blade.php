@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-40px">
            <p class="text-80 font-medium text-center" style="color: var(--color-bci-primary)">Our Products</p>
        </div>
        <div class="bci-product-category-section">
            @foreach ($categories as $category)
                <a href="{{ route('bci.product_category', $category->id) }}">
                    <div class="bci-product-category-card"
                        style="background-image: url('{{ asset($category->image) }}')">
                        <p style="z-index: 10;">{{$category->name}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection