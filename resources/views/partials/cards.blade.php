<section class="cards">
	@foreach ($movies as $movie)
  <div class="card">
			<a href="">
				<h4>{{$movie->title}}</h4>
			</a>
			<p>Nationality : {{$movie->nationality}}</p>
			<small>Vote: {{$movie->vote}}</small>
  </div>
	@endforeach
</section>