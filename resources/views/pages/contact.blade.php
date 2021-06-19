@extends('layouts.backend')
@section('main')
<section class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
<h1 class="text-center">Our Contact</h1>

<form>
 <div class="mb-3">
  <label for="name" class="form-label">Full Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name...">
  </div>
 <div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone Number...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password...">
  </div>
  <button type="submit" class="btn btn-primary">Contact</button>
 </form>
 <hr>
</div>
</div>
</div>
</section>
@endsection