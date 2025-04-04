@extends('layouts.app')

@section('title', 'Akses Ditolak')

@section('content')
<div class="misc-wrapper">
    <h4 class="mb-2 mx-2">Under Maintenance! 🚧</h4>
    <p class="mb-10 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
    <div class="d-flex justify-content-center mt-5">
      <img
        src="../assets/img/illustrations/tree-3.png"
        alt="misc-tree"
        class="img-fluid misc-object d-none d-lg-inline-block" />
      <img
        src="../assets/img/illustrations/misc-mask-light.png"
        alt="misc-error"
        class="misc-bg d-none d-lg-inline-block"
        height="172"
        data-app-light-img="illustrations/misc-mask-light.png"
        data-app-dark-img="illustrations/misc-mask-dark.png" />
      <div class="d-flex flex-column align-items-center">
        <img
          src="../assets/img/illustrations/misc-under-maintenance.png"
          alt="misc-error"
          class="img-fluid z-1"
          width="780" />
        <div>
          <a href="index.html" class="btn btn-primary text-center my-12">Back to home</a>
        </div>
      </div>
    </div>
  </div>
@endsection
