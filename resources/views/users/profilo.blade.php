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
</x-layout>