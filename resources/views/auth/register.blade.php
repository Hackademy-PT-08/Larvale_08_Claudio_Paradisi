<x-layout>
    @if($errors->any())
        @foreach($errors->all() as $error)
            
            <div class="alert bg-danger my-5">{{$error}}</div>    
            
        @endforeach
    @endif
        <br/>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="h1">Registrati gratis a <span><i class="fa-solid fa-hippo"></i></span>Blogaravel.it</p>
                    <small>la registrazione è gratuita finché il web developer non imparerà un modo per farsi pagare, approfittane ora!</small>
                </div>
            </div>
        </div>

        <form id="registerForm" class="my-5" method="POST" action="/register" >
            
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">il tuo nickname</label>
                <input id="nameRegister" type="text" class="form-control" name="name" value="" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">la tua email</label>
                <input id="emailRegister" type="email" class="form-control" name="email" value="" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">la tua password</label>
                <input id="passwordRegister" class="form-control"  name="password" type="password"> </input>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">ripeti la password</label>
                <input id="password_confirmationRegister" class="form-control"  name="password_confirmation" type="password"> </input>
            </div>
           
            <input type="hidden" name="id" value="">
            <button id="" type="submit" class="btn btn-primary">Accedi</button>
        </form>
</x-layout>