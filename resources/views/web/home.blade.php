@extends('plantilla.base')

@section('title', 'Blog Programate')
@section('style')
    {!! Html::style('css/custom.css') !!}
@endsection
@section('content')

    @include('partials.web.navbar')

    @include('partials.web.portada')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('partials.web.article')
            </div>
        
            <div class="col-md-4">
                @include('partials.web.aside')
            </div>
        </div>
    </div>

@endsection