 @extends('mainlayout')

 @section('content')
<div class="body-container">
    <div>
        <div class="py-20px">
            <p class="text-center text-32 font-medium">Services</p>
        </div>
        <div class="services-section">
            @foreach ($services as $service)
                <a class="service-card" data-toggle="modal" data-target="#modal-service-{{ $service->id }}">
                    <img class="service-img-card" src="{{ asset($service->image) }}" alt="Service">
                    <div style="padding: 20px;">
                        <p class="text-20 font-bold color-primary-500 text-center" style="margin-bottom: 12px;">{{ $service->name }}</p>
                        <div class="text-10 color-gray-700 text-center" style="line-height: 130%">{!! $service->description !!}</div>
                    </div>
                </a>

                {{-- Modal service --}}
                <div class="modal fade" id="modal-service-{{ $service->id }}">
                    <div class="modal-dialog modal-dialog-centered modal-stable">
                        <div class="modal-content" style="width: 100%; padding: 0; gap: 0;">
                            <div style="padding: 20px; margin-left: auto;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" style="margin-left: auto; cursor: pointer" data-dismiss="modal">
                                    <path d="M24.1673 3.18203L21.8173 0.832031L12.5007 10.1487L3.18398 0.832031L0.833984 3.18203L10.1507 12.4987L0.833984 21.8154L3.18398 24.1654L12.5007 14.8487L21.8173 24.1654L24.1673 21.8154L14.8507 12.4987L24.1673 3.18203Z" fill="black"/>
                                </svg>
                            </div>

                            <div style="padding: 20px; width: 100%;">
                                <div class="flex-row" style="gap: 20px; align-items: center;">
                                    <img class="service-img-modal" src="{{ asset($service->image) }}" alt="Service">
                                    <div>
                                        <p class="text-40 font-bold color-primary-500" style="margin-bottom: 12px;">{{ $service->name }}</p>
                                        <div class="text-20 color-black" style="line-height: 150%">{!! $service->description !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px 0; background: var(--color-gray-100);  width: 100%; margin-top: 20px;">
                                <p class="text-20 font-bold color-gray-600 text-center">How This Service Works</p>
                                <p class="text-12 text-center" style="line-height: 18px;">Reach out to our team to schedule your service or request assistance. We'll guide you through the next steps.</p>
                                <div class="service-flow-section">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($flows as $flow)
                                        @if ($flow->service_id == $service->id)
                                            <div class="service-flow-card">
                                                <div class="flex-row" style="margin-bottom: 12px; justify-content: space-between; width: 100%;">
                                                    <div class="service-flow-icon-bg">
                                                        <img src="{{ asset($flow->image) }}" alt="Flow Icon" width="20" height="20">
                                                    </div>
                                                    <p class="service-flow-num">{{ sprintf("%02d", $no) }}</p>
                                                </div>

                                                <div class="text-center" style="padding: 6px;">
                                                    <p class='text-20 font-medium color-black' style="margin-bottom: 12px;">{{$flow->name}}</p>
                                                    <div class="text-12 color-gray-700">{!! $flow->description !!}</div>
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