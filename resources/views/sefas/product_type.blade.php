 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div class="product-section">
        <div class="title">
            <p class="text-center text-32 font-medium">{{ $product_type->name }}</p>
        </div>
        <div class="product-cards-container">
        @foreach ($categories as $category)
            <a class="product-category-card" data-toggle="modal" data-target="#modal-product-{{ $category->id }}">
                <div>
                    <p class="text-40 font-bold color-primary-500" style="margin-bottom: 12px;">{{$category->name}}</p>
                    {!! $category->description !!}
                </div>
                @php
                    $images = explode(',', $category->images);
                    $images_3 = array_slice($images, 0, 3);
                @endphp
                {{-- jika ada image/productnya --}}
                @if ($images_3[0] != '') 
                    <div class="flex-row" style="justify-content: space-between; align-items: center; width: 100%;">
                        @foreach ($images_3 as $img)
                            <img src="{{ asset($img) }}" alt="Product" height="36">
                        @endforeach
                    </div>
                @endif
            </a>

            {{-- Modal product --}}
            <div class="modal fade" id="modal-product-{{ $category->id }}">
                <div class="modal-dialog modal-dialog-centered modal-stable">
                    <div class="modal-content" style="width: 100%; padding: 0; gap: 0;">
                        <div style="padding: 40px; margin-left: auto;">
                            <p class="material-symbols" style="font-size: 40px; color: #000; cursor: pointer" data-dismiss="modal">close</p>
                        </div>

                        <div style="padding: 50px; width: 100%;">
                            <p class="text-40 font-bold color-primary-500" style="margin-bottom: 12px;">{{$category->name}}</p>
                            <div class="text-20 color-black" style="max-width: 1362px; line-height: 130%;">{!! $category->description !!}</div>
                        </div>
                        <div style="padding: 50px; background: var(--color-gray-200);  width: 100%;">
                            <p class="text-20 font-bold color-gray-700" style="margin-bottom: 20px;">What are {{strtoupper($category->name)}} products?</p>
                            {{-- jika ada image/productnya --}}
                            @if ($images[0] != '') 
                                <div class="modal-product-logos" style="align-items: center; width: 100%;">
                                    @foreach ($images as $img)
                                        <div class="product-logo-bg">
                                            <img src="{{ asset($img) }}" alt="Product" height="57px">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div>
        <div class="py-20px" style="margin-top: 20px;">
            <p class="text-center text-32 font-medium">Other Products</p>
        </div>
        <div class="other-product-type-section">
            @foreach ($other_types as $other_type)
                <a href="{{ route('sefas.product_type', $other_type->id) }}">
                    <div class="product-type-square-card" 
                        style="background-image: url('{{ asset($other_type->image) }}')">
                        <p class="color-white" style="z-index: 10;">{{$other_type->name}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
