@extends('dashboard.layouts.postmain')

@section('dashboardcontent')
<!-- ====================== links Posts Content Start store =============================================== -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Блог постiв</span>
      <h3 class="page-title"><i class=" icon-feather-file-text"></i> Добавити пост</h3>
    </div>
  </div>
  <!-- ====================== links Posts Content Start store =============================================== -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ====================== links Posts Content Start store =============================================== -->
          <form action="{{ route('dashboardPosts.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <label for="Category">Назва поста English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="Title_en">
            <label for="Category">Посилання на цей пост English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Slug" name="slug">
            <label for="Category">Назва для Seo English</label>
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Seo Title" name="seo_title">
            <div class="form-control form-control-lg mb-3">
              <label for="displayEmail">Автор поста</label>
              <select class="custom-select" name="author_id">
                <option value="1" selected="">Автор</option>
                <!-- ====================== links Posts Content Start store =============================================== -->
                @foreach($Users as $User)
                <option value="{{ $User->id }}">{{ $User->name }}</option>
                @endforeach
                <!-- ====================== links Posts Content Start store =============================================== -->
              </select>
            </div>
            <div class="form-control form-control-lg mb-3">
              <label for="Category">Категорія поста</label>
              <select class="custom-select" name="category_id">
                <option value="1" selected="">Вибрати</option>
                <!-- ====================== links Posts Content Start store =============================================== -->
                @foreach($Categores as $Category)
                <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                @endforeach
                <!-- ====================== links Posts Content Start store =============================================== -->
              </select>
            </div>
            <label for="Category">Вміст постa English</label>
            <textarea id='edit' cols="12" rows="12" name="body_en"></textarea>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <div class="row mt-3">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <img src="{{ asset('dashboardassets/images/german.png') }}"> Українською</a>
                  </div>
                </div>
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <label for="Category">Назва постa Українською</label>
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Назва постa Українською" name="Title_gr">
                      <label for="Category">Вміст постa Українською</label>
                      <textarea id='edit_uk' class="form-control form-control-lg mb-3" cols="12" rows="12" name="body_gr" placeholder="Вміст постa Українською"></textarea>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ====================== links Posts Content Start store =============================================== -->
        <!-- / Add New Post Form -->
      </div>
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
                    <i class="icon-feather-file-plus"></i> Опублiковати</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-feather-rss"></i> Рекомендовані</h6>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 pb-2">
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="featured" name="featured">
                      <label class="custom-control-label" for="featured">Рекомендовані </label>
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="excerpt" aria-label="excerpt" aria-describedby="basic-addon2" name="excerpt"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="meta_description" aria-label="meta_description" aria-describedby="basic-addon2" 
                      name="meta_description"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="meta_keywords" aria-label="meta_keywords" aria-describedby="basic-addon2" 
                      name="meta_keywords"> 
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Картинка Поста</h6>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="User Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons  icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
              <!-- ====================== links Posts Content Start store =============================================== -->
            </div>
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ====================== links Posts Content Start store =============================================== -->
@endsection
