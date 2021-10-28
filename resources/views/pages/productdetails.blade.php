@extends('front')

@section('content')
<a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/constructions/R15.png') }}" alt="Photo" class="R15">
                
              </a>

              <div class="col-md-3">
        <div class="py-40">
            <ul id="details-menu">
                <li>
                  <b>Product Name: R15</b> 
                </li>
                <li>
         <b>Cc: 149</b> 
                </li>
                <li>
                   <b>Region: India </b>
                </li>
                <li>
                   <b> Model: 2021 </b>
                </li>
                <li>
                   <b> Price: 4,70,000 BDT </b>
                </li>

                <button type="submit" class="btn btn-success">Buy now</button>
                
                <button type="submit" class="btn btn-warning">Add to cart</button>
                
            </ul>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-9 ">
    
      
          <video width="320" height="180" controls>
         
        <source src="{{ asset('assets/videos/constructions/R15.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
  
        Your browser does not support the video tag.
       </video>

        </div>
@endsection