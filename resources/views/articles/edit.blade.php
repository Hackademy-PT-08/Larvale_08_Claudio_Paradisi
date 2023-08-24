<x-layout>
@if($errors->any())
        @foreach($errors->all() as $error)
            
            <div class="alert bg-danger my-5">{{$error}}</div>    
            
        @endforeach
    @endif
        <div class="my-5"><br/></div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Modifica il tuo articolo</h1>
                    <h3><span class="text-dark"><i class="fa-solid fa-hippo"></i></span>Blogaravel.it ti permette di modificare tutti i tuoi articoli senza chiedere un centesimo in cambio</h3>
                </div>
            </div>
        </div>

        <form id="storeForm" class="my-5" method="POST" action="{{route('article.update', $article->id)}}" enctype="multipart/form-data" >
            <!-- enctype="multipart/form-data" è essenziale per immettere i file nel form -->
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'articolo</label>
                <input id="titleInput" type="text" class="form-control" name="title" value="{{$article->title}}" >
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Il tuo articolo</label>
                <textarea id="articleInput" class="form-control"  name="article" rows="10" cols="30">{{$article->article}}</textarea>
            </div>
            <div class="mb-3 dropdown">
                <label for="category" class="form-control dropdown-toggle" type="button" data-bs-toggle="dropdown">Categorie</label>
                <select name="category[]" id="category" multiple class="form-control dropdown-menu">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" class="dropdown-item">{{$category->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="mb-3 mt-5">
                <label for="image" class="form-label">Inserisci un'immagine per rendere il tuo articolo unico</label> <br>
                <input type="file" name="image" id="" >
            </div>
            <input type="hidden" name="id" value="">
            <button id="myInput" type="submit" class="btn btn-primary">Modifica</button>
        </form>
        
    
        
        
        


</x-layout>