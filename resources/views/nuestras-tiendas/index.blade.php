@extends('templates.app')

@section('content')
    @include('templates.header.index')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            @include('templates.breadcrumb')
            @include('nuestras-tiendas.store-ubications')
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

    @include('templates.go-top')

    @include('templates.footer')
@endsection