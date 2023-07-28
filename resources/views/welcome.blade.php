<x-layout>
    <header id="hero">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1><span><i class="fa-solid fa-hippo"></i></span>Blogaravel.it</h1>
                        <h2>Il Blog gratuito per eccellenza</h2>
                        <small>--Fintantoché il web developer non impara un modo per farsi pagare--</small>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3>Learning Laravel in progress</h3>
                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar text-bg-primary" style="width: 20%">Long way to go</div>
                </div>
            </div>
        </div>
    </div>

    <!-- foreach degli articoli -->
    <section id="articleCards">
        <p class="h1 text-center">
            I vostri articoli
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
                            <p>{{$article->image_id}}</p>
                            <a href="#" class="btn btn-primary">In dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </section>

    
</x-layout>