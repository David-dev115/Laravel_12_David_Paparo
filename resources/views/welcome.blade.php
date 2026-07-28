<x-layout>

    <div class="container py-5 text-center">

        <h1 class="display-4 fw-bold">
            Daily News
        </h1>

        <p class="lead my-4">
            Rimani aggiornato con notizie di cronaca, sport, tecnologia e molto altro.
        </p>

        <div class="d-flex justify-content-center gap-3">
            <a href="{{route('articles.index')}}" class="btn btn-1-custom">
                Leggi articoli
            </a>

            <a href="{{route('articles.create')}}" class="btn btn-2-custom">
                Pubblica articolo
            </a>
        </div>

    </div>

</x-layout>
