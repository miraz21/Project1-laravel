@extends('layouts.backend')
@section('main')

<div class="header">
 <h1 >My Webpage</h1>
 <p>Resize the browser window to see the effect.</p>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
        <?php
      echo "Today is " . date("Y-m-d") . "<br>";
      echo "Today is " . date("l");
      ?>

     <div class="container">
     
    <div class="panel panel-primary">
    <div class="panel-heading">
    
    </div>
    <div class="panel-body">
     
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}" style="height:200px;">
        @endif
    
        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
    
                <div class="col-md-3">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        </form>
    
      </div>
    </div>
</div>

     
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <?php
      echo "Today is " . date("Y-m-d") . "<br>";
      echo "Today is " . date("l");
      ?>

    <div class="container">
     
    <div class="panel panel-primary">
    <div class="panel-heading">
    
    </div>
    <div class="panel-body">
     
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}" style="height:200px;">
        @endif
    
        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
    
                <div class="col-md-3">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        </form>
    
      </div>
    </div>
</div>

      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
       <img src="images/123.jpg" alt="Girl in a jacket" width="250px" height="100px">
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
     <img src="images/download (7).jpg" alt="Girl in a jacket" width="250px" height="100px">
	 <img src="images/images (7).jpg" alt="Girl in a jacket" width="250px" height="100px">
	 <img src="images/index 1.jpg" alt="Girl in a jacket" width="250px" height="100px">
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
@endsection