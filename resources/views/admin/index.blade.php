<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>


<style type="text/css">
th {
    font-family: roboto;
    font-size: 17px;
    font-weight: 300;
    color:aqua;
}


.modal-header {
    opacity: 0.6;
    background: cadetblue;
    color: cornsilk;
}
.modal-body {
    background: #00000014;
}
</style>
<body>
	 

<section class="app">	 
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="#">Product Server</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
         <a href="#"  data-toggle="modal" data-target="#exampleModalCenter"class="btn btn-outline-info">Add New Product</a>
    </ul>
  </div>
</nav>


<div class="row">
	<div class="col-md-3 pt-5">
		<div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>

</div>
	</div>




	<div class="col-md-9 pt-5">
		<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Short Description</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach ($data as $testSingle)


    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td height="100">{{ $testSingle -> name }}</td>
      <td height="100">{{ $testSingle -> price }}</td>
      <td height="100">{{ $testSingle -> description }}</td>
      <td height="100"><img src="../media/images/{{ $testSingle -> image}}" style="height: 50px; width: 50px"></td>
      <td height="100">
      	<a href="#" style="font-size:25px; color:#fff;" class="pr-2" data-toggle="modal" data-target="#exampleModal">
      		<i class="bi bi-eye"></i>
      	</a>      
        <a href="#" style="font-size:25px; color:#fff;" class="pr-2">
      		<i class="bi bi-pencil-fill"></i>
      	</a>      
      	 <a href="#" style="font-size:25px; color:#fff;" class="pr-2">
      		<i class="bi bi-trash-fill"></i>
      	</a> 


      	

      </td>
 
    </tr>   
@endforeach

  </tbody>
</table>
	</div>






<!-- view -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-white">

<div class="row">
	<div class="col-sm-4 p-0">
		<div class="card" style="border-radius: 0;
    background: white; height: 100%; border: none;">
  <img src="Rasel.png" class="" alt="...">

<div class="texting p-2">
  <h5 class="text-info text-center" style="font-size: 17px;
    font-weight: 600;
    letter-spacing: 0.6px;">Md Mahmudul Haque</h5>

    <p class="text-muted text-center">Armaan</p>
    
    <h5 class="text-center fs-5"><i class="bi bi-github"></i></i></h5>
    
</div>


</div>
	</div>
	<div class="col-sm-8 p-0" style="
    background: black;
    color: brown;
    border-color: black;
">
		
		<div class="card" style="background: black;">

  <div class="card-body">

  	<h4>Information</h4>
  	<hr style="border-top: 1px solid rgb(131 173 171 / 84%);">

  	<div class="row">
  		   <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">rntng@gmail.com</h6>
                                    </div>
  		   <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Age</p>
                                        <h6 class="text-muted f-w-400">25</h6>
                                    </div>
  	</div>  	

  	<div class="row">
  		   <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Cell</p>
                                        <h6 class="text-muted f-w-400">880 1957026831</h6>
                                    </div>
  		   <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Location</p>
                                        <h6 class="text-muted f-w-400">Dhaka</h6>
                                    </div>
  	</div>
 
  </div>
</div>
	</div>
</div>


















      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>







<!-- insert -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form class="p-3" action="{{ route('form.process') }}" method="POST" enctype="multipart/form-data">


<div class="row">
	<div class="col-md-6">
		  <div class="mb-2">
    <label for="" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control">
  </div>  
	</div>
	<div class="col-md-6">
		  <div class="mb-2">
    <label for="" class="form-label">Product Price</label>
    <input type="text" name="price" class="form-control">
  </div> 
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		  <div class="mb-2">
    <label for="" class="form-label">Short Description</label>
    <input type="text" name="description" class="form-control">
  </div> 
	</div>

</div>


 
 





  <div class="row">
  	<div class="col-md-6">

  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Product Image</label>
    <input type="file" id="fileId" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>

  	</div>



  	<div class="col-md-6">
  		<img id="fileUploadId" src="https://kubalubra.is/wp-content/uploads/2017/11/default-thumbnail.jpg" alt="Upload Image" style="height: 200px; width: 200px">
  	</div>
  </div>


  <button type="submit" class="btn btn-primary">Create Product</button>
</form>


      </div>
      <div class="modal-footer">
         
         <pre>Copyright 2021</pre>

      </div>
    </div>
  </div>
</div>









</div>



<!-- Button trigger modal -->


<!-- Modal -->



<!-- Button trigger modal -->







</div>


</section>




	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="{{ asset('assets/js/axios.min.js') }}"></script>
	<script src="{{ asset('assets/js/vue.js') }}"></script>
	<script src="{{ asset('assets/js/vuerouter.js') }}"></script>



	<script>
		 

    $('input#fileId').change(function(e) {


        let file_url = URL.createObjectURL(e.target.files[0]);
        $('img#fileUploadId').attr('src', file_url);
    });

	</script>





</body>
</html>