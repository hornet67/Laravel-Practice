$(document).ready(function () {
    // Show Ajax Code
    $.ajax({
        url: '/students/show',
        method: 'Get',
        success: function (response) {
            console.log(response)
        },
        error: function (response, textStatus, errorThrown) {
            console.log("Error: ", response);
            console.log("Text Status: ", textStatus);
            console.log("Error Thrown: ", errorThrown);
            toastr.error('An unexpected error occurred.', "Error");
        },
    })


    // Add ajax code
    $('#addForm').on('submit', function (e) {
        e.preventDefault();
        // let name = $('#name').val();
        // let email = $('#email').val();
        // let phone = $('#phone').val();
        // let _token = $('input[name="_token"]').val();
        let formdata = new FormData(this);

        $.ajax({
            url: '/students/add',
            method: "POST",
            // data: {name:name, email:email, phone:phone, _token:_token},
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function (response, settings) {
                $(document).find('span[id$="_error"]').text('');
            },
            success: function (res) {
                $('#addForm')[0].reset();
                $('.load-data').load(location.href + ' .load-data');
                // $('.load-data')
                console.log(res)
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
                    toastr.error('An unexpected error occurred.', "Error");
                }
            },
        });
    });



    // Update ajax code
    $('#editForm').on('submit', function (e) {
        e.preventDefault();
        let formdata = new FormData(this);

        $.ajax({
            url: '/students/update',
            method: "POST",
            // data: {name:name, email:email, phone:phone, _token:_token},
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function (response, settings) {
                $(document).find('span[id$="_error"]').text('');
            },
            success: function (res) {
                $('#editForm')[0].reset();
                $('.load-data').load(location.href + ' .load-data');
            },
            error: function (response, textStatus, errorThrown) {
                if (response.responseJSON && response.responseJSON.errors) {
                    $.each(response.responseJSON.errors, function (key, value) {
                        $('#update_' + key + "_error").text(value);
                    });
                }
                else {
                    console.log("Error: ", response);
                    console.log("Text Status: ", textStatus);
                    console.log("Error Thrown: ", errorThrown);
                    toastr.error('An unexpected error occurred.', "Error");
                }
            },
        });
    });
});