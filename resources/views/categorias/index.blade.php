@extends('templates.app')

@section('content')

    @include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">

            @include('templates.breadcrumb')



            @include('home.main.categories-this-week')
            @include('templates.producto-grid')
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

@include('templates.go-top')

@include('templates.footer')


@endsection