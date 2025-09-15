@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-20px">
            <p class="text-center text-40 font-medium color-bci-primary">Our Blending Plant</p>
        </div>
        <div class="flex-row" style="align-items: center">
            <img src="{{ asset('images/bci_blending_map.webp') }}" alt="Blending Plant" height="410">
            <div style="margin-left: 56px; display: flex; flex-direction: column; gap: 20px;">
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_recochem.webp') }}" alt="Recochem" width="45" height="45">
                    </div>
                    <div style="margin-left: 12px;">
                        <p class="text-12 color-gray-900" style="line-height: 18px;">Globally Supported by</p>
                        <p class="text-20 font-bold color-bci-primary" style="line-height: 24px;">Recochem International</p>
                    </div>
                </div>
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_marine.webp') }}" alt="Production Capacity" width="45" height="45">
                    </div>
                    <div style="margin-left: 12px;">
                        <p class="text-12 color-gray-900" style="line-height: 18px;">Production Capacity</p>
                        <p class="text-20 font-bold color-bci-primary" style="line-height: 24px;">11,000 KL</p>
                    </div>
                </div>
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_certificate.webp') }}" alt="Logo Certificate" width="45" height="45">
                    </div>
                    <div style="margin-left: 12px;">
                        <p class="text-12 color-gray-900" style="line-height: 18px;">Certifications</p>
                        <p class="text-20 font-bold color-bci-primary" style="line-height: 24px;">ISO 9001; 14001; 45001</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-20px flex-col" style="gap: 40px;">
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_1.webp') }}" alt="High Tech" width="200" height="200" style="border-radius: 12px;">
                <p class="text-32 color-gray-800"><span class="font-bold color-black">High Technology</span> Coolant Manufacturing Unit</p>
            </div>
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_2.webp') }}" alt="Automatic" width="200" height="200" style="border-radius: 12px;">
                <p class="text-32 color-gray-800"><span class="font-bold color-black">Automatic</span> Coolant Filling System</p>
            </div>
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_3.webp') }}" alt="Extensive capacity" width="200" height="200" style="border-radius: 12px;">
                <p class="text-32 color-gray-800"><span class="font-bold color-black">Extensive capacity</span> to meet local and export demands</p>
            </div>
        </div>
    </div>
</div>
@endsection