<x-layout>
        <div class="my-5"><br/></div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Crea il tuo articolo</h1>
                    <h3><span class="text-dark"><i class="fa-solid fa-hippo"></i></span>Blogaravel.it ti permette di scrivere un infinità di articoli senza chiedere un centesimo in cambio</h3>
                </div>
            </div>
        </div>

        <form id="storeForm" class="my-5" method="POST" action="{{route('store-article')}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo</label>
                <input id="titleInput" type="text" class="form-control" name="title" >
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Il tuo articolo</label>
                <textarea id="articleInput" class="form-control"  name="article" rows="10" cols="30"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>


</x-layout>