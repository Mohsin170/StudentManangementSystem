@extends('csv_file')

@section('csv_data')

<table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>RollNo</th>
   <th>FirstName</th>
   <th>LastName</th>
   <th>Age</th>
   <th>Speciality</th>
  </tr>
 </thead>
 <tbody>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->RollNo }}</td>
   <td>{{ $row->FirstName }}</td>
   <td>{{ $row->LastName }}</td>
   <td>{{ $row->Age }}</td>
   <td>{{ $row->Speciality }}</td>
  </tr>
 @endforeach
 </tbody>
</table>

{!! $data->links() !!}

@endsection