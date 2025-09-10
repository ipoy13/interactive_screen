 @extends('mainlayout')

 @section('content')
<div class="body-container">
    <div>
        <div class="py-40px">
            <p class="text-center text-64 font-medium">Services</p>
        </div>
        <div class="services-section">
            @foreach ($services as $service)
                <a class="service-card" data-toggle="modal" data-target="#modal-service-{{ $service->id }}">
                    <img class="service-img-card" src="{{ asset($service->image) }}" alt="Service">
                    <div style="padding: 40px;">
                        <p class="text-40 font-bold color-primary-500 text-center" style="margin-bottom: 24px;">{{ $service->name }}</p>
                        <div class="text-20 color-gray-700 text-center" style="line-height: 130%">{!! $service->description !!}</div>
                    </div>
                </a>

                {{-- Modal service --}}
                <div class="modal fade" id="modal-service-{{ $service->id }}">
                    <div class="modal-dialog modal-dialog-centered modal-stable">
                        <div class="modal-content" style="width: 100%; padding: 0; gap: 0;">
                            <div style="padding: 40px; margin-left: auto;">
                                <p class="material-symbols" style="font-size: 80px; color: #000; cursor: pointer" data-dismiss="modal">close</p>
                            </div>

                            <div style="padding: 40px; width: 100%;">
                                <div class="flex-row" style="gap: 40px; align-items: center;">
                                    <img class="service-img-modal" src="{{ asset($service->image) }}" alt="Service">
                                    <div>
                                        <p class="text-80 font-bold color-primary-500" style="margin-bottom: 24px;">{{ $service->name }}</p>
                                        <div class="text-40 color-black" style="line-height: 150%">{!! $service->description !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 40px; background: var(--color-gray-100);  width: 100%; margin-top: 40px;">
                                <p class="text-40 font-bold color-gray-600 text-center">How This Service Works</p>
                                <p class="text-24 text-center" style="line-height: 36px;">Reach out to our team to schedule your service or request assistance. We'll guide you through the next steps.</p>
                                <div class="service-flow-section">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($flows as $flow)
                                        @if ($flow->service_id == $service->id)
                                            <div class="service-flow-card">
                                                <div class="flex-row" style="margin-bottom: 24px; justify-content: space-between; width: 100%;">
                                                    <div class="service-flow-icon-bg" style="margin-left: 40%;">
                                                        <img src="{{ asset($flow->image) }}" alt="Flow Icon" width="40" height="40">
                                                    </div>
                                                    <p class="service-flow-num">{{ sprintf("%02d", $no) }}</p>
                                                </div>

                                                <div class="text-center" style="padding: 12px;">
                                                    <p class='text-40 font-medium color-black' style="margin-bottom: 24px;">{{$flow->name}}</p>
                                                    <div class="text-24 color-gray-700">{!! $flow->description !!}</div>
                                                </div>
                                            </div>
                                            @php
                                                $no++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection