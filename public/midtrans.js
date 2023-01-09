

function bayar(transaksi) { 
    
    $.ajax({
        type: "get",
        url: "midtrans/"+transaksi,
        dataType: "json",
        success: function (response) {
            
            snap.pay(response, {
                
                onSuccess: function(result){

                },
                onPending: function(result){
                    
                },
                onError: function(result){
                    
                }
            });
        }
    });
 }

$('#bayarlaa').click
(function (e) { 
    e.preventDefault();
     

});