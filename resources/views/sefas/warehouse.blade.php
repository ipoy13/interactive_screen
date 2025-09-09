 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div style="padding: 0 40px;">
        <div class="py-40px">
            <p class="text-center text-64 font-medium">Warehouses</p>
        </div>
        <div class="grid-warehouse">
            @foreach ($warehouses as $warehouse)
                <div class="card-warehouse">
                    <img src="{{ asset($warehouse->warehouse_image) }}" alt="warehouse" width="160" height="160">
                    <div>
                        <p class="text-48 font-medium text-center color-gray-700">{{ $warehouse->warehouse_location }}</p>
                        <p class="text-28 text-center color-gray-700" style="margin-top: 12px;">{{ $warehouse->warehouse_type }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="margin-bottom: 200px;">
        <div class="py-40px">
            <p class="text-center text-64 font-medium">Facilities</p>
        </div>
        <div class="facility-images">
            <div class="flex-row" style="gap: 40px;">
                <div class="flex-col" style="gap: 28px;">
                    <div class="image-1 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_1.jpg') }}"></div>
                    <div class="flex-row" style="gap: 24px;">
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_3.jpg');" data-src="{{ asset('images/facility_3.jpg') }}"></div>
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_4.jpg');" data-src="{{ asset('images/facility_4.jpg') }}"></div>
                        <div class="image-row btn-image" data-toggle="modal" data-target="#modal-facility" style="background-image: url('../images/facility_5.jpg');" data-src="{{ asset('images/facility_5.jpg') }}"></div>
                    </div>
                </div>
                <div class="flex-col" style="gap: 29px;">
                    <div class="image-2 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_2.jpg') }}"></div>
                    <div class="image-7 btn-image" data-toggle="modal" data-target="#modal-facility" data-src="{{ asset('images/facility_7.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal preview image --}}
<div class="modal fade" id="modal-facility">
    <div class="modal-dialog modal-dialog-centered modal-stable">
        <div class="modal-content" style="width: 100%">
            <p class="material-symbols" style="font-size: 80px; margin-left: auto; cursor: pointer" data-dismiss="modal">close</p>

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
