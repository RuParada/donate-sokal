@extends('dashboard.layouts.postmain')

@section('dashboardcontent')
<!-- ================================ links Causes Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Збір коштів </span>
      <h3 class="page-title"><i class=" icon-material-outline-assignment"></i> Добавити збір коштів </h3>
    </div>
  </div>
  <!-- ================================ links Causes Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ dashboard Causes store ========================================================================= -->
          <form action="{{ route('dashboardCauses.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <label for="Category">Назва збора коштiв English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title_en">
            <label for="Category">Посилання на цей збiр коштiв English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Slug" name="slug">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Raised" name="Raised" value="0">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Goal" name="Goal" value="0">
            <input class="hide form-control form-control-lg mb-3" type="number" placeholder="Your Donors" name="Donors" value="0">
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <div class="form-control form-control-lg mb-3">
              <label for="Category">Категорія збора коштів </label>
              <select class="custom-select" name="category_id">
                <option value="1" selected="">Категорія збора коштів </option>
                @foreach($Categores as $Category)
                <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                @endforeach
              </select>
            </div>
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <label for="Category">Вміст збора коштів English</label>
            <textarea id='edit' class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="10"></textarea>
            <div class="row mt-3">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <img src="{{ asset('assets/img/ukraine.png') }}"> Українською</a>
                  </div>
                </div>
                <!-- ================================ dashboard Causes store ========================================================================= -->
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <label for="Category">Назва збора коштів Українською</label>
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Назва українською мовою" name="Title_gr">
                      <label for="Category">Вміст збора коштів Українською</label>
                      <textarea id='edit_uk' class="form-control form-control-lg mb-3" cols="12" rows="10" name="Content_gr" placeholder="Вміст українською мовою"></textarea>
                   </div>
                  <!-- ================================ dashboard Causes store ========================================================================= -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ dashboard Causes store ========================================================================= -->
      <div class="col-lg-12 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Status:</strong> Draft

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibility:</strong>
                  <strong class="text-success">Public</strong>

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Schedule:</strong> Now

                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Readability:</strong>
                  <strong class="text-warning">Ok</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                  <a class="btn btn-sm btn-outline-accent" href="{{ route('dashboardCauses.index') }}"><i class="icon-material-outline-description"></i> Causes</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Опублiковати</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            <!-- ================================ dashboard Causes store ========================================================================= -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Causes Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="User Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
            </div>
            <!-- ================================ dashboard Causes store ========================================================================= -->
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ================================ links Causes Content Start ========================================================================= -->
@endsection
