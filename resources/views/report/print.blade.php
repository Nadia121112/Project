<!DOCTYPE html>
<html lang="en">
<style>
    * {
        font-family: sans-serif;
        font-size: 12px;
    }
    .logo h1 {
        font-family: sans-serif;
        font-size: 36px;
        margin: 0px;
        color: #2980b9;
        text-shadow: 1px 1px #CCCCCC;
    }
    .logo {
        text-align: center;
    }
    .logo span {
        font-size: 30px;
        font-style: italic;
        color: #848484;
    }
    .logo p{
        margin: 0px;
        color: #B1AEAE;
        padding: 0px;
        font-family: sans-serif;
        font-size: 12px;
        letter-spacing: 1px;
    }
    .row {
        overflow: hidden;
        clear: both;
    }
    .col-md-6 {
        width: 50%;
        float: left;
    }
    .address-company {
        text-align: right;
    }
    .address-company h4 {
        margin: 0px;
        padding: 0px;
    }
</style>
<body>
<table border="0" width="100%">
    <tr>
        <td class="logo">
            <h1>ATTENDANCE REPORT<span></span></h1>

        </td>
<br>


    </tr>
    <tr>
        <td colspan="2" style="background: #F1F1F1;padding: 14px;">
            {{-- <h2 style="margin: 0px; padding: 0px;font-size: 20px;">Booking ID: {{ $book->id }}</h2> --}}

        </td>
    </tr>
    <tr>
        <td><br></td>
        <td><br></td>
    </tr>
    <tr>
        <td>
            <b>Lecturer Name:</b><br>
            {{ Auth::user()->name }}<br>
            {{ Auth::user()->userid}}<br>
        </td>


    </tr>
</table>

<table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
  <thead>
      <tr>

          <th width="15%">Matric Number</th>
          <th width="35%">Student Name</th>
          <th width="25%">Status</th>
      </tr>
  </thead>
  <tbody pull-{right}>

    @foreach ($attendances as $attendance)
        @if($attendance->status == "Absence")
        <tr>

          <td>{{$attendance->nomatrik}}</td>
          <td>{{$attendance->user->name}}</td>
          <td>{{$attendance->status}}</td>
        </tr>

        {{-- @else
          <tr>

            <td>{{$attendance->nomatrik}}</td>
            <td>{{$attendance->user->name}}</td>
            <td>{{$attendance->status}}</td>
          </tr> --}}

      @endif

    @endforeach


            <td>
            <th>No of Present Student: {{$status}}<th>
            <br>
            <th>No of Absent Student: {{$status2}}<th>
            </td>
    {{-- <tr>
        <td width="40%" style="text-align: right; font-size: 18px;padding: 10px;">Tarikh Pembayaran : </td>
        {{-- <td width="60%" style="text-align: right; font-size: 18px; font-weight: bold; padding: 10px;">{{ $tempahan->pembayaran->created_at->format('d/m/Y g:ia') }}</td> --}}
    {{--</tr> --}}
    </tbody>
</table>
<table class="table table-bordered" border="1" style="border-collapse: collapse; width: 80%; border-color: #adadad;">
</body>
</html>
