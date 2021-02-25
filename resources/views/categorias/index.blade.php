@extends('templates.app')

@section('content')

    @include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">

            @include('templates.breadcrumb')



            @include('templates.producto-grid')
            @include('home.main.categories-this-week')
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

@include('templates.go-top')

@include('templates.footer')


@endsection