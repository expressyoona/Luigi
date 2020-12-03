<div class="container col-md-12">
    <center><h1>List of Food</h1></center>
    <br><br>
    <div class="row result">
        
    </div>
    @foreach($food_list as $items)
    @if ($i % 3 == 0)
    <div class="row">
    @endif
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
                <img width="100%" src="images/{{ $items['Image'] }}">
                <div class="caption">
                    <div class="info" style="height: 120px">
                    <h3 class="foodname">{{ $items['FoodName'] }}
                        <!-- {!! URL::route('showEditFood', $items['MenuID']) !!} -->
                        <span style="font-size: 17px;" class="edit glyphicon glyphicon-pencil"></span>
                        <input type="hidden" value="{{ route('showEditFood', $items['MenuID']) }}" name="">
                    </h3>
                    <p class="description">{{ $items['Description'] }}</p>
                    </div>
                        <p>
                            <a style="" class="btn btn-danger" href="{{ route('DeleteFood', $items['MenuID']) }}" role="button">Delete</a>
                        </p>
                </div>
            </div>
        </div>
    @if ($i++ % 3 == 2)
    </div>
    <hr>
    @endif
    @endforeach
</div>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    .food_name {
        font-size: 18px;
        font-weight: bold;
    }
    .row-hd {
        font-size: 20px;
        font-weight: bold;
    }
    .editting {
        font-size: 24px;

    }
    .editName:hover {
        cursor: pointer;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        
        $('.edit').click(function() {
            var link = $(this).next().val();
            $.ajax({
                type: 'GET',
                dataType: 'text',
                url: link,
                success: function(result) {
                    $('.result').html(result);
                }
            });
            $('body').scrollTop(0);

        });

    });
</script>