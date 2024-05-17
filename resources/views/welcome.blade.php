<x-layout>

    <div class="container-fluid p-5 bg-dark text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
            WELCOME IN DIVE CLUB
            </h1>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3" >
                    <x-card
                    :tags="$articles->tags"
                    title="{{$article->title}}"
                    subtitle="{{$article->subtitle}}"
                    image="{{$article->image}}"
                    category="{{$article->category->name}}"
                    data="{{$article->created_at->format('d/m/Y')}}"
                    user="{{$article->user->name}}"
                    url="{{route('article.show' , compact('article'))}}"
                    urlCategory="{{route('article.byCategory' , ['category' => $article->category->id]) }}"
                    readDuration="{{$article->readDuration() }}"
                    />
                </div>
            @endforeach
        </div>
    </div>
<div class="container my-5 ">
    <div class="row justify-content-center">
        <div class="col-6 col-md-6">
    <img src="https://media.istockphoto.com/id/512617924/it/foto/tuffatore-rosso-nuota-in-mare.jpg?s=612x612&w=0&k=20&c=ssP82aHlEhMeScriKSEkuPjCzsXddcJptM1X3HJ5_BE="
 RebeccaJ alt="">
<h1>DIVING</h1>
<img src="https://media.istockphoto.com/id/691419006/it/foto/amici-in-allenamento-subacqueo-immersi-in-piscina-due-in-cerca-di-macchina-fotografica.jpg?s=612x612&w=0&k=20&c=ILZORrDncz3iri5V-C82v-_r_eWFd8B1JjhR5-hBSZY=" alt="">
<h1>Diving Cours</h1>
    
<img src="https://media.istockphoto.com/id/187044436/it/foto/coppia-in-luna-di-miele-snorkeling-a-tropicale-dei-caraibi.jpg?s=612x612&w=0&k=20&c=b36nYEAXatMs_ixdYWH_EA8lF--DqkrE0E_LgZ9siJE=" alt="">
   <h1>Snorkeling</h1>
<img src="https://media.istockphoto.com/id/939931682/it/foto/giovane-donna-che-fai-snorkeling-con-pesci-della-barriera-corallina.jpg?s=612x612&w=0&k=20&c=FoT9wxE1i-n-orEFo-hVUpdsQqWvwvYKKCZwrWhf5bc=" alt="">
<h1>Snorkeling Cours</h1>
</div>
</div>
</div>
<div class="container-fluid p-5 bg-dark text-center text-white">
    <div class="row justify-content-center">
        <div class="col-6 col-md-6">
<a class="icon-link"  href="#">
  <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
  Facebook
</a>
<a class="icon-link" href="#">
  <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
  Instagram
</a>
<a class="icon-link" href="#">
  <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
  youtube
</a>
<a class="icon-link" href="#">
  <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
  Twitter 
</a>
</div>
</div>
</div>

</x-layout>