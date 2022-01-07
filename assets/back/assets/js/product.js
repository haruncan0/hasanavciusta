(function($) {
	$(document).on("submit", "#infoAddProduct", function(event){
        event.preventDefault();
        var serialized = $(this).serializeArray();
        serialized.push({
            name: 'csrf',
            value: Cookies.get('csrf_token')
        });
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: serialized,
            url: url + 'add_product',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Ürün Başarıyla Eklendi.");
                    setTimeout(
                        function(){
                            window.location.reload();
                        }, 1000);
                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });

    $(document).on("submit", "#infoUpdateProduct", function(event){
        event.preventDefault();
        var serialized = $(this).serializeArray();
        serialized.push({
            name: 'csrf',
            value: Cookies.get('csrf_token')
        });
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: serialized,
            url: url + 'update_product',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Ürün Başarıyla Güncellendi.");
                    setTimeout(
                        function(){
                            window.location = result.url;
                        }, 1000);
                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });

    $(".status-product-image-1").change(function(){

        var id = $(this).data("id");

        if($(this).prop('checked')) {
            var status = 1;
        } else {
            var status = 0;
        }

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'status',
            value : status
        },{
            name : 'id',
            value : id
        }]
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'product_status_1',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Resim Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Resim Artık Sitede Görünecek.");
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".status-product-image-2").change(function(){

        var id = $(this).data("id");

        if($(this).prop('checked')) {
            var status = 1;
        } else {
            var status = 0;
        }

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'status',
            value : status
        },{
            name : 'id',
            value : id
        }]
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'product_status_2',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Resim Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Resim Artık Sitede Görünecek.");
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".delete-product-image-1").jConfirm().on('confirm', function(e){

        var id = $(this).data("id");

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'id',
            value : id
        }]

        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'delete_product_1',
            success: function(result) {
                if (result.status === true) {
                    $('#delete'+id).remove();
                    toastr.success(" Silindi.");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".delete-product-image-2").jConfirm().on('confirm', function(e){

        var id = $(this).data("id");

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'id',
            value : id
        }]

        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'delete_product_2',
            success: function(result) {
                if (result.status === true) {
                    $('#delete'+id).remove();
                    toastr.success(" Silindi.");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });

    $(".product-list-status").change(function(){

        var id = $(this).data("id");

        if($(this).prop('checked')) {
            var status = 1;
        } else {
            var status = 0;
        }

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'status',
            value : status
        },{
            name : 'id',
            value : id
        }]
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'product_list_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Ürün Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Ürün Artık Sitede Görünecek.");
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".delete-product-list").jConfirm().on('confirm', function(e){

        var id = $(this).data("id");

        var data = [
        {
            name: 'csrf',
            value: Cookies.get('csrf_token')
        },{
            name : 'id',
            value : id
        }]

        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'delete_product',
            success: function(result) {
                if (result.status === true) {
                    $('#delete'+id).remove();
                    toastr.success(" Silindi.");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });

    var typingTimer;
    var $input = $('.item_order');

    $input.keydown(function(){
        clearTimeout(typingTimer);
    });

    $(".item_order").keyup(function(){
        var id = $(this).data("id");
        var new_order = $(this).val();
        clearTimeout(typingTimer);
        typingTimer = setTimeout(function (){
            if(new_order > 0) {
                var data = [
                {
                    name: 'csrf',
                    value: Cookies.get('csrf_token')
                },{
                    name : 'new_order',
                    value : new_order
                },{
                    name : 'id',
                    value : id
                }]
                $.ajax({
                    method: 'post',
                    dataType: 'json',
                    data: data,
                    url: url + 'item_order',
                    success: function(result) {
                        if (result.status === true) {
                            toastr.success("Sıralama Değiştirildi.");
                        } else {
                            toastr.warning(result.error);
                        }
                    },
                    error: function() {
                        toastr.error("Bağlantı Hatası Tekrar Deneyin");
                    }
                });
            }
        }, 800);
    });

    $(".item_order_2").keyup(function(){
        var id = $(this).data("id");
        var new_order = $(this).val();
        clearTimeout(typingTimer);
        typingTimer = setTimeout(function (){
            if(new_order > 0) {
                var data = [
                {
                    name: 'csrf',
                    value: Cookies.get('csrf_token')
                },{
                    name : 'new_order',
                    value : new_order
                },{
                    name : 'id',
                    value : id
                }]
                $.ajax({
                    method: 'post',
                    dataType: 'json',
                    data: data,
                    url: url + 'item_order_2',
                    success: function(result) {
                        if (result.status === true) {
                            toastr.success("Sıralama Değiştirildi.");
                        } else {
                            toastr.warning(result.error);
                        }
                    },
                    error: function() {
                        toastr.error("Bağlantı Hatası Tekrar Deneyin");
                    }
                });
            }
        }, 800);
    });

    
})(jQuery);