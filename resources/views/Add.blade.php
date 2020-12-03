@extends('index')
@section('content')
<table>
  <form class="" action="{!! route('add') !!}" method="post">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <tr>
    <td><label for="">Student Name: </label></td>
    <td><input type="text" name="Name" value=""></td>
  </tr>
  <tr>
    <td><label for="">Class: </label></td>
    <td><input type="text" name="Class" value=""></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="save" value="Save"></td>
  </tr>
  </form>
</table>
@endsection
