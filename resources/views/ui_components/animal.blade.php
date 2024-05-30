@extends('../Layout.App')
@section('content')
    <div class="container top">
        <div class="card1">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Harimau</h5>
                        <p class="card-text">The tiger, with the scientific name Panthera tigris, is one of the most famous big cats and is a species that is highly respected and valued in various cultures around the world. This animal is often nicknamed the "King of the Forest" because of its strength...</p>
                        <a href="{{ route('harimau.detail') }}" class="btn btn-primary">Read More >></a>
                      </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/harimau.png')}}" class="img-fluid" alt="Harimau Image">
                    </div>
                </div>
            </div>
        </div>
          </div>
          <div class="card2">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <h5 class="card-title">Dolphins</h5>
                          <p class="card-text">Dolphins are highly intelligent marine mammals and are known for their complex social behavior and extraordinary communication abilities. Belonging to the Delphinidae family, there are around 90 species of dolphins distributed throughout the world's oceans.</p>
                          <a href="{{ route('dolpin.detail') }}" class="btn btn-primary text">Read More >></a>
                      </div>
                      <div class="col-md-6 text-center">
                          <img src="{{ asset('images/dolpin.png') }}" class="img-fluid" alt="Harimau Image">
                      </div>
                  </div>
              </div>
          </div>
    </div>
@endsection