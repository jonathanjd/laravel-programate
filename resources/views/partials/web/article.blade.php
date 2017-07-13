@foreach($articles as $article)
<article>
    <a href="{{ route('post', $article->slug) }}">
        <h2>{{ $article->title }}</h2>
    </a>
    <p class="lead">
        by <a href="#">{{ $article->user->name }}</a>
    </p>
    <p>
        <span class="glyphicon glyphicon-time"></span> {{ $article->created_at->diffForHumans() }}
    </p>
    <hr>
    <img class="img-responsive" src="{{ asset('img/articles/' . $article->image->name) }}" alt="">
    <hr>
        {!! $article->contentReadMore !!}
    <a class="btn btn-primary" href="{{ route('post', $article->slug) }}">Leer Más</a>
    <hr>
</article>
@endforeach

<div id="paginate">
    {{ $articles->links() }}
</div>