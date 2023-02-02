@extends('layouts.main', ['activePage' => 'messages', 'titlePage' => 'Message'])
@section('content')
<div class="content">

<style>
    body{  
    background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);
    background: linear-gradient(to right, #ec2F4B, #009FFF);
    }    
  </style> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Message</h4>
            <p class="card-category">Go to dashboard</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              
              <h5>Purchased successfully!</h5> 
              <br>
               
            </div>
            <!--end row-->
            
            <a href="http://127.0.0.1:8000/home" class="btn btn-sm btn-success mr-3 btn-success"> Go to dashboard </a> 
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
           
         </div>
    </div>
  </div>
</div>
@endsection