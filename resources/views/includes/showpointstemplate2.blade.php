<!-- Main -->
<article id="main">

    <section class="wrapper style5">
        <div class="inner">

            <h2>{!! $pointofinterests->name !!}</h2>

            <p>{{ $pointofinterests->text }}</p>
            <hr />

            <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    @php
                        $numeroDeimagen = 1;

                    @endphp

                    @if ($resources->isNotEmpty())


                        @foreach ($resources as $resource)
                            @if ($numeroDeimagen == 1)
                                <div class="col-12">
                                    <span class="image fit"><img src="{{ $resource->route }}" alt="">
                                    </span>
                                </div>
                                @php
                                    $numeroDeimagen = 2;

                                @endphp
                            @else
                                <div class="col-4">
                                    <span class="image fit"><img src="{{ $resource->route }}" alt="">
                                    </span>
                                </div>


                @endif
                @endforeach

                @endif

            </div>


            </div>
        </div>







        </div>
    </section>
</article>
