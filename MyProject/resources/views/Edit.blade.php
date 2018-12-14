@extends('index')
@section('content')
<table>
  <form class="" action="" method="post">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <tr>
    <td><label for="">Student Name: </label></td>
    <td><input type="text" name="Name" value="{!! old('Name',isset($col) ? $col['StudentName'] : null) !!}"></td>
  </tr>
  <tr>
    <td><label for="">Class: </label></td>
    <td><input type="text" name="Class" value="{!! old('Class',isset($col) ? $col['Class'] : null) !!}"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="save" value="Update"></td>
  </tr>
  </form>
</table>
@endsection
