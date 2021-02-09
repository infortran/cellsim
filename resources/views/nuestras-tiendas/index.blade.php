@extends('templates.app')

@section('content')
    @include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            @include('templates.breadcrumb')
            <h1 style="text-align: center">Nuestras Tiendas</h1>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

    @include('templates.go-top')

    @include('templates.footer')
@endsection