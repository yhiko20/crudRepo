@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">

<style>

    body{  
    background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);
    background: linear-gradient(to right, #ec2F4B, #009FFF);
    }    
    /* Para un comportamiento responsive */
    .carousel-inner img {
    width: 100%;
    height: 100%;
    }
  </style> 
         <!--INICIA CARRUSEL-->
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="img/gtaV.jpg" alt="" width="1900" height="1069">
               </div>
               <div class="carousel-item">
                  <img src="img/fifa.jpg" alt="" width="1920" height="1080">
               </div>
               <div class="carousel-item">
                  <img src="img/Minecraft.jpg" alt="" width="1920" height="1080">
               </div>
               <div class="carousel-item">
                  <img src="img/pubg.jpg" alt="" width="1920" height="1080">
               </div>
               <div class="carousel-item">
                  <img src="img/god.jpg" alt="" width="1920" height="1080">
               </div>
               <div class="carousel-item">
                  <img src="img/RDR.jpg" alt="" width="1920" height="1080">
               </div>
               <div class="carousel-item">
                  <img src="img/CBP.jpg" alt="" width="1920" height="1080">
               </div>
            </div>
            
            <!--Controles NEXT y PREV-->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Controles de indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
                <li data-target="#carousel1" data-slide-to="4"></li>
                <li data-target="#carousel1" data-slide-to="5"></li>
                <li data-target="#carousel1" data-slide-to="6"></li>
            </ol>
            
        </div> 
        <!--TERMINA CARRUSEL-->
            <!--starts card-->
           <div class="row row-cols-1 row-cols-md-4">
            @foreach ($posts as $post ?? '') 
             <div class="col-md-4">
               <div class="card" style="width: 20rem;">
                 <div class="card-body">
                   <p class="card-text">
                     <div class="author">
                       <a href="#" class="d-flex">
                        <img src="/image/{{$post->image}}" class="card-img-top" alt="...">  
                       </a>
                       <p class="description">
                         {{ $post->title }} <br>
                         ${{ $post->price }} <br>
                         {{-- {{ $post->description }} --}}
                       </p>
                     </div>
                   </p>
                   {{-- <div class="card-description">
                     {{ $post->description }}
                   </div> --}}
                 </div>
                 <div class="card-footer">
                   <div class="button-container">
                     <a href="{{ route('posts.detail', $post->id) }}" class="btn btn-sm btn-primary mr-3"> Shop </a>
                   </div>
                 </div>
               </div>
             </div>
             
             @endforeach
           </div><!--end card-->

@endsection
</div>