@extends('plantilla.base')

@section('title', $article->title)
@section('style')
    {!! Html::style('css/custom.css') !!}
@endsection
@section('content')

    @include('partials.web.navbar')

    @include('partials.web.portada')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article>
                    <a href="#">
                        <h2>{{ $article->title }}</h2>
                    </a>
                    <p class="lead">
                        by <a href="#">{{ $article->user->name }}</a>
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-time"></span> {{ $article->created_at->diffForHumans() }}
                    </p>
                    <hr>
                    <img class="img-responsive" src="{{ asset('img/articles/'. $article->image->name) }}" alt="">
                    <hr>
                    {!! $article->content !!}
                    <hr>
                </article>
                <div id="comentario">
                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://blog-gt6bs51zzb.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        
            <div class="col-md-4">
                @include('partials.web.aside')
            </div>
        </div>
    </div>

@endsection