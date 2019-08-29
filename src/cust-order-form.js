var glb_boolean = false;

    customerorderform({orderForm:1}, 'customerorderform','cust-order-form');
    function customerorderform(data,id,uri)
    {	
        $.ajax({
                url: uri,
                method: "POST",
                data: data,
                beforeSend:function(data)
                {
                    $('#'+id).html('<img src="images/gif/loader.gif" width="50" height="50">');
                },
                success:function(data)
                {
                    $('#'+id).html(data);
                }
            });       
    }