@extends('templates.app')

@section('content')

@include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">

    @include('templates.breadcrumb')
    <h1 class="title">Resultado de la búsqueda</h1>

    @if($query_result->count() === 0)
        <div class="no-product">
            <div class="icon-container">
                <div class="icon"><i class="material-icons">search_off</i></div>
            </div>
            <h2>No hay Productos</h2>
            <p>Lo sentimos no encontramos un producto relacionado con su busqueda "<strong>{{ $query }}</strong>"</p>
        </div>
    @else
        <p style="text-align: center">Los resultados para su busqueda "<strong>{{ $query }}</strong>" son:</p>
    @endif



    @include('templates.producto-grid')

</main>
<!-- ========== END MAIN CONTENT ========== -->

@include('templates.go-top')

@include('templates.footer')


@endsection