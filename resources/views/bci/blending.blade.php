@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-40px">
            <p class="text-center text-80 font-medium color-bci-primary">Our Blending Plant</p>
        </div>
        <div class="flex-row" style="align-items: center">
            <img src="{{ asset('images/bci_blending_map.png') }}" alt="Blending Plant">
            <div style="margin-left: 112px; display: flex; flex-direction: column; gap: 40px;">
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_recochem.png') }}" alt="Recochem" width="90" height="90">
                    </div>
                    <div style="margin-left: 24px;">
                        <p class="text-24 color-gray-900" style="line-height: 36px;">Globally Supported by</p>
                        <p class="text-40 font-bold color-bci-primary" style="line-height: 48px;">Recochem International</p>
                    </div>
                </div>
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_marine.png') }}" alt="Production Capacity" width="90" height="90">
                    </div>
                    <div style="margin-left: 24px;">
                        <p class="text-24 color-gray-900" style="line-height: 36px;">Production Capacity</p>
                        <p class="text-40 font-bold color-bci-primary" style="line-height: 48px;">11,000 KL</p>
                    </div>
                </div>
                <div class="flex-row" style="align-items: center">
                    <div class="bci-blending-icon-bg">
                        <img src="{{ asset('images/logo_certificate.png') }}" alt="Logo Certificate" width="90" height="90">
                    </div>
                    <div style="margin-left: 24px;">
                        <p class="text-24 color-gray-900" style="line-height: 36px;">Certifications</p>
                        <p class="text-40 font-bold color-bci-primary" style="line-height: 48px;">ISO 9001; 14001; 45001</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-40px flex-col" style="gap: 80px;">
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_1.png') }}" alt="High Tech" width="400" height="400" style="border-radius: 24px;">
                <p class="text-64 color-gray-800"><span class="font-bold color-black">High Technology</span> Coolant Manufacturing Unit</p>
            </div>
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_2.png') }}" alt="Automatic" width="400" height="400" style="border-radius: 24px;">
                <p class="text-64 color-gray-800"><span class="font-bold color-black">Automatic</span> Coolant Filling System</p>
            </div>
            <div class="bci-blending-rectangle">
                <img src="{{ asset('images/blending_3.png') }}" alt="Extensive capacity" width="400" height="400" style="border-radius: 24px;">
                <p class="text-64 color-gray-800"><span class="font-bold color-black">Extensive capacity</span> to meet local and export demands</p>
            </div>
        </div>
    </div>
</div>
@endsection