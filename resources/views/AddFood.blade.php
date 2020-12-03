
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--
<style media="screen">
  .heading {
    font-weight: bold;
  }
</style>
-->
<div class="container">
  
  <div class="row">
    <div class="col-md-6 col-xs-6">

      <h2 class="heading">Add A New Food</h2>
      <form class="" action="{!! route('AddNewFood') !!}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label class="control-label" for="">Food's Name</label>
          <input class="form-control" style="width:400px" type="text" name="FoodName" value="" placeholder="Enter the name of food here">
        </div>
        <div class="form-group">
          <label class="control-label" for="">Price</label>
          <input class="form-control" style="width:400px" type="number" name="Price" value="" step="0.01" placeholder="Enter the price of food here">
        </div>
        <div class="form-group">
          <label class="control-label" for="">Kind</label>
          <select style="width:400px" class="form-control" name="Type">
            <option disabled selected value>--- Select An Option ---</option>
            <option value="Pizza">Pizza</option>
            <option value="Pasta">Pasta</option>
            <option value="Beverage">Beverage</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" for="">Description</label>
          <input class="form-control" style="width:400px" type="text" name="Description" value="" placeholder="Something about the food">
        </div>
        <div class="form-group">
          <label class="control-label" for="">Image</label>
          <input id="uploadImage" class="form-control" onchange="loadFile(event)" style="width:400px" accept="image/png, image/jpeg" type="file" name="Image" value="">
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="Save" value="Add">
        </div>
      </form>
    </div>
    <div class="col-md-6 col-xs-6">
      <h2>Image Preview</h2>
      <img id="preview" height="400px">
    </div>
  </div>
  
</div>
<script type="text/javascript">

  var loadFile = function(event) {
    var preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
  };

  $(document).ready(function(){

  });
  
</script>