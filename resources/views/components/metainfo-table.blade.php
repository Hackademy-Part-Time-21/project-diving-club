<table class="table table-striped table-hover border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Tag</th>
                <th scope="col">q.ta article collegati</th>
                <th scope="col">Aggiorna</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($metaInfos as $metaInfos)

            <tr>
                <th scope="row">{{ $metaInfos->id }}</th>
                <td>{{ $metaInfos->name }}</td>
                <td>{{ count($metaInfos->articles) }}</td>
        @if ($metaInfos == 'tags')
        <td>
            <form action="{{ route('admin.editTag' , ['tag' => $metaInfos]) }}" method="POST" >
                @csrf
                @method('put')
                    <input type="text" name="name" placeholder="Novo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
            </form>
        </td>
        <td>
            <form action="{{ route('admin.deleteTag' , ['tag' => $metaInfos]) }}" method="POST" >
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger text-white">Aggiorna</button>
            </form>
        </td>
        @else
        <td>
            <form action="{{ route('admin.editCategory' , ['category' =>$metaInfos]) }}" method="POST">
                @csrf
                @method('put')
                    <input type="text" name="name" placeholder="Novo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
            </form>
        </td>
        <td>
            <form action="{{ route('admin.deleteCategory' , ['category' =>$metaInfos]) }}" method="POST" >
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger text-white">Aggiorna</button>
            </form>
        </td>
            @endif    
            </tr>
    @endforeach    
    </tbody>
</table>