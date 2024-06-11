<@extends('layouts/layoutMaster')

@section('title', 'people')

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

<!-- people List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">people

        <a href='{{url("people/create")}}'
                class='add-new btn btn-primary float-end' >Add</a>

    </h5>

  </div>


  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr>
          <th>ID</th>
          <th>name</th>
          <th>type</th>
          <th>members</th>
          <th>members male</th>
          <th>members female</th>
          <th>age</th>
          <th>target trees to plant</th>
          <th>date of birth</th>
          <th>national id number</th>
          <th>gender</th>
          <th>email</th>
          <th>picture</th>
          <th>country</th>
          <th>address</th>
          <th>gps x</th>
          <th>gps y</th>
          <th>access code</th>
          <th>bio</th>
          <th>status</th>
          <th>created at</th>
          <th class="d-none">Action</th>
          <th>Action</th>
        </tr>
      </thead>

      @foreach($list as $r)

        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->name}}</td>
          <th>{{$r->type}}</th>
          <th>{{$r->members}}</th>
          <th>{{$r->members_male}}</th>
          <th>{{$r->members_female}}</th>
          <th>{{$r->age}}</th>
          <th>{{$r->target_trees_to_plant}}</th>
          <th>{{$r->date_of_birth}}</th>
          <th>{{$r->national_id_number}}</th>
          <th>{{$r->gender}}</th>
          <th>{{$r->email}}</th>
          <th>{{$r->picture}}</th>
          <th>{{$r->country}}</th>
          <th>{{$r->address}}</th>
          <th>{{$r->gps_x}}</th>
          <th>{{$r->gps_y}}</th>
          <th>{{$r->access_code}}</th>
          <th>{{$r->bio}}</th>
          <th>{{$r->status}}</th>
          <th>{{$r->created_at}}</th>
          <td class="d-none">
            <div class="d-inline-block text-nowrap">
              <a href='{{url("people/".$r->id."/edit")}}'>
                <button class="btn btn-sm btn-icon delete-record text-primary">
                  <i class="bx bx-edit"> Edit</i>
                </button>
              </a>
            </div>
          </td>
          <td>
            <div>
              <form action="{{ route('people.destroy', $r->id) }}" method="POST">
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
  <!-- Offcanvas to add new people -->

</div>
@endsection
