 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div class="py-40px">
        <p class="text-center text-64 font-medium">Products</p>
    </div>
    <div class="product-type-section" style="padding: 40px;">
        <div class="product-type-card" 
            style="background-image: url('{{ asset('images/fuel.png') }}')">
            <p class="color-white" style="z-index: 10;">Oil</p>
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
    <div class="modal-dialog modal-dialog-centered">
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
