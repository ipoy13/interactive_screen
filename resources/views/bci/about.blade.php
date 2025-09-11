@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-20px">
            <p class="text-40 font-medium text-center" style="color: var(--color-bci-primary)">About BCI</p>
        </div>
        <div class="bci-about-section">
            <p>Blue Coolant Indonesia (BCI) was founded in 2010 as part of SEFAS Group. BCI provides product solutions under the name and brand of Reco-Cool, supplies maintenance complementary products for all types of machines such as <span class="font-bold color-bci-primary">coolant, degreaser</span> and <span class="font-bold color-bci-primary">heavy-duty hand wash</span>.</p>
            <br>
            <p>BCI’s product lines are manufactured and <span class="font-bold" style="color: var(--color-bci-primary)">fully supported by Recochem International (Recochem Inc)</span>. Recochem is one of the largest engine coolant manufacturers and suppliers in the world, known for its premium quality antifreeze and coolant products.</p>
        </div>
    </div>
    <div class="flex-row" style="align-items: center; justify-content: center;">
        <div class="bci-rectangle-card">
            <div class="flex-row">
                <div class="bci-about-icon-bg">
                    <img src="{{ asset('images/bci_about_customer.png') }}" alt="Icon Customer" width="70" height="70">
                </div>
                <div style="margin-left: 16px;">
                    <p class="text-56 font-bold">500+</p>
                    <p class="text-20 font-medium">Customers</p>
                </div>
            </div>
        </div>
        <div class="bci-rectangle-card" style="margin-left: 80px;">
            <div class="flex-row">
                <div class="bci-about-icon-bg">
                    <img src="{{ asset('images/bci_about_industry.png') }}" alt="Icon Industry" width="70" height="70">
                </div>
                <div style="margin-left: 16px;">
                    <p class="text-56 font-bold">10+</p>
                    <p class="text-20 font-medium">Industry Sectors</p>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-top: 20px; margin-bottom: 140px;">
        <p class="text-32 font-semibold color-black text-center">Network of Supply Points</p>
        <img src="{{ asset('images/bci_map.png')}}" alt="Supply Points Map" width="1020">
    </div>
</div>
@endsection