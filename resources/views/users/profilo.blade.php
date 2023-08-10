<x-layout>
    <section id="sectionProfilo">
        <div class="container shadow my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <figure>
                        <img  class="img-fluid" src="https://picsum.photos/200" alt="immagine profilo">
                        <figcaption>la tua immagine del profilo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Benvenuto nel tuo profilo {{auth()->user()->name}}</h1>
                </div>
            </div>
        </div>
        
</section>

<section id="articleCards">
        <p class="h1 text-center">
            I tuoi articoli
        </p>
        <div class="container my-5">
            <div class="row justify-content-center">
            @foreach($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card my-card" style="width: 18rem;"> 
                    @if($article->image !== '')
                        <img src="{{asset('storage/' . $article->image) }}" class="card-img-top" alt="{{$article->title}}">
                    @else  
                    <img src="https://picsum.photos/200/120" class="card-img-top" alt="{{$article->title}}">
                    @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text text-truncate">{!!$article->article!!}...</p>
                            <!-- substr($variabile, da carattere , a carattere) -->
                            <div class="col-8 my-2">  
                                <a href="{{route('article.show', $article->id)}}" class="btn btn-primary">In dettaglio</a>
                            </div>
                            <div class="col-8 my-2">
                                <a href="{{route('article.edit',$article->id)}}" class="btn btn-primary">Modifica</a>
                            </div>
                            <div class="col-8 my-2">
                                <form action="{{route('article.delete',$article->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Elimina">
                                </form>
                            </div> 

                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </section>

</x-layout>