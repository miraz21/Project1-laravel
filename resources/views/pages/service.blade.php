@extends('layouts.backend')
@section('main')

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Our Services</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-3 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#bootstrap"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Web Designer</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#cpu-fill"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Web Development</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#calendar3"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Raw PHP Development</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
            <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#bootstrap"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Wordpress Development</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#cpu-fill"/></svg>
        <div>
          <h4 class="fw-bold mb-0">Laravel Development</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="4em" height="4em"><use xlink:href="#calendar3"/></svg>
        <div>
          <h4 class="fw-bold mb-0">MS-Office</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      </div>
     </div>

@endsection