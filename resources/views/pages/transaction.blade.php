@extends('layouts.app')

@section('content')
@include('tabs.cart')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Transactions') }}</div>
 
                    <div class="card-body">                       
                        <div id="tranasactions_type_btn" class="container-sm">
                            <button type="button" id="sale"class="btn btn-primary btn-lg btn-block">Sale Inventories</button>
                            <button type="button" id="receive" class="btn btn-secondary btn-lg btn-block">Receive Inventory</button>
                        </div>
                        <h3 id="invH3" class= "mt-5 text-center">Heading</h3>
                        <div id="grid">
                            @include('layouts.grid')
                            @include('tabs.display.quantity')

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    $(".atc").click(function(){
        var items = @json($Objects["shop_view"]);
        var ID = $(this).val();
        items.data.forEach(function (item, index) {
            myFunction(ID, item, index)
        });
        function myFunction(myid, item, index) {
            var url = '{{asset("Images")}}/:id';
            if (myid == item.id){
                url = url.replace(':id', item.image);
                $("#invImg").attr("src", url )
                $('#invTitleModel').text(item.name);
                $('#invPrice').text("Price: " + item.price);

            }
        } 
    });
    $("#sale").click(function(){
        $("#tranasactions_type_btn").hide();
        $("#invH3").show();
        $("#grid").show();
    });
    $("#receive").click(function(){
        $("#tranasactions_type_btn").hide();
        $("#invH3").show();
        $("#grid").show();
    });
    $(document).ready(function(){
        $("#invH3").hide();
        $("#grid").hide();
         
    });

</script>
@endsection