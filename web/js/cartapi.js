

$(document).ready(function(){UpdateCart()});
function addToCart(obj){
    
    var id = $(obj).attr('data-id-cart')
    var price = $(obj).attr('data-price-cart')
    $.ajax( {
        type: "post",
        url: "site/addcart",
        dataType: "json",
        data: {
            product_id: id,
            count: 1,
            price: price
        },
        success: function(data) {
            alert("Добавлено в корзину!");
       }
      } );

    UpdateCart();
}


function UpdateCart()
{
   
    $.ajax( {
        type: "post",
        url: "site/checkcart",
        dataType: "json",
        data: {
              },
        success: function(data) {
          if(data.count > 0)
                alert("Корзина не пуста");
            else alert("Корзина пуста");

       }
      } );

}

UpdateCart();