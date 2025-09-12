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
                    <img src="{{ asset('images/customer_buma.webp') }}" alt="Logo Customer" height="21">
                    <img src="{{ asset('images/customer_dh.webp') }}" alt="Logo Customer" height="42.857">
                    <img src="{{ asset('images/customer_kpc.webp') }}" alt="Logo Customer" height="40.367">
                    <img src="{{ asset('images/customer_Harita Nickel_Primer.webp') }}" alt="Logo Customer" height="25">
                    <img src="{{ asset('images/customer_thriveni_earth_movers_pvt_ltd_logo.webp') }}" alt="Logo Customer" height="100">
                    <img src="{{ asset('images/customer_Mandiricontractor-1-768x383.webp') }}" alt="Logo Customer" height="43">
                    <img src="{{ asset('images/customer_thiess.webp') }}" alt="Logo Customer" height="86">
                    <img src="{{ asset('images/customer_logo-smj.webp') }}" alt="Logo Customer" height="74.5">
                    <img src="{{ asset('images/customer_mitra_indah_lestari.webp') }}" alt="Logo Customer" height="16">
                    <img src="{{ asset('images/customer_ABJ.webp') }}" alt="Logo Customer" height="12">
                    <img src="{{ asset('images/customer_gpe.webp') }}" alt="Logo Customer" height="125">
                    <img src="{{ asset('images/customer_bas.webp') }}" alt="Logo Customer" height="65">
                    <img src="{{ asset('images/customer_sns.webp') }}" alt="Logo Customer" height="75" width="90.5">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Fleet</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_dunex.webp') }}" alt="Logo Customer" height="31">
                    <img src="{{ asset('images/customer_mega_indo.webp') }}" alt="Logo Customer" height="93">
                    <img src="{{ asset('images/customer_LOGISJP.webp') }}" alt="Logo Customer" height="46">
                    <img src="{{ asset('images/customer_krakatu.webp') }}" alt="Logo Customer" height="46">
                    <img src="{{ asset('images/customer_vitrans.webp') }}" alt="Logo Customer" height="42">
                    <img src="{{ asset('images/customer_puninar.webp') }}" alt="Logo Customer" height="55">
                    <img src="{{ asset('images/customer_dakota.webp') }}" alt="Logo Customer" height="111">
                    <img src="{{ asset('images/customer_manhattan.webp') }}" alt="Logo Customer" height="55">
                    <img src="{{ asset('images/customer_mobilindo.webp') }}" alt="Logo Customer" height="72">
                    <img src="{{ asset('images/customer_cj.webp') }}" alt="Logo Customer" height="38">
                    <img src="{{ asset('images/customer_emps.webp') }}" alt="Logo Customer" height="32">
                    <img src="{{ asset('images/customer_kag.webp') }}" alt="Logo Customer" height="33">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Agriculture</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_rea.webp') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_sentosa.webp') }}" alt="Logo Customer" height="94">
                    <img src="{{ asset('images/customer_gawi.webp') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_arung.webp') }}" alt="Logo Customer" height="31">
                    <img src="{{ asset('images/customer_kuala_lumpur.webp') }}" alt="Logo Customer" height="87">
                    <img src="{{ asset('images/customer_imc.webp') }}" alt="Logo Customer" height="45">
                    <img src="{{ asset('images/customer_sinar_wijaya.webp') }}" alt="Logo Customer" height="87">
                    <img src="{{ asset('images/customer_sukses_karya.webp') }}" alt="Logo Customer" height="24">
                    <img src="{{ asset('images/customer_pancaran.webp') }}" alt="Logo Customer" height="94.5">
                </div>
            </div>
            <div class="bci-customer-rectangle-card">
                <div class="bci-customer-title-card">
                    <p>Others</p>
                </div>
                <div class="bci-customer-value-card">
                    <img src="{{ asset('images/customer_liugong.webp') }}" alt="Logo Customer" height="33.3">
                    <img src="{{ asset('images/customer_sany.webp') }}" alt="Logo Customer" height="91.5">
                    <img src="{{ asset('images/customer_HD.webp') }}" alt="Logo Customer" height="68.5">
                    <img src="{{ asset('images/customer_kobex.webp') }}" alt="Logo Customer" height="90">
                    <img src="{{ asset('images/customer_halliburton.webp') }}" alt="Logo Customer" height="131">
                    <img src="{{ asset('images/customer_gwdc_logo.webp') }}" alt="Logo Customer" height="59" style="aspect-ratio: 111.00/58.86;">
                    <img src="{{ asset('images/customer_pondasi.webp') }}" alt="Logo Customer" height="90">
                    <img src="{{ asset('images/customer_indocement.webp') }}" alt="Logo Customer" height="105">
                    <img src="{{ asset('images/customer_sbs.webp') }}" alt="Logo Customer" height="29">
                    <img src="{{ asset('images/customer_transmaritim.svg') }}" alt="Logo Customer" height="41.5">
                    <img src="{{ asset('images/customer_kai.webp') }}" alt="Logo Customer" height="51">
                    <img src="{{ asset('images/customer_pakuwon.svg') }}" alt="Logo Customer" height="41.5">
                    <img src="{{ asset('images/customer_cw.webp') }}" alt="Logo Customer" height="30">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection