 <div class="col-12 col-md-8 col-lg-6">


    <div class="card h-100">
        {{-- implementare storage --}}
        <img src="@if($article->image) {{Storage::url($article->image)}} @else{{Storage::url('public/images/default.jpg')}} @endif" class="card-img-top card-image-detail mt-3 card-img-custom" alt="{{ $article->title }}">


        <div class="card-body text-center">
            <h5 class="card-title fw-bold">{{ $article->title }}</h5>

            <p class="mb-1">
                <span>{{ $article->subtitle}}</span>
            </p>

            <p class="mb-1">
                <span>{{ $article->content }}</span>
            </p>



        </div>

        <div class="text-center mb-3 d-flex justify-content-center">

            <a href="{{route('articles.edit', $article)}}" class="btn btn-primary">Modifica</a>

            <a href="{{ route('articles.index') }}" class="btn btn-success mx-4">Catalogo</a>



        </div>





    </div>

</div>
