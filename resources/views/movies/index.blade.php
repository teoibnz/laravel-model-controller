@extends("layout.main")

@section("main-content")
<div class="col-12 d-flex flex-wrap p-5">
    @foreach($movies as $movie)
    <div class=" col-4 card m-4">
        <div class="card-body text-center">
            <h4 class="card-title ">
                Title : {{ $movie->title }}
            </h4>
            <h5 class="card-title"> 
                Original Title : {{ $movie->original_title }}
            </h5>
            <p class="card-text">
                nationality : {{ $movie->nationality}}
            </p>
            <h5 class="card-title"> 
                Vote : {{ $movie->vote }}
            </h5>
            <h5 class="card-title"> 
                Date of pubblication : {{ $movie->date }}
            </h5>
        </div>
    </div>
    @endforeach
</div>

@endsection