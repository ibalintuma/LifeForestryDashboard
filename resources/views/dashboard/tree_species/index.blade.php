@extends('layouts/layoutMaster')

@section('title', 'tree_species')

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

<!-- tree_species List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">tree_species

        <a href='{{url("tree species/create")}}'
                class='add-new btn btn-primary float-end' >Add</a>

    </h5>

  </div>


  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Type</th>
          <th>Picture</th>
          <th>status</th>
          <th>Notes</th>
          <th>Care duration in Days</th>
          <th>Mature duration in Days</th>
          <th>Action</th>
          <th>Action</th>
        </tr>
      </thead>

      @foreach($list as $r)

        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->name}}</td>
          <td>{{$r->type}}</td>
          <td>
            <img src="{{$r->picture}}" height="100px" alt="">
          </td>
          <td>{{$r->status}}</td>
          <td>
            <div style="width: 600px" >
              {{$r->notes}}
            </div>
          </td>
          <td>{{$r->care_duration_in_days}}</td>
          <td>{{$r->mature_duration_in_days}}</td>
          <td>
            <div class="d-inline-block text-nowrap">
              <a href='{{url("tree_species/".$r->id."/edit")}}'>
                <button class="btn btn-sm btn-icon delete-record text-primary">
                  <i class="bx bx-edit"> Edit</i>
                </button>
              </a>
            </div>
          </td>
          <td>
            <div>
              <form action="{{ route('tree_species.destroy', $r->id) }}" method="POST">
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
  <!-- Offcanvas to add new tree_species -->

</div>
@endsection
