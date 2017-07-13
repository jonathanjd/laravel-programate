@extends('plantilla.base')
@section('title','Listar Artículos')

@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        @include('flash::message')
        <h1>Listar Artículos</h1>
        <hr>
        <div id="tableCategory" class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Mostrar</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td><a class="btn btn-primary" href="{{ route('article.show', $article) }}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                            <td><a class="btn btn-warning" href="{{ route('article.edit', $article) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
                            <td><a class="btn btn-danger" href="{{ route('deleteArticle', $article) }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        <div id="paginate">
            {{ $articles->links() }}
        </div>
    </div>

@endsection