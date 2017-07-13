@extends('plantilla.base')
@section('title', 'Crear Artículo')
@section('style')
    {!! Html::style('plugins/bootstrapFileInput/css/fileinput.min.css') !!}
    {!! Html::style('plugins/parsley/css/parsley.css') !!}
@endsection
@section('content')

    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Crear Artículo</h1>
        <hr>
        @include('partials.admin.errorMessage')
        <div class="col-md-12">
        {!! Form::open(['action' => 'ArticleController@store', 'method' => 'POST','class' => 'form-horizontal', 'files' => true]) !!}
            
            <div class="form-group">
                {!! Form::label('title', 'Título:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Contenido:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::textarea('content', null, ['id' => 'article-ckeditor', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('category', 'Categoría:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::select('categories_id', $categories, null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('imagen', 'Imagen:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::file('image',['class' => 'file', 'data-show-upload' => 'false']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        </div>

    </div>
    @ckeditor('article-ckeditor')
@endsection
@section('script')
    {!! Html::script('plugins/bootstrapFileInput/js/fileinput.min.js') !!}
    {!! Html::style('plugins/parsley/js/parsley.min.css') !!}
@endsection
