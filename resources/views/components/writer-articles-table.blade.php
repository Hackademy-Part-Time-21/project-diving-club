<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tag</th>
            <th scope="col">Creato</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle  }}</td>
            <td>{{ $category->name ?? 'Non categorizzato' }}</td>
            <td>
            @foreach ($article->tags as $tag)
                {{ $tag->name }}
            @endforeach
                </td> 
                <td>{{ $article->created_at->format('d/m/y') }}</td>  
                <td>
                    <a href="{{ route('article.show' , compact('article')) }}" class="btn btn-info text-white">Leggi l'articolo</a>
                    <a href="{{ route('article.edit' , compact('article')) }}" class="btn btn-warinig text-white">Modifica L'articolo</a>
                    <form action="{{ route('article.destroy' , compact('article')) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina articolo</button>
                    </form>
                </td>
    </tr>
        @endforeach
    </tbody>
</table>