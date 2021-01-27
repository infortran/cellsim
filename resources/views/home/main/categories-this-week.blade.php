<div class="mb-6 bg-gray-7 py-6">
    <div class="container">
        <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0 mb-5">
            <h3 class="section-title mb-0 pb-2 font-size-22">Busca por categoria</h3>
        </div>
        <div class="row flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
            @foreach($categorias as $categoria)
            <div class="col-md-4 col-lg-3 col-xl-4 col-xl-2gdot4 mb-3 flex-shrink-0 flex-md-shrink-1">
                <div class="bg-white overflow-hidden shadow-on-hover h-100 d-flex align-items-center" style="transition: all ease .3s">
                    <a href="/categorias/{{ strtolower($categoria->name) }}" class="d-block pr-2 pr-wd-6">
                        <div class="media align-items-center">
                            <div class="pt-2">
                                <img class="img-fluid transform-rotate-15" src="../../assets/img/100X100/categorias/{{$categoria->img}}" alt="Image Description">
                            </div>
                            <div class="ml-3 media-body">
                                <h6 class="mb-0 text-gray-90">{{$categoria->name}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>