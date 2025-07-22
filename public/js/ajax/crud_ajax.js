// reloadData('/api/banks', )

function reloadData(link, showData) {
    $.ajax({
        url: link,
        method: 'Get',
        success: function (res) {
            
            showData(res);

        },
    })
}


function insertAjax(id,link){
    $(id).on('submit', function (e) {
        e.preventDefault();
        let formdata = new FormData(this);

        $.ajax({
            url: link,
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function (response, settings) {
                $(document).find('span[id$="_error"]').text('');
            },
            success: function (res) {
                $(id)[0].reset();

                reloadData(link, show)
                // console.log(res)
            },
            error: function (response, textStatus, errorThrown) {
                if (response.responseJSON && response.responseJSON.errors) {
                    $.each(response.responseJSON.errors, function (key, value) {
                        $('#' + key + "_error").text(value);
                    });
                }
                else {
                    console.log("Error: ", response);
                    console.log("Text Status: ", textStatus);
                    console.log("Error Thrown: ", errorThrown);
                    // toastr.error('An unexpected error occurred.', "Error");
                }
            },
        });
    });
}