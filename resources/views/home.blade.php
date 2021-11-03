@extends ('layouts.main')

@section ('content')
   
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
            @foreach ($movies as $movie)
            
                <div class="card_wrap col-5 m-3">

                    <div class="property_wrap">
                        <h4>Title:</h4>
                        <p>{{$movie->title}}</p>
                    </div>
                    
                    <div class="property_wrap">
                        <h4>Original title: </h4>
                        <p>{{$movie->original_title}}</p>
                    </div> 
                    
                    <div class="property_wrap">
                        <h4>Country: </h4>
                        <p>{{$movie->nationality}}</p>
                    </div>
                    
                    <div class="property_wrap">
                        <h4>Date of release: </h4>
                        @php
                            $originalReleaseDate = $movie->date;
                            $newReleaseDate = date("d-m-Y", strtotime($originalReleaseDate));
                        @endphp 
                        <p>{{$newReleaseDate}} </p>
                    </div>
                    
                    <div class="propery_wrap">
                        <h4>Ranked: </h4>
                        <p>{{$movie->vote}}/10</p>
                    </div>
                    
          
                </div>     

            @endforeach
            </div>
        </div>



@endsection


