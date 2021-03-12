
function postRecord(id){
    console.log("btn clicked1");

    var dataId = id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log(dataId);

    $.ajax({
    type: 'post',
    data:  dataId,
    url: '/addToCart/'+dataId,
    success:
        function( response ){
            // console.log(response);
            cartCount();
        }
    });
};



function fetchRecord(){
    console.log("fetch record");

    $.ajax({
    type: 'get',
    url: '/getCart',
    dataType: 'json',
    success:
        function( data ){
               
            var t_data="";
            var total=0;
            var count=0;
            var item_id=[];
            $("#modal_table tbody").html("");
            $.each(data, function(index, element) {
                // console.log(element.id);
                var imag=element.image;
               var link=$(imag).attr('src');
            //  console.log(link);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+link+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.product+'</td>'+
                    '<td>'+
                        '<div class="row">'+
                            '<a id="qty_btn" type="button" onclick=reduceByOne('+element.id+')>-</a>'+
                                '&nbsp;&nbsp;'+element.quantity+'&nbsp;&nbsp;'+
                            '<a id="qty_btn" onclick=addByOne('+element.id+')>+</a>'+
                        '</div>'+
                    '</td>'+
                    '<td>'+'Ksh '+element.price+'</td>'+
                    '<td>'+'Ksh '+element.price  * element.quantity+'</td>'+
                    '<td>'+'<a id="remove_item" type="button" onclick=removeItem('+element.id+')>Remove Item</a> '+'</td>'+
                '</tr>';
                qty = element.quantity;
                price = element.price;
                prod = qty*price;
                total +=prod;
                qty = element.quantity;
                count+=qty;
                item_id=element.id;
                // console.log(item_id);
            });

            $("#total_price").html("Total Amount: Ksh "+total);
            $("#modal_table tbody").append(t_data);
            $("#total_price_header").html('<h4>'+"Your Total Amount is : Ksh "+total+'</h4>');
            $("#form_amount").html('<input type="hidden" name="total" id="amount"  placeholder="" value='+total+' >');
            $("#item_count").html('<input type="hidden" name="item_count" id="item_count"  placeholder="" value='+count+' >');
            cartCount();
        }
    });
};


function addByOne(id){
    console.log("add by one");

    var dataId = id;
    // console.log(dataId);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/addByOne/'+dataId,
    dataType: 'json',
    success:
        function( data ){
            // console.log(data);
            fetchRecord();

        }
    });
};


function reduceByOne(id){
    console.log("reduce by one");

    var dataId = id;
    // console.log(dataId);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/reduceByOne/'+dataId,
    dataType: 'json',
    success:
        function( data ){
            // console.log(data);
            fetchRecord();

        }
    });
};

function removeItem(id){
    console.log("Remove from cart");

    var dataId = id;
    // console.log(dataId);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/remove/'+dataId,
    dataType: 'json',
    success:
        function( data ){
            // console.log(data);
            fetchRecord();
            $('#t_data').remove();
        }
    });
};


function cartCount(){
    console.log("count record");

    $.ajax({
    type: 'get',
    url: '/getCart',
    dataType: 'json',
    success:
        function( data ){
            var count=0;
            $.each(data, function(index, element) {
                // console.log(element);
                qty = element.quantity;
                count+=qty;
            });
            // console.log(count);
            // if(count==0){
            //     $("span #counter").hide();
            // }else{
            //     $("#counter").text(count);
            // }
            // $("#tec_cart").html('<span class="cart-basket d-flex align-items-center justify-content-center" id="counter">'+'</span>');
            $("#counter").text(count);
        }
    });
};



function checkout_table(){
    console.log("checkout table");

    $.ajax({
    type: 'get',
    url: '/getCart',
    dataType: 'json',
    success:
        function( data ){
            var t_data="";

            $("#modal_table tbody").html("");
            $.each(data, function(index, element) {
                // console.log(element);
                 var imag=element.image;
               var link=$(imag).attr('src');
             console.log(link);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+link+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.product+'</td>'+
                    '<td>'+
                        '&nbsp;&nbsp;'+element.quantity+'&nbsp;&nbsp;'+
                    '</td>'+
                    '<td>'+'Ksh '+element.price+'</td>'+
                    '<td>'+'Ksh '+element.price  * element.quantity+'</td>'+
                '</tr>';
            });
            $("#checkout_table tbody").append(t_data);
        }
    });
};


function pesatel(){

    console.log('pesatel function');
    $.ajax({
        type: 'get',
        url: '/get_pesatel_callback',
        dataType: 'json',
        success:
            function( data ){
                console.log(data.total);
                console.log(data.order_number);
                console.log(data.email);
                console.log(data.phone_number);
                console.log(data);
                $(function(){
                    new $.Pesatel({
                        env: 'production',
                        customer_data:{
                            msisdn:'',
                            email:data.email
                        },
                        client_id: '640ea34e-16c3-4fa2-a345-caaf234aa097',
                        pass_key: 'pesatel',
                        return_url: '/success',
                        callback: '/post_pesatel_callback',
                        allow_later: false,
                        code: '1110',
                        payment: {
                            amount: data.total,
                            reference: data.order_number,
                            currency: 'KSH'
                        }
                    }, "#pesatel-container");
                });
                $(".customer_name").html(data.first_name +'&nbsp;' +data.last_name);
                $(".customer_address").html('Address: '+data.street_address);
                $(".customer_email").html('E-mail: '+data.email);
                $(".invoice-id").html(data.order_number);
                var t_data="";

                $("#invoice_table tbody").html("");
                $.each(data, function(index, element) {
                    // console.log(element);
                    t_data=t_data+
                    '<tr id="t_data">'+
                        // '<td>'+'<img src="'+element.image+'" style="height:60px; width:60px;">'+ '</td>'+
                        '<td>'+element.product+'</td>'+
                        '<td>'+
                            '&nbsp;&nbsp;'+element.quantity+'&nbsp;&nbsp;'+
                        '</td>'+
                        '<td>'+'Ksh '+element.price+'</td>'+
                        '<td>'+'Ksh '+element.price  * element.quantity+'</td>'+
                    '</tr>';
                });
                $("#invoice_table tbody").append(t_data);
            }
        });
};


function fetchWishlist(){
    console.log("fetch Wishlist");

    $.ajax({
    type: 'get',
    url: '/fetchWishlist',
    dataType: 'json',
    success:
        function( data ){
            // console.log(data);
            var t_data="";
            $("#wishlist_table tbody").html("");
            $.each(data, function(index, element) {
                // console.log(element.product);
                var imag=element.title;
               var link=$(imag).attr('src');
            //  console.log(link);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+link+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.description+'</td>'+
                    '<td>'+'<a id="remove_item" type="button" onclick=postRecord('+element.id+')>Add To Cart</a> '+'</td>'+
                    '<td>'+'<a id="remove_item" type="button" onclick=removeWishlist('+element.id+')>Remove From Wishlist</a> '+'</td>'+
                '</tr>';
            });
            $("#wishlist_table tbody").append(t_data);
        }
    });
};


function addToWishlist(id){
    console.log("wishlist btn");

    var dataId = id;
    // console.log(dataId);

    $.ajax({
    type: 'post',
    data:  dataId,
    url: '/store_wishlist/'+dataId,
    success:
        function( response ){
            // console.log(response);

        }
    });
};

function wishlistCount(){
    console.log("count wishlist");

    $.ajax({
    type: 'get',
    url: '/count_wishlist',
    dataType: 'json',
    success:
        function( data ){
            // console.log(data);
            var count = Object.keys(data).length;
                console.log(count);
            $("#wishlist_counter").text(count);
        }
    });
};


function removeWishlist(id){
    console.log("Remove from wishlist");

    var dataId = id;
    // console.log(dataId);

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/removeWishlist/'+dataId,
    success:
        function( data ){
            // console.log(data);
            fetchWishlist();

        }
    });
};

function orderHistory(){
    console.log("fetch History");

    $.ajax({
    type: 'get',
    url: '/fetch_tec_history',
    dataType: 'json',
    success:
        function( data ){
            console.log(data);
            var t_data="";
            $("#history_table tbody").html("");
            $.each(data, function(index, element) {
                console.log(element.product);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+element.image+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.product+'</td>'+
                    '<td>'+'<a id="remove_item" type="button" onclick=postRecord('+element.id+')>Add To Cart</a> '+'</td>'+
                    // '<td>'+'<a id="remove_item" type="button" onclick=removeHistory('+element.id+')>Remove From Your History</a> '+'</td>'+
                '</tr>';
            });
            $("#history_table tbody").append(t_data);
        }
    });
};


function removeHistory(id){
    console.log("Remove from History");

    var dataId = id;
    // console.log(dataId);

    $.ajax({
    type: 'get',
    data:  dataId,
    url: '/removeHistory/'+dataId,
    dataType: 'json',
    success:
        function( data ){
            console.log(data);


        }
    });
};


function tec_search(){
    console.log("search");

    $.ajax({
    type: 'get',
    url: '/tec_search',
    dataType: 'json',
    success:
        function( data ){
            console.log("search data"+data);

        }
    });
};
