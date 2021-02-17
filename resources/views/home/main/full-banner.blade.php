<div class="mb-8">
    <a href="{{$mainbanner->url ?? ''}}" class="d-block text-gray-90">
        <div class="bg-img-huincha pt-3" style="background-image: url('{{asset('assets/img/1400X143/img1.png')}}');";>
            <div class="space-top-2-md p-4 pt-4 pt-md-5 pt-lg-6 pt-xl-5 pb-lg-4 px-xl-14 px-lg-6" style="display: flex; justify-content: center; align-items: center">
                <div class="flex-horizontal-center overflow-hidden">

                    <h1 class="text-lh-38 font-size-30 font-weight-light mb-3 flex-shrink-0 flex-md-shrink-1 title-huincha" id="admin-title-huincha" style="">{{ $mainbanner ? strtoupper($mainbanner->title) : ''}}</h1>
                    <div class="flex-content-center ml-4 flex-shrink-0 huincha-price">
                        <div class="bg-primary rounded-lg info-huincha">
                            <div style="margin-top: 20px;">
                                <em class="font-size-14 font-weight-light txt-huincha" style="font-weight: lighter" id="admin-texto-huincha">{{ $mainbanner->text ?? ''}}</em>
                                <div class="font-size-30 txt-precio-huincha" style="font-weight: 700 !important;">
                                    <sup style="font-size: 60%">$</sup><p id="admin-precio-huincha" style="display: inline">{{ $mainbanner ? number_format($mainbanner->price, 0, '', '.') : '0'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </a>
</div>