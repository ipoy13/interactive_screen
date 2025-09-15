 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div style="padding: 20px 20px; background-color: var(--color-gray-100);">
        <div class="py-20px">
            <p class="text-center text-32 font-medium">Our Locations</p>
        </div>
        <div class="grid-warehouse">
            @foreach ($warehouses as $warehouse)
                <div class="card-warehouse">
                    <img src="{{ asset($warehouse->warehouse_image) }}" alt="warehouse" width="80" height="80">
                    <div>
                        <p class="text-24 font-medium text-center color-gray-700">{{ $warehouse->warehouse_location }}</p>
                        <p class="text-14 text-center color-gray-700" style="margin-top: 12px;">{{ $warehouse->warehouse_type }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="facility-section">
        <div class="py-20px">
            <p class="text-center text-32 font-medium">Facilities</p>
        </div>
        <div class="facility-images">
            <div class="flex-row" style="justify-content: space-between">
                <div class="flex-col" style="gap: 14px;">
                    <div class="image-1 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_1.webp') }}"></div>
                    <div class="flex-row" style="gap: 12px;">
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_3.webp');" data-src="{{ asset('images/facility_3.webp') }}"></div>
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_4.webp');" data-src="{{ asset('images/facility_4.webp') }}"></div>
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_5.webp');" data-src="{{ asset('images/facility_5.webp') }}"></div>
                    </div>
                </div>
                <div class="flex-col" style="gap: 14px;">
                    <div class="image-2 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_2.webp') }}"></div>
                    <div class="image-7 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_7.webp') }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal preview image --}}
<div class="modal fade" id="modal-facility">
    <div class="modal-dialog modal-dialog-centered modal-stable">
        <div class="modal-content" style="width: 100%">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" style="margin-left: auto; cursor: pointer" data-dismiss="modal">
                <path d="M24.1673 3.18203L21.8173 0.832031L12.5007 10.1487L3.18398 0.832031L0.833984 3.18203L10.1507 12.4987L0.833984 21.8154L3.18398 24.1654L12.5007 14.8487L21.8173 24.1654L24.1673 21.8154L14.8507 12.4987L24.1673 3.18203Z" fill="black"/>
            </svg>

            <img id="modal-img" src="" class="img-fluid" alt="Facility">
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.btn-image', function () {
        const img_source = $(this).data('src');
        $('#modal-img').attr('src', img_source);
    });
</script>
@endsection
