<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style media="screen">
  .heading {
    font-weight: bold;
  }
</style>
-->
<div class="container">
  <div class="col-md-6 col-xs-6">
  <h3 class="heading">Edit Food</h3>
  <form class="" action="{{ route('updateFood', $food['MenuID']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="control-label" for="">Food's Name</label>
      <input class="form-control" style="" type="text" name="foodName" value="{{ $food['FoodName'] }}" placeholder="Enter the name of food here">
    </div>
    <div class="form-group">
      <label class="control-label" for="">Price</label>
      <input class="form-control" style="" type="number" name="foodPrice" value="{{ $food['Price'] }}" step="0.01" placeholder="Enter the price of food here">
    </div>
    <div class="form-group">
      <label class="control-label" for="">Kind</label>
      <select style="" class="form-control" name="foodType">
        <option disabled selected value>--- Select An Option ---</option>
        @if ($food['Type'])
          <option value="{{ $food['Type'] }}" selected="">{{ $food['Type'] }}</option>
        @endif
        @foreach($types as $list)
          @if ($list != $food['Type'])
          <option value="{{ $list }}">{{ $list }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label class="control-label" for="">Description</label>
      <input class="form-control" style="" type="text" name="foodDescription" value="{{ $food['Description'] }}" placeholder="Something about the food">
    </div>
    <div class="form-group">
      <label class="control-label" for="">Image</label>
      <input class="form-control" style="" accept="image/png, image/jpeg" type="file" name="foodImage" value="">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="Update" value="Update">
    </div>
  </form>
</div>
<div class="col-xs-6 col-md-6">
  <h3>Preview</h3>
  <img src="images/{{ $food['Image'] }}" height="">
</div>
</div>