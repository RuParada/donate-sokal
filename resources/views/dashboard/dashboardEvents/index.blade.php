@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<!-- / .main-navbar -->
  <!-- ================================ links Events Content Start ========================================================================= -->
  @if ($message = Session::get('success'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Успix!</strong> {{ $message }}</div>
  @endif
  <!-- ================================ links Events Content Start ========================================================================= -->
  @if ($message = Session::get('Delete'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Видалити!</strong> {{ $message }} </div>
  @endif
  <!-- ================================ links Events Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Огляд</span>
          <!-- ================================ links Events Content Start ========================================================================= -->
          <h3 class="page-title"><i class=" icon-line-awesome-tags"></i> Події 
            <a href="{{ route('dashboardEvents.create') }}" class="mb-2 btn btn-success mr-2">
              <i class="icon-material-outline-add-circle-outline"></i> Додати нову</a>
            </h3>
            <!-- ================================ links Events Content Start ========================================================================= -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Останнi Події</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <!-- <tr>
                        <th>Деталі</th>
                        <th>Деталі</th>
                        <th class="text-center">днів</th>
                        <th class="text-center">години</th>
                        <th class="text-center">хвилин</th>
                        <th class="text-center">адреса</th>
                        <th class="text-center">Час закінчення</th>
                        <th class="text-center">Час початку</th>
                        <th class="text-right">Дії</th>
                      </tr> -->
                    </thead>
                    <tbody>
                      <!-- ================================ links Events Content Start ========================================================================= -->
                      @foreach($Events as $Event)
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="{!! asset($Event->image) !!}">
                        </td>
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <td class="lo-stats__order-details">
                          <span>{!! substr($Event->Title_gr, 0, 190) !!}</span>
                          <span>{{ date('M j, Y', strtotime($Event->created_at)) }}</span>
                        </td>
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <!-- <td class="lo-stats__items text-center">{{ $Event->Days }}</td>
                        <td class="lo-stats__total text-center text-success">{{ $Event->Hours }}</td>
                        <td class="lo-stats__items text-center">{{ $Event->Minutes }}</td>
                        <td class="lo-stats__items text-center">{{ $Event->Address }}</td>
                        <td class="lo-stats__items text-center">{{ $Event->FinishTime }}</td>
                        <td class="lo-stats__items text-center">{{ $Event->StartTime }}</td> -->
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                            <!-- ====================== links Events Content Start =============================================== -->
                            <a href="{{ URL::to('dashboard/dashboardEvents')}}/{{$Event->slug}}/edit" class="mb-2 btn btn-sm btn-primary">
                            <i class="icon-feather-edit-2"></i> Редагувати</a>
                            <form action="{{ route('dashboardEvents.destroy',$Event->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            <!-- ====================== links Events Content Start =============================================== -->
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Видалити</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      <!-- ================================ links Events Content Start ========================================================================= -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                  <div class="col">
                    <!-- ====================== links Events Content Start =============================================== -->
                    {!! $Events->links() !!}
                    <!-- ====================== links Events Content Start =============================================== -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ====================== links Events Content Start =============================================== -->
                    @if(COUNT($Events) != NULL)
                    <a>Показано від 10 до {{ COUNT($Events) }} з {{ COUNT($Events) }} Подій</a>
                    @else
                    <a>Показано від 10 до 0 з 0 Подій</a>
                    @endif
                    <!-- ====================== links Events Content Start =============================================== -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- End Default Dark Table -->
</div>
<!-- ================================ links Events Content Start ========================================================================= -->
@endsection
