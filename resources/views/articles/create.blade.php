
<x-layout>


    <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="col-12 col-md-6 col-lg-5">

                <h2 class="text-white mb-4">Aggiungi articolo</h2>


                    {{-- da implementare --}}
                {{-- <x-display-error></x-display-error> --}}


                <div class="card shadow p-4">

                    <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo</label>
                            <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">contenuto</label>
                            <textarea name="content" id="content" class="form-control" rows="6">{{ old('content') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Inserisci immagine</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            aggiungi
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>

</x-layout>
