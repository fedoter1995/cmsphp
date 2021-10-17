var post = {

    ajaxMethod: 'POST',

    add: function()
    {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        //formData.append('content', $('#formContent').val());


        $.ajax ({

            url: "/admin/post/add/",
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,

            beforeSend: function(){
                

            },

            success: function(result){

                console.log($.trim(result));
                location = '/admin/posts/edit/'+$.trim(result);
            }

        });
    },

    update: function()
    {
        var formData = new FormData();

        formData.append('post_id', $('#formPostId').val());
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        //formData.append('content', $('#formContent').val());


        $.ajax ({

            url: "/admin/post/update/",
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