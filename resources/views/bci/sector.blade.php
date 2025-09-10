 @extends('mainlayout')

 @section('content')
<div class="bci-body-container">
    <div>
        <div class="py-40px">
            <p class="text-center text-80 font-medium color-bci-primary">Our Sectors</p>
        </div>
        <div class="sector-section">
            @foreach ($sectors as $sector)
                <div class="sector-card">
                    <img class="sector-img-card" src="{{ asset($sector->sector_image)}}" alt="Sector">
                    <div style="padding: 24px">
                        <p>{{ $sector->sector_name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection