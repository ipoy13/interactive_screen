 @extends('mainlayout')

 @section('content')
<div class="body-container">
    <div>
        <div class="py-20px">
            <p class="text-center text-32 font-medium">Sectors</p>
        </div>
        <div class="sector-section">
            @foreach ($sectors as $sector)
                <div class="sector-card">
                    <img class="sector-img-card" src="{{ asset($sector->sector_image)}}" alt="Sector">
                    <div style="padding: 12px">
                        <p>{{ $sector->sector_name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection