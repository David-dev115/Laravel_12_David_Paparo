<x-layout>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif


    <section>


        <div class="container">

            <h2 class="text-center py-5">tutti gli articoli</h2>



            <div class="row">

                @foreach ($articles as $article)


                <div class="col-12 col-md-12 mb-4">

                    {{-- card dinamica--}}

                    <x-card  :article="$article"  ></x-card>

                    {{-- fine card dinamica --}}



                </div>

                @endforeach


            </div>

        </div>





    </section>



</x-layout>
