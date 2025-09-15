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
                    <div class="flex-row" style="align-items: start; gap: 30px; width: 100%;">
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
                        <div style="padding: 20px; margin-left: auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" style="margin-left: auto; cursor: pointer" data-dismiss="modal">
                                <path d="M24.1673 3.18203L21.8173 0.832031L12.5007 10.1487L3.18398 0.832031L0.833984 3.18203L10.1507 12.4987L0.833984 21.8154L3.18398 24.1654L12.5007 14.8487L21.8173 24.1654L24.1673 21.8154L14.8507 12.4987L24.1673 3.18203Z" fill="black"/>
                            </svg>
                        </div>

                        <div style="padding: 50px; width: 100%;">
                            <p class="text-40 font-bold color-primary-500" style="margin-bottom: 12px;">{{$category->name}}</p>
                            <div class="text-20 color-black" style="max-width: 1362px; line-height: 130%;">{!! $category->description !!}</div>
                        </div>
                        {{-- jika ada image/productnya --}}
                        @if ($images[0] != '') 
                        <div style="padding: 50px; background: var(--color-gray-200);  width: 100%;">
                            <p class="text-20 font-bold color-gray-700" style="margin-bottom: 20px;">What are {{strtoupper($category->name)}} products?</p>
                            <div class="modal-product-logos" style="align-items: center; width: 100%;">
                                @foreach ($images as $img)
                                    <div class="product-logo-bg">
                                        <img src="{{ asset($img) }}" alt="Product" height="57px">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
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
