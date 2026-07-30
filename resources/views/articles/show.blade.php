

<x-layout>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif


    <div class="container py-5">


        <div class="row justify-content-center">



            {{-- card dinamica component --}}

            <x-card_detail :article="$article"/>


            {{-- card dinamica component --}}


        </div>

    </x-layout>
