@extends('dashboard.layouts.postmain')
@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Події</span>
      <h3 class="page-title"><i class="icon-line-awesome-tags"></i> Додати нову</h3>
    </div>
  </div>
  <!-- ================================ links Events Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ links Events Content Start ========================================================================= -->
          <form action="{{ route('dashboardEvents.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- ================================ links Events Content Start ========================================================================= -->
            <label for="Category">Назва події English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title_en">
            <label for="Category">Посилання на подію English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Slug" name="slug">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Days" name="Days" value="30">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Hours" name="Hours" value="12">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Minutes" name="Minutes" value="00">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your Address" name="Address" value="80001 Sokal, st. Shashkevycha 86, Ukraine">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your FinishTime" name="FinishTime" value="2022">
            <input class="hide form-control form-control-lg mb-3" type="text" placeholder="Your StartTime" name="StartTime" value="2021">
            <!-- ================================ links Events Content Start ========================================================================= -->
            <label for="Category">Вміст події English</label>
            <textarea id='edit' class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="10"></textarea>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <div class="row mt-3">
              <div class="col-2">
                <!-- ================================ links Events Content Start ========================================================================= -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <img src="{{ asset('dashboardassets/images/german.png') }}">  Українською</a>
                  </div>
                </div>
                <!-- ================================ links Events Content Start ========================================================================= -->
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <label for="Category">Назва події Українською</label>
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Назва події Українською" name="Title_gr">
                      <label for="Category">Вміст події Українською</label>
                      <textarea id='edit_uk' class="form-control form-control-lg mb-3" cols="12" rows="12" name="Content_gr" placeholder="Вміст події Українською"></textarea>
                   </div>
                  <!-- ================================ links Events Content Start ========================================================================= -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ links Events Content Start ========================================================================= -->
      <div class="col-lg-12 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Дії</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Статус:</strong> Чернетка

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Видимість:</strong>
                  <strong class="text-success">Публічний</strong>

                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Розклад:</strong> Зараз

                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Читабельність:</strong>
                  <strong class="text-warning">Так</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
              <a class="btn btn-sm btn-outline-accent" href="{{ route('dashboardEvents.index') }}"><i class="icon-line-awesome-tags"></i> Події</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Опублiковати</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Картинка Події</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="Event Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
    @endsection
