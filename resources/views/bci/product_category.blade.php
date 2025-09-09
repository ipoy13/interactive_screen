@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-40px">
            <p class="text-80 font-medium text-center" style="color: var(--color-bci-primary)">{{ $product_category->name }}</p>
        </div>
        <div class="bci-product-section">
            @foreach ($products as $product)
                <div class="bci-product-card">
                    <div class="bci-image-wrapper">
                        @if ($product->subcategory_id != '')
                            @php
                                $color = '';
                                if ($product->subcategory_id == 1) {
                                    $color = 'bg-bci-secondary';
                                } else if ($product->subcategory_id == 2) {
                                    $color = 'bg-success-600';
                                } else if ($product->subcategory_id == 3) {
                                    $color = 'bg-warning-300';
                                } else {
                                    $color = 'bg-comp-coolant';
                                }
                            @endphp
                            <div class="bci-badge-subcategory {{ $color }}">{{ $product->subcategory_name }}</div>
                        @endif
                        <img class="bci-product-img-card" src="{{ asset($product->image) }}" alt="Product Image"></img>
                    </div>
                    <div style="padding: 38px 12px;">
                        <p>{{$product->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="py-40px">
            <p class="text-64 font-medium text-center" style="color: var(--color-bci-primary)">Other Products</p>
        </div>
        <div class="bci-other-product">
            
        </div>
    </div>
</div>
@endsection