var page = {

    ajaxMethod: 'POST',

    add: function()
    {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        //formData.append('content', $('#formContent').val());


        $.ajax ({

            url: "/admin/page/add/",
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,

            beforeSend: function(){
                

            },

            success: function(result){

                console.log($.trim(result));
                location = '/admin/pages/edit/'+$.trim(result);
            }

        });
    },

    update: function()
    {
        var formData = new FormData();

        formData.append('page_id', $('#formPageId').val());
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        //formData.append('content', $('#formContent').val());


        $.ajax ({

            url: "/admin/page/update/",
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,

            beforeSend: function(){
                

            },

            success: function(result){

                console.log(result);
            }

        });
    }
};