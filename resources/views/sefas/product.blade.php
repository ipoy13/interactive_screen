 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div class="py-20px">
        <p class="text-center text-32 font-medium">Products</p>
    </div>
    <div class="product-type-section" style="padding: 20px;">
        @foreach ($types as $type)
            <a href="{{ route('sefas.product_type', $type->id) }}">
                <div class="product-type-card" 
                    style="background-image: url('{{ asset($type->image) }}')">
                    <p class="color-white" style="z-index: 10;">{{$type->name}}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
