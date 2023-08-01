<x-layout>
    <br>
    
    <div class="container alert bg-success my-5">
        <div class="row">
            <div class="col-12">
                <p>Abbiamo inviato una email di verifica, controlla la tua posta</p>
            </div>
        </div>
    </div>
    
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <form class="form-control" action="/email/verification-notification" method="post">
                    @csrf
                    <input type="submit" value="Non hai ricevuto l'email? Richiedila di nuovo">
                </form>
            </div>
        </div>
    </div>
</x-layout>