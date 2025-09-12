 @extends('mainlayout')

 @section('content')
<div class="body-container">
    <div class="about-section">
        <p>SEFAS started its journey in <span style="font-weight: 700">1997</span> as a <span style="font-weight: 700; color: var(--color-primary-500)">distributor of Shell lubricants</span>. Since then, it has grown into one of the leading players in Indonesia’s lubricant supply chain.</p>
    </div>
    <div style="display: flex; flex-direction: column; gap: 20px;">
        <div class="rectangle-card bg-gray-200">
            <div class="rectangle-card-img-frame">
                <img src="{{ asset('images/about_customer.webp') }}" alt="about">
            </div>

            <div>
                <p class="title color-primary-500" style="margin-bottom: 6px">6,100+ Customers</p>
                <p class="subtitle color-gray-700">served across 10 major industries, including mining, manufacturing, fleet and marine.</p>
            </div>
        </div>
        <div class="rectangle-card bg-gray-700">
            <div class="rectangle-card-img-frame">
                <img src="{{ asset('images/about_liters.webp') }}" alt="about">
            </div>

            <div>
                <p class="title color-gray-100" style="margin-bottom: 6px">More than<br>35 Million Liters</p>
                <p class="subtitle color-gray-100">of lubricants distributed annually across Indonesia.</p>
            </div>
        </div>
        <div class="rectangle-card bg-primary-500">
            <div class="rectangle-card-img-frame">
                <img src="{{ asset('images/about_years.webp') }}" alt="about">
            </div>

            <div>
                <p class="title color-gray-100" style="margin-bottom: 6px">More than<br>25 Years</p>
                <p class="subtitle color-gray-100">of operational experience in lubricants, fuel, coolant, and logistics.</p>
            </div>
        </div>
    </div>
    <div class="network" style="">
        <p class="title text-center">Network of Supply Points</p>
        <img src="{{ asset('images/maps.webp') }}" alt="supply points" style="width: 100%">
    </div>
</div>

{{-- <script>
    $(function() {
        $('#btn-back').attr('href', '{{ route("home") }}');
    })
</script> --}}
@endsection
