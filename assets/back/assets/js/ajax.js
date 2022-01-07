(function($) {

    $(".remove-images").click(function(){

        var data = [
            {
                name: 'csrf',
                value: Cookies.get('csrf_token')
            }]

        toastr.warning("<br /><br /><button type='button' id='confirmationRevertYes' class='btn btn-success clear'>Evet</button><button type='button' id='confirmationRevertNo' class='btn btn-danger clear'>Hayır</button>",'Bellekteki Resimleri Kaldırmak İstediğinize Eminmisiniz?',
        {
            closeButton: false,
            allowHtml: true,
            onShown: function (toast) {
                $("#confirmationRevertYes").click(function(){
                    $.ajax({
                        method: 'post',
                        dataType: 'json',
                        data: data,
                        url: url + 'remove_images',
                        success: function(result) {
                            if (result.status === true) {
                                toastr.success("Bellekteki Resimler Kaldırıldı");
                            } else {
                                toastr.warning(result.error);
                            }
                        },
                        error: function() {
                            toastr.error("Bağlantı Hatası Tekrar Deneyin");
                        }
                    });
                });
            }
        });
    });

    $(document).on("submit", "#infoForm", function(event){
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
            url: url + 'login',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Giriş Başarılı Yönlendiriliyorsunuz");
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

    $(document).on("submit", "#infoEditProfileGeneralForm", function(event){
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
            url: url + 'update_account_genaral',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Giriş Bilgileriniz Güncellendi");
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

    $(document).on("submit", "#infoEditPassForm", function(event){
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
            url: url + 'update_pass_account',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Giriş Bilgileriniz Güncellendi");
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


    // İletişim Bilgileri başlangıç______________________________________________________________________________________

    $(document).on("submit", "#infoUpdateContact", function(event){
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
            url: url + 'update_contact',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("İletişim Bilgileri Güncellendi.");
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

    // İletişim Bilgileri Bitiş__________________________________________________________________________________________


    $(".seen-button").click(function(){

        var id = $(this).data("id");

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
            url: url + 'seen_message',
            success: function(result) {
                if (result.status === true) {
                    $(".seen-button"+id).removeClass("btn-success");
                    $(".seen-button"+id).addClass("btn-secondary");
                }
            }
        });
    });

    $(".delete-message").click(function(){

        var id = $(this).data("id");

        var data = [
            {
                name: 'csrf',
                value: Cookies.get('csrf_token')
            },{
                name : 'id',
                value : id
            }]

        toastr.warning("<br /><button type='button' id='confirmationRevertYes' class='btn btn-success clear'>Evet</button><button type='button' id='confirmationRevertNo' class='btn btn-danger clear'>Hayır</button>",'Silmek İstediğinize Eminmisiniz?',
        {
            closeButton: false,
            allowHtml: true,
            onShown: function (toast) {
                $("#confirmationRevertYes").click(function(){
                    $.ajax({
                        method: 'post',
                        dataType: 'json',
                        data: data,
                        url: url + 'delete_message',
                        success: function(result) {
                            if (result.status === true) {
                                $('#delete'+id).remove();
                                toastr.success("Mesaj Silindi.");

                            } else {
                                toastr.warning(result.error);
                            }

                        },
                        error: function() {
                            toastr.error("Bağlantı Hatası Tekrar Deneyin");
                        }
                    });
                });
            }
        });
    });

    $(document).on("submit", "#infoUpdateSiteSettings", function(event){
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
            url: url + 'site_settings',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Site Ayarları Güncellendi.");
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

    $(document).on("submit", "#infoUpdateHomepage", function(event){
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
            url: url + 'homepage_update',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Güncellendi.");
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



})(jQuery);