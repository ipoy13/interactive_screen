 @extends('mainlayout')

 @section('content')
<div class="bci-body-container" style="padding: 0;">
    <div>
        <div class="py-20px">
            <p class="text-center text-40 font-medium color-bci-primary">Our Packaging</p>
        </div>
        <div class="bci-packaging-section" style="margin-bottom: 40px;">
            @foreach ($packagings as $packaging)
            <div class="bci-packaging-card">
                <div class="bci-packaging-img-bg">
                    <img src="{{ asset($packaging->image)}}" alt="Packaging Icon" width="120" height="120">
                </div>
                <p>{{ $packaging->name }}</p>
            </div>
            @endforeach
        </div>
    
        <div class="bci-grid-packaging">
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_1.png') }}" style="background: url({{ asset('images/packaging_1.png') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_2.png') }}" style="background: url({{ asset('images/packaging_2.png') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_3.png') }}" style="background: url({{ asset('images/packaging_3.png') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_4.png') }}" style="background: url({{ asset('images/packaging_4.png') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_5.png') }}" style="background: url({{ asset('images/packaging_5.png') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_6.png') }}" style="background: url({{ asset('images/packaging_6.png') }})"></div>
        </div>
    </div>
</div>

{{-- Modal preview image --}}
<div class="modal fade" id="modal-packaging">
    <div class="modal-dialog modal-dialog-centered modal-stable">
        <div class="modal-content" style="width: 100%">
            <p class="material-symbols" style="font-size: 80px; color: #000; margin-left: auto; cursor: pointer" data-dismiss="modal">close</p>

            <img id="modal-img-packaging" src="" class="img-fluid" alt="Packaging">
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.btn-image', function () {
        const img_source = $(this).data('src');
        $('#modal-img-packaging').attr('src', img_source);
        $('#modal-img-packaging').css('width', '1957px');
        $('#modal-img-packaging').css('height', '1305px');
    });
</script>
@endsection