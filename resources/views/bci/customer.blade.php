@extends('mainlayout')

@section('content')
<div class="bci-body-container">
    <div>
        <div class="py-20px">
            <p class="text-center text-40 font-medium color-bci-primary">Our Customers</p>
        </div>
        <div class="py-20px flex-col" style="align-items: center; gap: 20px;">
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Mining</p>
                </div>
                <div class="bci-customer-value-card">
                    <img class="bci-customer-img" src="{{ asset('images/customer_buma.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_dh.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_kpc.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_Harita Nickel_Primer.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_thriveni_earth_movers_pvt_ltd_logo.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_Mandiricontractor-1-768x383.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_thiess.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_logo-smj.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_mitra_indah_lestari.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_ABJ.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_gpe.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_bas.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img" src="{{ asset('images/customer_sn.webp') }}" alt="Logo Customer">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Fleet</p>
                </div>
                <div class="bci-customer-value-card">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_dunex.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_mega_indo.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_LOGISJP.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_krakatu.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_vitrans.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_puninar.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_dakota.webp') }}" alt="Logo Customer" >
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_manhattan.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_mobilindo.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_cj.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_emps.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-2" src="{{ asset('images/customer_kag.webp') }}" alt="Logo Customer">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Agriculture</p>
                </div>
                <div class="bci-customer-value-card">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_rea.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_sentosa.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_gawi.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_arung.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_kuala_lumpur.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_imc.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_sinar_wijaya.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_sukses_karya.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-3" src="{{ asset('images/customer_pancaran.webp') }}" alt="Logo Customer">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Others</p>
                </div>
                <div class="bci-customer-value-card">
                    <img class="bci-customer-img-4" src="{{ asset('images/customer_liugong.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-4" src="{{ asset('images/customer_sany.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-4" src="{{ asset('images/customer_HD.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-4" src="{{ asset('images/customer_kobex.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-4" src="{{ asset('images/customer_halliburton.webp') }}" alt="Logo Customer">
                    <img class="gwdc" src="{{ asset('images/customer_gwdc_logo.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-5" src="{{ asset('images/customer_pondasi.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-5" src="{{ asset('images/customer_indocement.webp') }}" alt="Logo Customer">
                    <img class="bci-customer-img-5" src="{{ asset('images/customer_sbs.webp') }}" alt="Logo Customer">
                    <img class="transmaritim" src="{{ asset('images/customer_transmaritim.svg') }}" alt="Logo Customer">
                    <img class="kai" src="{{ asset('images/customer_kai.webp') }}" alt="Logo Customer">
                    <img class="pakuwon" src="{{ asset('images/customer_pakuwon.svg') }}" alt="Logo Customer">
                    <img class="cust-cw" src="{{ asset('images/customer_cw.webp') }}" alt="Logo Customer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection