<x-layout>
    @if($errors->any())
        @foreach($errors->all() as $error)
            
            <div class="alert bg-danger my-5">{{$error}}</div>    
            
        @endforeach
    @endif
        <br>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="h1">Accedi al tuo profilo</p>
                </div>
            </div>
        </div>

        <form id="loginForm" class="my-5" method="POST" action="/login" >
            
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">la tua email</label>
                <input id="emailLogin" type="email" class="form-control" name="email" value="" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">la tua password</label>
                <input id="passwordLogin" class="form-control"  name="password" type="password"> </input>
            </div>
           
            <input type="hidden" name="id" value="">
            <button id="" type="submit" class="btn btn-primary">Accedi</button>
        </form>
</x-layout>