<x-layout>
        <div class="container-fluid p-5 bg-info text-center text-white">
                <div class="row justify-content-center">
                    <h1 class="display-1">
                    Bentornato , amministratore
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
                        <h2>Richiesta per ruolo amministratore</h2>
                        <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richiesta per ruolo revisore</h2>
                        <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>Richiesta per ruolo redattore</h2>
                        <x-requests-table :roleRequests="$writerRequests" role="redattore" />
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>I tags della piattaforma </h2>
                        <x-metainfo-table :metaInfos="$tags" role="tags" />
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>La categoria della piattaforma </h2>
                        <x-metainfo-table :metaInfos="$categories" role="categories" />
                        
                        <form action="{{ route('admin.storeCategory') }}" class="d-flex" method="POST">
                            @csrf
                            <input type="text" name="name" class="form-control me-2" placeholder="inserisci una nuova categra">
                            <button type="submit" class="btn btn-success text-white">Agg</button>
                        </form>
                    </div>
                </div>
            </div>
</x-layout>