@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Harimau</h5>
                    <p class="card-text">
                        The tiger, with the scientific name Panthera tigris, is one of the most famous big cats and is a species that is highly respected and valued in various cultures around the world. This animal is often nicknamed the "King of the Jungle" because of its strength, courage, and position at the top of the food chain. This article will review various interesting aspects about tigers, including their habitat, behavior, conservation status, and role in human culture.
                        Habitat and Distribution
                        Tigers are animals that can be found in various habitats, from tropical rainforests, mangrove forests, to grasslands and mountain forests. They are distributed in several parts of Asia, with the largest population being in India, which is also home to the Bengal tiger subspecies.

                    </p>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/harimau.png')}}" class="img-fluid" alt="Harimau Image">
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection