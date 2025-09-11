@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-20px">
            <p class="text-40 font-medium text-center" style="color: var(--color-bci-primary)">{{ $product_category->name }}</p>
        </div>
        <div class="bci-product-section">
            @foreach ($products as $product)
                <div class="bci-product-card" data-toggle="modal" data-target="#bci-product-{{ $product->id }}">
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

                {{-- Modal product --}}
                <div class="modal fade" id="bci-product-{{ $product->id }}">
                    <div class="modal-dialog modal-dialog-centered modal-stable">
                        <div class="modal-content" style="width: 100%; gap: 0;">
                            <div style="padding: 40px; margin-left: auto;">
                                <p class="material-symbols" style="font-size: 80px; color: #000; cursor: pointer" data-dismiss="modal">close</p>
                            </div>
                            <div class="py-20px">
                                <div class="flex-row">
                                    <img class="bci-product-img" src="{{ asset($product->image)}}" alt="Product Image">
                                    <div style="margin-left: 40px; display: flex; flex-direction: column; justify-content: center;">
                                        <p class="text-40 font-bold color-bci-primary">{{ $product->title }}</p>
                                        <div class="text-24 color-gray-800" style="line-height:36px; margin-top: 16px;">{!! $product->description !!}</div>
                                        <div style="margin-top: 40px;">
                                            <p class="text-40 font-medium color-bci-primary">Benefits</p>
                                            <div class="text-24" style="line-height: 36px; margin-top: 16px;">{!! $product->benefit !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $product_oem = explode(',', $product->oem_id);
                                $product_oems = collect($oems)->whereIn('id', $product_oem);

                                $product_industry = explode(',', $product->industry_id);
                                $product_industries = collect($industries)->whereIn('id', $product_industry);
                            @endphp
                            @if ($product_oems->count() > 0 || $product_industries->count() > 0)
                                <div class="bci-title-spec">
                                    <p>Specification & Approvals</p>
                                </div>
                                <div class="flex-row" style="gap: 40px; width: 100%">
                                    <div style="flex: 1">
                                        <p class="text-24 font-medium color-bci-primary" style="padding: 10px 0;">OEM</p>
                                        <table class="detail-table">
                                            <thead>
                                                <tr>
                                                    <th>Specification</th>
                                                    <th>Approval</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($product_oems->count() > 0)
                                                    @foreach ($product_oems as $oem)
                                                        <tr>
                                                            <td>{{$oem->spec}}</td>
                                                            <td>{{$oem->approval}}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td class="text-center" colspan="2">-</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="flex: 1">
                                        <p class="text-24 font-medium color-bci-primary" style="padding: 10px 0;">INDUSTRY</p>
                                        <table class="detail-table">
                                            <thead>
                                                <tr>
                                                    <th>Specification</th>
                                                    <th>Approval</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($product_industries->count() > 0)
                                                    @foreach ($product_industries as $industry)
                                                        <tr>
                                                            <td>{{$industry->spec}}</td>
                                                            <td>{{$industry->approval}}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td class="text-center" colspan="2">-</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
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
        <div class="py-20px">
            <p class="text-32 font-medium text-center" style="color: var(--color-bci-primary)">Other Products</p>
        </div>
        <div class="bci-other-product">
            @foreach ($other_categories as $other)
                <a href="{{ route('bci.product_category', $other->id) }}">
                    <div class="bci-other-product-card" style="background: url({{ asset($other->image_square) }})">
                        <p style="z-index: 10;">{{$other->name}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection