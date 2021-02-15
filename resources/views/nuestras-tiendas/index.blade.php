@extends('templates.app')

@section('content')
    @include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            @include('templates.breadcrumb')
            @include('nuestras-tiendas.shops-ubications')
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

    @include('templates.go-top')

    @include('templates.footer')
@endsection