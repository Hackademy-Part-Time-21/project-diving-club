<x-layout>
        <div class="container-fluid p-5 bg-info text-center text-white">
                <div class="row justify-content-center">
                    <h1 class="display-1">
                    Bentornato , Revisore
                    </h1>
                </div>
            </div>

            @if (session('messsage'))
            <div class="alart alart-success text-center">
                {{ session('message') }}
            </div>

            @endif  
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli da revisionare</Article></h2>
                        <x-articles-table :articles="$unrevisionedArticles" />
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli pupplicati</h2>
                        <x-articles-table :articles="$acceptedArticles"/>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Articoli respinti</h2>
                        <x-articles-table :articles="$rejectedArticles"/>
                    </div>
                </div>
            </div>
</x-layout>