<x-main-layout>

    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('img/anim5.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Véhicules <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Veuillez choisir votre véhicule</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="car-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="bg-primary heading">Prix</th>
                                    <th class="bg-dark heading">Date début</th>
                                    <th class="bg-black heading">Date fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($locations as $location)
                                <tr class="">
                                    <td class="car-image">
                                        <div class="img" style="background-image:url('{{ url('storage/'. $location->vehicule->image) }}');"></div>
                                    </td>
                                    <td class="product-name">
                                        <h3>{{ $location->vehicule->nom }}</h3>
                                        <p class="mb-0 rated">
                                            <span>{{ $location->vehicule->nom }}:</span>
                                        </p>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num">{{ $location->vehicule->prix }} FCFA </span>
                                                <span class="per">/par jour</span>
                                            </h3>
                                            {{-- <span class="subheading">$3/hour fuel surcharges</span> --}}
                                        </div>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num">{{ $location->formatted_date_debut }}</span>
                                            </h3>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num">{{ $location->formatted_date_fin }}</span>
                                            </h3>
                                        </div>
                                    </td>
                                </tr><!-- END TR-->
                                @empty
                                    
                                @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
