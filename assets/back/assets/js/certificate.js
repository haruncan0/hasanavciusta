(function($) {
	$(document).on("submit", "#infoAddCertificate", function(event){
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
            url: url + 'add_certificate',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Sertifika Başarıyla Eklendi.");
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

    $(document).on("submit", "#infoUpdateCertificate", function(event){
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
            url: url + 'update_certificate',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Sertifika Başarıyla Güncellendi.");
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

    $(".certificate-status").change(function(){

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
            url: url + 'certificate_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Sertifika Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Sertifika Artık Sitede Görünecek.");
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


    $(".delete-certificate").jConfirm().on('confirm', function(e){

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
            url: url + 'delete_certifica',
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