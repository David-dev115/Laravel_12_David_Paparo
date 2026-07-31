

<div class="card h-100">


    <img src="@if($article->image) {{Storage::url($article->image)}} @else{{Storage::url('public/images/default.jpg')}} @endif " class="card-img-top card-image mt-3 card-img-custom" alt="immagine articolo">



    <div class="card-body text-center">
        <h5 class="card-title fw-bold">{{ $article->title }}</h5>

        <p class="mb-1">
            {{-- <span class="fw-semibold text-secondary">sottotitolo</span> --}}
            <span>{{ $article->subtitle}}</span>
        </p>


        <div class="text-center mb-3">

                {{-- {{route('articles.show' , $article)}} --}}
            <a href="{{route('articles.show' , $article)}}" class="btn btn-success">
                Leggi Articolo completo
            </a>
        </div>

    </div>


</div>
