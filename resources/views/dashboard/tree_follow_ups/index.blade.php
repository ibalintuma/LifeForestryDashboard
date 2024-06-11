<@extends('layouts/layoutMaster')

@section('title', 'tree_follow_ups')

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

<!-- tree_follow_ups List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">tree_follow_ups

        <a href='{{url("tree_follow_ups/create")}}'
                class='add-new btn btn-primary float-end' >Add</a>

    </h5>

  </div>


  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr>
          <th>ID</th>
          <th>date_of_follow_up</th>
          <th>tree_id</th>
          <th>person_id</th>
          <th>picture</th>
          <th>gps_x</th>
          <th>gps_y</th>
          <th>height</th>
          <th>canopy</th>
          <th>trunk_diameter</th>
          <th>leaf_condition</th>
          <th>new_growth</th>
          <th>watering</th>
          <th>fertilization</th>
          <th>mulch</th>
          <th>weed_pest_control</th>
          <th>pruning</th>
          <th>general_health</th>
          <th>environmental_conditions</th>
          <th>notes</th>
          <th>status</th>
          <th>created_at</th>
          <th class="d-none">Action</th>
          <th>Action</th>
        </tr>
      </thead>

      @foreach($list as $r)

        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->date_of_follow_up}}</td>
          <td>{{$r->tree_id}}</td>
          <td>{{$r->person_id}}</td>
          <td>{{$r->picture}}</td>
          <td>{{$r->gps_x}}</td>
          <td>{{$r->gps_y}}</td>
          <td>{{$r->height}}</td>
          <td>{{$r->canopy}}</td>
          <td>{{$r->trunk_diameter}}</td>
          <td>{{$r->leaf_condition}}</td>
          <td>{{$r->new_growth}}</td>
          <td>{{$r->watering}}</td>
          <td>{{$r->fertilization}}</td>
          <td>{{$r->mulch}}</td>
          <td>{{$r->weed_pest_control}}</td>
          <td>{{$r->pruning}}</td>
          <td>{{$r->general_health}}</td>
          <td>{{$r->environmental_conditions}}</td>
          <td>{{$r->notes}}</td>
          <td>{{$r->status}}</td>
          <td>{{$r->created_at}}</td>
          <td>
            <div class="d-inline-block text-nowrap">
              <a href='{{url("tree_follow_ups/".$r->id."/edit")}}'>
                <button class="btn btn-sm btn-icon delete-record text-primary">
                  <i class="bx bx-edit"> Edit</i>
                </button>
              </a>
            </div>
          </td>
          <td>
            <div>
              <form action="{{ route('tree_follow_ups.destroy', $r->id) }}" method="POST">
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
  <!-- Offcanvas to add new tree_follow_ups -->

</div>
@endsection
