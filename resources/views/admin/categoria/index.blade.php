@extends('plantilla.base')
@section('title','Listar Categorías')

@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        @include('flash::message')
        <h1>Listar Categorías</h1>
        <hr>
        <div id="tableCategory" class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Mostrar</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><a class="btn btn-primary" href="{{ route('category.show', $category->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                            <td><a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
                            <td><a class="btn btn-danger" href="{{ route('deleteCategory', $category->id) }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        <div id="paginate">
            {{ $categories->links() }}
        </div>
    </div>

@endsection