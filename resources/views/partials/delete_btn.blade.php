<div>
    <form action="{{ route('comics.destroy', $comic->id)}}" method="post" class="form-delete">
        @csrf
        @method('delete')
        
        <button type= "submit">Elimina</button>
    </form>
</div>
