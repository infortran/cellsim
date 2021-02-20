@extends('templates.app')

@section('content')

@include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">

    @include('templates.breadcrumb')
    <h1 style="text-align: center">Resultado de la búsqueda</h1>


    @include('templates.producto-grid')

</main>
<!-- ========== END MAIN CONTENT ========== -->

@include('templates.go-top')

@include('templates.footer')


@endsection