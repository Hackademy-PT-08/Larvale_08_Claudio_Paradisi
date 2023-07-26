<x-layout>

        <form  method="POST" action="{{route('store-article')}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo</label>
                <input type="text" class="form-control" name="title" >
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Il tuo articolo</label>
                <textarea class="form-control"  name="article" rows="10" cols="30"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>


</x-layout>