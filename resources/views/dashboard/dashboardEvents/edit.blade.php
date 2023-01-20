@extends('dashboard.layouts.postmain')

@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Подія</span>
        <h3 class="page-title"><i class="icon-feather-file-text"></i> Редагувати Подію</h3>
      </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ================================ links Events Content Start ========================================================================= -->
              <form class="add-new-post" action="{{ route('dashboardEvents.update',$Event->slug) }}" method="POST"  role="form" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <!-- ================================ links Events Content Start ========================================================================= -->
              <label for="Category">Назва події English</label>
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Title" name="Title_en" value="{{ $Event->Title_en }}">
              <label for="Category">Посилання на подію English</label>
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Event Slug" name="slug" value="{{ $Event->slug }}">
              <label for="Category">Вміст події English</label>
              <textarea id='edit' value="{{ $Event->Content_en }}" class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="15">
              <!-- ================================ links Events Content Start ========================================================================= -->
                {{ $Event->Content_en }}
              <!-- ================================ links Events Content Start ========================================================================= -->
              </textarea> 
               <div class="row mt-3">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <!-- ================================ links Events Content Start ========================================================================= -->
                    <img src="{{ asset('dashboardassets/images/german.png') }}"> Українською</a>
                    <!-- ================================ links Events Content Start ========================================================================= -->
                  </div>
                </div>
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                  <!-- ================================ links Events Content Start ========================================================================= -->
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <label for="Category">Назва події Українською</label>
                      <input class="form-control form-control-lg mb-3" type="text" value="{{ $Event->Title_gr }}" placeholder="Назва події Українською" name="Title_gr">
                      <label for="Category">Вміст події Українською</label>
                      <textarea id='edit_uk' class="form-control form-control-lg mb-3" value="{{ $Event->Content_gr }}" cols="12" rows="12" name="Content_gr" placeholder="Вміст події Українською">{{ $Event->Content_gr }}</textarea>
                   </div>
                    <!-- ================================ links Events Content Start ========================================================================= -->
                  </div>
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
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Опублікувати</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================= -->
            <!-- / Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Картинка Події</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{!! asset($Event->image) !!}" alt="Event image">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="" value="{{ $Event->image }}">
                    </label>
                  </div>
                </ul>
                </form>
              </div>
            </div>
            <!-- ================================ links Events Content Start ======================================================== -->
            <!-- / Post Overview -->
          </div>
        </div>
      </div>
<!-- ================================ links Events Content Start ========================================================================= -->
@endsection
