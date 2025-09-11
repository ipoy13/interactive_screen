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
                    <img src="{{ asset('images/customer_buma.png') }}" alt="Logo Customer" height="21">
                    <img src="{{ asset('images/customer_dh.png') }}" alt="Logo Customer" height="42.857">
                    <img src="{{ asset('images/customer_kpc.png') }}" alt="Logo Customer" height="40.367">
                    <img src="{{ asset('images/customer_Harita Nickel_Primer.png') }}" alt="Logo Customer" height="25">
                    <img src="{{ asset('images/customer_thriveni_earth_movers_pvt_ltd_logo.jpeg') }}" alt="Logo Customer" height="100">
                    <img src="{{ asset('images/customer_Mandiricontractor-1-768x383.png') }}" alt="Logo Customer" height="43">
                    <img src="{{ asset('images/customer_thiess.webp') }}" alt="Logo Customer" height="86">
                    <img src="{{ asset('images/customer_logo-smj.png') }}" alt="Logo Customer" height="74.5">
                    <img src="{{ asset('images/customer_mitra_indah_lestari.png') }}" alt="Logo Customer" height="16">
                    <img src="{{ asset('images/customer_ABJ.jpeg') }}" alt="Logo Customer" height="12">
                    <img src="{{ asset('images/customer_gpe.png') }}" alt="Logo Customer" height="125">
                    <img src="{{ asset('images/customer_bas.png') }}" alt="Logo Customer" height="65">
                    <img src="{{ asset('images/customer_sns.png') }}" alt="Logo Customer" height="75" width="90.5">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Fleet</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_dunex.png') }}" alt="Logo Customer" height="31">
                    <img src="{{ asset('images/customer_mega_indo.jpeg') }}" alt="Logo Customer" height="93">
                    <img src="{{ asset('images/customer_LOGISJP.png') }}" alt="Logo Customer" height="46">
                    <img src="{{ asset('images/customer_krakatu.png') }}" alt="Logo Customer" height="46">
                    <img src="{{ asset('images/customer_vitrans.png') }}" alt="Logo Customer" height="42">
                    <img src="{{ asset('images/customer_puninar.png') }}" alt="Logo Customer" height="55">
                    <img src="{{ asset('images/customer_dakota.png') }}" alt="Logo Customer" height="111">
                    <img src="{{ asset('images/customer_manhattan.webp') }}" alt="Logo Customer" height="55">
                    <img src="{{ asset('images/customer_mobilindo.png') }}" alt="Logo Customer" height="72">
                    <img src="{{ asset('images/customer_cj.png') }}" alt="Logo Customer" height="38">
                    <img src="{{ asset('images/customer_emps.png') }}" alt="Logo Customer" height="32">
                    <img src="{{ asset('images/customer_kag.webp') }}" alt="Logo Customer" height="33">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Agriculture</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_rea.jpeg') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_sentosa.jpg') }}" alt="Logo Customer" height="94">
                    <img src="{{ asset('images/customer_gawi.jpeg') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_arung.png') }}" alt="Logo Customer" height="31">
                    <img src="{{ asset('images/customer_kuala_lumpur.jpg') }}" alt="Logo Customer" height="87">
                    <img src="{{ asset('images/customer_imc.png') }}" alt="Logo Customer" height="45">
                    <img src="{{ asset('images/customer_sinar_wijaya.png') }}" alt="Logo Customer" height="87">
                    <img src="{{ asset('images/customer_sukses_karya.png') }}" alt="Logo Customer" height="24">
                    <img src="{{ asset('images/customer_pancaran.jpeg') }}" alt="Logo Customer" height="94.5">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Others</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_liugong.png') }}" alt="Logo Customer" height="33.3">
                    <img src="{{ asset('images/customer_sany.png') }}" alt="Logo Customer" height="91.5">
                    <img src="{{ asset('images/customer_HD.jpg') }}" alt="Logo Customer" height="68.5">
                    <img src="{{ asset('images/customer_kobex.png') }}" alt="Logo Customer" height="90">
                    <img src="{{ asset('images/customer_halliburton.png') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_gwdc_logo.png') }}" alt="Logo Customer" height="59" style="aspect-ratio: 111.00/58.86;">
                    <img src="{{ asset('images/customer_pondasi.png') }}" alt="Logo Customer" height="90">
                    <img src="{{ asset('images/customer_indocement.png') }}" alt="Logo Customer" height="105">
                    <img src="{{ asset('images/customer_sbs.png') }}" alt="Logo Customer" height="29">
                    <img src="{{ asset('images/customer_transmaritim.svg') }}" alt="Logo Customer" height="41.5">
                    <img src="{{ asset('images/customer_kai.png') }}" alt="Logo Customer" height="51">
                    <img src="{{ asset('images/customer_pakuwon.svg') }}" alt="Logo Customer" height="41.5">
                    <img src="{{ asset('images/customer_cw.png') }}" alt="Logo Customer" height="30">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection