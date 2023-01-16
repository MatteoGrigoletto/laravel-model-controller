<section class="cards">
	@foreach ($movies as $movie)
  <div class="card">
		<h4>{{$movie->title}}</h4>
		<p>Nationality : {{$movie->nationality}}</p>
		<small>Vote: {{$movie->vote}}</small>
  </div>
	@endforeach
</section>