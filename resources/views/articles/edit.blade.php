
<x-layout>


    <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="col-12 col-md-6 col-lg-5">

                <h2 class="mb-4 text-center">Modifica Articolo {{$article->title}}</h2>


                {{-- <x-display-error></x-display-error> --}}



                <div class="card shadow p-4">

                    <form method="POST" action="{{route('articles.update' , $article )}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{old('title' , $article->title)}}">
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo</label>
                            <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle' , $article->subtitle)}}">
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">contenuto</label>
                            <textarea name="content" id="content" class="form-control" rows="6">{{ old('content' , $article->content) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <img src="{{ Storage::url($article->image) }}" class="img-fluid mb-3 d-block mx-auto">
                            <label for="image" class="form-label">cambia immagine</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>

                        <div class="d-flex justify-content-between gap-3 mt-3">

                            <button type="submit" class="btn btn-primary flex-grow-1">
                                Conferma modifiche
                            </button>

                            <a href="{{ route('articles.index') }}" class="btn btn-success">
                                Ritorna al Catalogo
                            </a>

                        </div>




                    </form>

                </div>

            </div>

        </div>
    </div>

</x-layout>
