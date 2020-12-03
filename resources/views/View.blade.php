@extends('index')
@section('content')
<h3>Student List</h3>
<table border="1">
  <thead>
    <th>Student Name</th>
    <th>Class</th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
      <td>{!! $row['StudentName'] !!}</td>
      <td>{!! $row['Class'] !!}</td>
      <td><a href="{!! URL::route('getEdit', $row['ID']) !!}">Edit</a></td>
      <td><a href="{!! URL::route('Delete', $row['ID']) !!}">Delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
<a href="{!! URL::route('getAdd') !!}">Add Student</a>
@endsection
