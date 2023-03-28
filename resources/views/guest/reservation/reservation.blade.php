<x-main-layout>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('assets/images/pexels-aaron-curtis-119435.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Contactez-nous</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-12 block-9 mb-md-5">
                    <h3 class="heading-section mb-4">Formulaire de location de véhicules</h3>
                    <form action="{{ route('cars.reservation.send') }}" class="bg-light p-5 contact-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_vehicule"> Nom du véhicule</label>
                            <input type="text" class="form-control" placeholder="Nom" value="{{ $vehicule->nom }}"  name="nom_vehicule" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nom_client">Nom du client</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $nom_client }}" name="nom_client" readonly>
                        </div>
                        <label for="date_debut">Date début</label>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date début" name="date_debut">
                        </div>

                        <label for="date_fin">Date fin</label>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date Fin" name="date_fin">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
