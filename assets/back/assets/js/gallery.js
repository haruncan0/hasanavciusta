(function($) {
	$(document).on("submit", "#infoAddGallery", function(event){
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
            url: url + 'add_gallery',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Resim Başarıyla Eklendi.");
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

    $(document).on("submit", "#infoUpdateGallery", function(event){
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
            url: url + 'update_gallery',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Başarıyla Güncellendi.");
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

    $(".gallery-status").change(function(){

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
            url: url + 'gallery_status',
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


    $(".delete-gallery").jConfirm().on('confirm', function(e){

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
            url: url + 'delete_gallery',
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
                    url: url + 'item_order_gallery',
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