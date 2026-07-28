<x-layout>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <h2>tutti gli articoli</h2>

</x-layout>
