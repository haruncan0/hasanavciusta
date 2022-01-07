(function($) {
	$(document).on("submit", "#infoAddSlider", function(event){
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
            url: url + 'add_slider',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Slider Başarıyla Eklendi.");
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

    $(document).on("submit", "#infoUpdateSlider", function(event){
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
            url: url + 'update_slider',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Slider Başarıyla Güncellendi.");
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

    $(".slider-status").change(function(){

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
            url: url + 'slider_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Slider Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Slider Artık Sitede Görünecek.");
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


    $(".delete-slider").jConfirm().on('confirm', function(e){

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
            url: url + 'delete_slider',
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

    
})(jQuery);