
    function displayImg(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#invImage").attr("src",reader.result)
            }
            reader.readAsDataURL(file);
        }
    }


    $("#new").click(function(){
        var val = $("#new").val();
        $("#ModalLongTitle").html(val);
    });
    $("#edit").click(function(){
        var val = $("#edit").val();
        $("#ModaleditTitle").html(val);
    });
    $("#new").click(function(){
        alert();
    });

    var quantitiy=0;
    $('.quantity-right-plus').click(function(e){
         
         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         var quantity = parseInt($('#quantity').val());
         
         // If is not undefined
             
             $('#quantity').val(quantity + 1);
 
           
             // Increment
         
     });
 
      $('.quantity-left-minus').click(function(e){
         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         var quantity = parseInt($('#quantity').val());
         
         // If is not undefined
       
             // Increment
             if(quantity>0){
             $('#quantity').val(quantity - 1);
             }
     });