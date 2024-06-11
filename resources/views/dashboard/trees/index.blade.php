<@extends('layouts/layoutMaster')

@section('title', 'trees')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jszip/jszip.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection

{{--@section('page-script')
<script src="{{asset('assets/js/app-user-list.js')}}"></script>
@endsection--}}

@section('content')

<!-- trees List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">trees


    </h5>

  </div>


  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr>
          <th>ID</th>
          <th>person</th>
          <th>tree specie</th>
          <th>number of trees planted</th>
          <th>date of planting</th>
          <th>next follow up date</th>
          <th>source</th>
          <th>source other</th>
          <th>height</th>
          <th>picture</th>
          <th>obtained from</th>
          <th>location</th>
          <th>soil prep</th>
          <th>method</th>
          <th>weather</th>
          <th>watering</th>
          <th>mulch</th>
          <th>initial health</th>
          <th>care schedule</th>
          <th>growth</th>
          <th>survival</th>
          <th>pests diseases</th>
          <th>gps x</th>
          <th>gps y</th>
          <th>notes</th>
          <th>status</th>
          <th>created at</th>
          <th class="d-none">Action</th>
          <th>Action</th>
        </tr>
      </thead>

      @foreach($list as $r)

        <tr>
          <td>{{$r->id}}</td>
          <td>
            @isset($r->person)
              {{$r->person->name}}
            @endisset
          </td>
          <td>
            @isset($r->tree_specie)
              {{$r->tree_specie->name}}
            @endisset
          </td>
          <td>{{$r->number_of_trees_planted}}</td>
          <td>{{$r->date_of_planting}}</td>
          <td>{{$r->next_follow_up_date}}</td>
          <td>{{$r->source}}</td>
          <td>{{$r->source_other}}</td>
          <td>{{$r->height}}</td>
          <td>
            <img src="{{$r->picture}}" height="100px" alt="">
          </td>
          <td>{{$r->obtained_from}}</td>
          <td>{{$r->location}}</td>
          <td>{{$r->soil_prep}}</td>
          <td>{{$r->method}}</td>
          <td>{{$r->weather}}</td>
          <td>{{$r->watering}}</td>
          <td>{{$r->mulch}}</td>
          <td>{{$r->initial_health}}</td>
          <td>{{$r->care_schedule}}</td>
          <td>{{$r->growth}}</td>
          <td>{{$r->survival}}</td>
          <td>{{$r->pests_diseases}}</td>
          <td>{{$r->gps_x}}</td>
          <td>{{$r->gps_y}}</td>
          <td>{{$r->notes}}</td>
          <td>{{$r->status}}</td>
          <td>{{$r->created_at}}</td>
          <td class="d-none">
            <div class="d-inline-block text-nowrap">
              <a href='{{url("trees/".$r->id."/edit")}}'>
                <button class="btn btn-sm btn-icon delete-record text-primary">
                  <i class="bx bx-edit"> Edit</i>
                </button>
              </a>
            </div>
          </td>
          <td>
            <div>
              <form action="{{ route('trees.destroy', $r->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                  <button class="btn btn-sm btn-icon delete-record text-danger">
                    <i class="bx bx-trash"></i> Delete
                  </button>
              </form>
            </div>
          </td>

        </tr>

      @endforeach
    </table>
  </div>
  <!-- Offcanvas to add new trees -->

</div>
@endsection
