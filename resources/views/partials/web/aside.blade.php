<aside>
    <section>
        <div class="well">
            <h4>Buscar Artículo</h4>
            {!! Form::open(['action' => 'WebController@home', 'method' => 'GET']) !!}
            <div class="input-group">
                <input type="text" class="form-control" name="buscar">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
    <section>
        <div class="well">
            <h4>Categorías</h4>
            <ul class="list-group">

                @foreach($categories as $category)
                    <a href="#" class="list-group-item"><span class="badge">{{ $category->countPost }}</span>{{ $category->name }}</a>
                @endforeach

            </ul>
        </div>
    </section>
</aside>