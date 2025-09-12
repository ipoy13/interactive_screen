 @extends('mainlayout')

 @section('content')
<div class="body-container" style="padding: 0;">
    <div>
        <div style="padding: 20px;">
            <p class="text-center text-32 font-medium">Packaging</p>
        </div>
        <div class="packaging-section">
            @foreach ($packagings as $packaging)
            <div class="packaging-card">
                <div class="packaging-img-bg">
                    <img src="{{ asset('images/'.$packaging->image)}}" alt="Packaging Icon" width="60" height="60">
                </div>
                <p>{{ $packaging->name }}</p>
            </div>
            @endforeach
        </div>
    
        <div class="grid-packaging">
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_1.webp') }}" style="background-image: url({{ asset('images/packaging_1.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_2.webp') }}" style="background-image: url({{ asset('images/packaging_2.webp') }})"></div>
            <div class="packaging-img btn-image" data-toggle="modal" data-target="#modal-packaging" data-src="{{ asset('images/packaging_3.webp') }}" style="background-image: url({{ asset('images/packaging_3.webp') }})"></div>
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
            <p class="material-symbols" style="font-size: 40px; color: #000; margin-left: auto; cursor: pointer" data-dismiss="modal">close</p>

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