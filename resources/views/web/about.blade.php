@extends('plantilla.base')

@section('title', 'Quiénes Somos')
@section('style')
    {!! Html::style('css/custom.css') !!}
@endsection
@section('content')

    @include('partials.web.navbar')

    @include('partials.web.portada')

    <div class="container">
        <div class="row">
            <h2>¿Qiénes Somos?</h2>
            <div class="col-md-4">
                <img class="img-responsive" src="{{ asset('img/quienes-somos.jpg') }}" alt="">
            </div>
            <div class="col-md-8">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae varius quam. Curabitur eu ante eleifend, tristique erat in, commodo metus. Cras quis nunc cursus, viverra urna eu, rutrum dui. Phasellus ultrices tincidunt urna ut sodales. Donec dapibus felis non fermentum tincidunt. Nullam consequat tempor molestie. Proin et cursus ante. Pellentesque lectus leo, molestie vitae odio sit amet, accumsan lacinia dolor. Sed eget augue at dui tristique tempor. Cras fermentum lectus dui, lobortis laoreet massa efficitur eget. Phasellus tempus massa ut feugiat ornare. Nam ultricies lobortis nisl, sed malesuada odio iaculis vitae. Vivamus sit amet diam accumsan, dapibus nibh sit amet, dictum dolor. Nullam congue enim ornare, facilisis nisl ac, bibendum lorem. Donec ac volutpat risus, ac rhoncus urna. Maecenas congue neque dui, vel cursus orci volutpat ut.
                </p>
                <p class="text-justify">
                    Suspendisse pellentesque, orci nec tempor malesuada, elit lectus elementum ligula, eu scelerisque nisl lorem eu sem. Vivamus eget nisl dictum, lobortis nibh a, cursus nulla. Nulla mi purus, fringilla vitae consequat a, fermentum eu odio. Morbi quis felis mauris. Praesent tristique faucibus eros ut convallis. Maecenas sed lacus metus. Nullam placerat sit amet arcu vel ultrices. Donec vel ante quis elit pulvinar rutrum. In lobortis dui vel odio aliquet, ac tincidunt sapien volutpat. Morbi quam magna, pulvinar ut urna sed, pretium porta felis. Curabitur tellus ex, consectetur eu pretium id, ultrices ut risus.
                </p>
                <p class="text-justify">
                    Maecenas sagittis ultricies ligula, sed consequat sapien consequat vitae. Pellentesque nec justo augue. Fusce ut dictum nunc. In eu ligula fermentum, blandit felis ac, vulputate nisi. Aliquam nulla ligula, placerat nec lectus in, porta viverra ex. Curabitur bibendum, massa quis egestas ultrices, tortor nisl varius nisl, sollicitudin varius elit enim in enim. Ut porta viverra lectus id accumsan. Vestibulum pellentesque, lacus quis pharetra lacinia, libero ex tempus massa, vel feugiat enim turpis ac lacus. Nullam eu magna laoreet, tincidunt turpis nec, blandit justo. Morbi vitae diam finibus, mattis nisl at, cursus velit. Pellentesque id arcu non enim bibendum ultrices sit amet sit amet purus. Nam at orci vestibulum, mollis tortor in, elementum sapien. Aliquam erat volutpat. Phasellus bibendum tellus dui, et tincidunt felis venenatis consectetur. Nam venenatis mi leo, vel iaculis lorem hendrerit eu. Fusce a metus ut nulla convallis congue.
                </p>
            </div>
        </div>
    </div>

@endsection