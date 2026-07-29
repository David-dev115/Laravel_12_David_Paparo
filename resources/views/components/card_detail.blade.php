 <div class="col-12 col-md-8 col-lg-6">


    <div class="card h-100">
        {{-- implementare storage --}}
        <img src="{{ $article->image_url}}" class="card-img-top card-image-detail mt-3" alt="immagine articolo">

        <div class="card-body text-center">
            <h5 class="card-title fw-bold">{{ $article->title }}</h5>

            <p class="mb-1">
                <span>{{ $article->subtitle}}</span>
            </p>

            <p class="mb-1">
                <span>{{ $article->content }}</span>
            </p>



        </div>

    </div>

</div>
