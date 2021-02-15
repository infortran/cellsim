@foreach($tiendas as $tienda)
    <div style="display: flex; align-items: center">
        <div class="card-tienda">
            <div style="height: 190px">
                <div class="img-tienda" style="background-image: url('{{ asset('uploads/tiendas/300x300'.'/'.$tienda->img) }}');">
                    <div class="status">
                        Tienda {{ $tienda->status === 1 ? 'abierta' : 'cerrada'}}
                    </div>
                </div>
            </div>

            <div class="tienda-informacion">
                <h2>{{ $tienda->title }}</h2>
                <h6>Direccion: {{ $tienda->direction }}</h6>
                <h6>Ciudad: {{ $tienda->city }}</h6>
                <h6>Pais: {{ $tienda->country }}</h6>
                <h6>Horario de Atencion: {{ $tienda->schedule }}</h6>
                <h6>Telefono: {{ $tienda->phone }}</h6>
            </div>
        </div>
    </div>

@endforeach