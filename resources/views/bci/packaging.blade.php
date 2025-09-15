 @extends('mainlayout')

 @section('content')
<div class="bci-body-container" style="padding: 0;">
    <div>
        <div class="py-20px">
            <p class="text-center text-40 font-medium color-bci-primary">Our Packaging</p>
        </div>
        <div class="bci-packaging-section" style="margin-bottom: 20px;">
            @foreach ($packagings as $packaging)
            <div class="bci-packaging-card">
                <div class="bci-packaging-img-bg">
                    <img src="{{ asset($packaging->image)}}" alt="Packaging Icon" width="60" height="60">
                </div>
                <p>{{ $packaging->name }}</p>
            </div>
            @endforeach
        </div>
    
        <div class="bci-grid-packaging">
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_1.webp') }}" style="background-image: url({{ asset('images/packaging_1.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_2.webp') }}" style="background-image: url({{ asset('images/packaging_2.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_bci.webp') }}" style="background-image: url({{ asset('images/packaging_bci.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_4.webp') }}" style="background-image: url({{ asset('images/packaging_4.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_5.webp') }}" style="background-image: url({{ asset('images/packaging_5.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_6.webp') }}" style="background-image: url({{ asset('images/packaging_6.webp') }})"></div>
        </div>
    </div>
</div>

{{-- Modal preview image --}}
<div class="modal fade" id="modal-packaging">
    <div class="modal-dialog modal-dialog-centered modal-stable">
        <div class="modal-content" style="width: 100%">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" style="margin-left: auto; cursor: pointer" data-dismiss="modal">
                <path d="M24.1673 3.18203L21.8173 0.832031L12.5007 10.1487L3.18398 0.832031L0.833984 3.18203L10.1507 12.4987L0.833984 21.8154L3.18398 24.1654L12.5007 14.8487L21.8173 24.1654L24.1673 21.8154L14.8507 12.4987L24.1673 3.18203Z" fill="black"/>
            </svg>

            <img id="modal-img-packaging" src="" class="img-fluid" alt="Packaging">
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.btn-image', function () {
        const img_source = $(this).data('src');
        $('#modal-img-packaging').attr('src', img_source);
        $('#modal-img-packaging').css('width', '978px');
        $('#modal-img-packaging').css('height', '652px');
    });
</script>
@endsection