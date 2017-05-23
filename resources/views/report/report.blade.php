@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2><strong>Attendance Report</strong></h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <form class="form-horizontal" action=" " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

              <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>

                                            <th width="15%">Matric Number</th>
                                            <th width="35%">Student Name</th>
                                            <th width="25%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody pull-{right}>

                <?php $i=0 ?>

                @foreach ($subjects as $subject)
                  @if($subject->status == "presence")
                  <tr>

                    <td>{{$subject->nomatrik}}</td>
                    <td>{{$subject->user->name}}</td>
                    <td>{{$subject->status}}</td>
                  </tr>
                @endif

                @endforeach

                {{-- <a href="{{action('DaftarsubjeksController@create', $id)}}" class="btn btn-outline-success my-2 my-sm-0" type="button" role ="button">PRINT</a> --}}



                  <?php $i++ ?>


                <table>

                </table>
                </div>
                </div>

                      </div>
                    </div>     <!--close left-->

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>

                                            <th width="15%">Matric Number</th>
                                            <th width="35%">Student Name</th>
                                            <th width="25%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody pull-{right}>

                <?php $i=0 ?>

                @foreach ($subjects as $subject)
                    @if($subject->status == "Absence")
                    <tr>

                      <td>{{$subject->nomatrik}}</td>
                      <td>{{$subject->user->name}}</td>
                      <td>{{$subject->status}}</td>
                    </tr>
                  @endif

                @endforeach

                {{-- <a href="{{action('DaftarsubjeksController@create', $id)}}" class="btn btn-outline-success my-2 my-sm-0" type="button" role ="button">PRINT</a> --}}



                  <?php $i++ ?>

                </table>
                <td>
                <th>No of Present Student: {{$status}}<th>
                  <br>
                  <th>No of Absent Student: {{$status2}}<th>
                  </td>
                </div>
                </div>

                      </div>
                    </div>     <!--close left-->
                  </div>


            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
                  <a href="{{ url('pdf/resit', $subject->subject_id) }}" target="_blank" class="btn btn-success" style="font-weight: bold; width:200px">Download Report</a>
                </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
  @endsection
