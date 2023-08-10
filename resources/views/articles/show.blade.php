<x-layout>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12 my-5">
                <h1>{{$article->title}}</h1>
            </div>
            <div class="col-12 col-mb-6 my-5"> 
                @if($article->image !== '')
                    <img src="{{asset('storage/' . $article->image) }}" class="img-fluid img-thumbnail " alt="{{$article->title}}">
                @else  
                    <img src="https://picsum.photos/500/420" class="img-fluid" alt="{{$article->title}}">
                @endif
            </div>
            <div class="col-12 col-mb-6 my-5">
                <p>{!!$article->article!!}</p>
                @if(!auth()->user())
                <a href="/" class="btn btn-primary">torna indietro</a>
                @elseif(auth()->user()->id == $article->user_id)
                <a href="/profilo" class="btn btn-primary">torna indietro</a>
                @else
                <a href="/" class="btn btn-primary">torna indietro</a>
                @endif
            </div>
        </div>
    </div>
</x-layout>