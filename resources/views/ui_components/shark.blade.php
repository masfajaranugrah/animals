@extends('../Layout.App')
@section('content')
<div class="container top">
    <div class="card1">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Shark</h5>
                    <article class="card-text">
    <b>Sharks: Amazing Marine Predators</b><br>
    Sharks are one of the most well-known and often feared sea creatures in the world. With more than 400 species found in various waters, sharks play an important role in marine ecosystems as apex predators. Here is a brief overview of the life and characteristics of sharks:
<br><b>Species Diversity</b><br>
Sharks consist of various species with varying sizes and shapes. From whale sharks which can reach up to 12 meters in length and are the largest sharks, to dwarf sharks which only measure around 20 centimeters. Each species has special adaptations that allow it to survive in different marine environments.
<br><b>Physical Characteristics</b><br>
Sharks have streamlined bodies and are equipped with strong fins, allowing them to swim at high speeds. Their skin is covered in dermal denticles, which give it a rough, sandpaper-like texture and help reduce water resistance when swimming. Sharks also have rows of sharp teeth that are continuously replaced throughout their lives.
<br><b>Behavior and Eating Habits</b><br>
As apex predators, sharks have a varied diet depending on the species. They can eat fish, mollusks, crustaceans, and even marine mammals. Some shark species, such as the great white shark, are known for their extraordinary hunting abilities and can detect prey from long distances using their extremely keen sense of smell.
<br><b>Reproduction and Life Cycle</b><br>
Sharks have a variety of reproductive strategies, including laying eggs (oviparous), giving birth to developed young (viviparous), and a combination of both (ovoviviparous). Some species of shark, such as the hammerhead shark, give birth to young that are ready to survive soon after birth, while others, such as the bamboo shark, lay eggs and leave them on the seabed.
<br><b>Threats and Conservation</b><br>
Sharks face a variety of threats, including poaching for their fins (finning), bycatch in commercial fisheries, and degradation of marine habitats. Populations of several shark species have declined drastically in recent decades. Conservation efforts include stricter law enforcement, the creation of protected marine areas, and public education about the importance of maintaining shark populations.
<br><b>Interesting Facts about Sharks</b><br>
<li> Sharks have been around for more than 400 million years, long before dinosaurs appeared on Earth.</li>
<li>Sharks have the ability to detect electric fields generated by their prey through organs called the ampullae of Lorenzini.</li>
<li>Some shark species can enter a state of partial sleep in which they continue to swim but parts of their brain remain at rest.</li>
Sharks are extraordinary creatures and play a crucial role in maintaining the balance of the marine ecosystem. Protecting them from the threats they face is our responsibility to ensure that future generations can continue to enjoy the beauty and diversity of the ocean.
</article><br>
                    <a href="{{ route('animal') }}" class="btn btn-primary"><< Bank to Page</a>
                  </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/shark.png')}}" class="img-fluid" ">
                    <<iframe width="520" height="315" src="https://www.youtube.com/embed/4HGNqFdaD34?si=9EmZ23xuDjMpUGBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection
