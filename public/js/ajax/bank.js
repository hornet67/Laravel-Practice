$(document).ready(function () {
    // Show Ajax Code
    function show() {
        $.ajax({
            url: '/banks/show',
            method: 'Get',
            success: function (res) {
                let tableData = "";
                $.each(res.data, function (key,item) {
                    tableData += `<tr>
                                    <td>${key+1}</td>
                                    <td>${item.name}</td>
                                    <td>${item.phone}</td>
                                    <td>${item.address}</td>
                                    <td>
                                        <button id="edit" data-id="${item.id}">Edit</button>
                                        <button id="delete" data-id="${item.id}">Delete</button>
                                    </td>
                                </tr>
                    `
                })
                

                $('#data-table tbody').html(tableData);

            },
            error: function (response, textStatus, errorThrown) {
                console.log("Error: ", response);
                console.log("Text Status: ", textStatus);
                console.log("Error Thrown: ", errorThrown);
                // toastr.error('An unexpected error occurred.', "Error");
            },
        })
    }

    show();
    


    // Add ajax code
    $('#AddForm').on('submit', function (e) {
        e.preventDefault();
        let formdata = new FormData(this);

        $.ajax({
            url: '/banks',
            method: "POST",
            // data: {name:name, email:email, phone:phone, _token:_token},
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function (response, settings) {
                $(document).find('span[id$="_error"]').text('');
            },
            success: function (res) {
                $('#AddForm')[0].reset();
                // $('.load-data').load(location.href + ' .load-data');
                // $('.load-data')
                show();
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
                    // toastr.error('An unexpected error occurred.', "Error");
                }
            },
        });
    });


    // function edit() {
    //     $('#edit').on('click', function (e) {
    //         $('#editModal').show();
    //         let id = $(this).data('id');
    //         // console.log(id);
            
    //         $.ajax({
    //             url: '/banks',
    //             method: "Get",
    //             data: {id},
    //             success: function (res) {
                    
    //             },
    //         });
    //     })
    // }
    $(document).on('click','#edit', function (e) {
        
        let id = $(this).data('id');
        
        $.ajax({
            url: '/banks/edit',
            method: "Get",
            data: {id},
            success: function (res) {
                console.log(res);
                $('#updateName').val(res.data.name)
                $('#updatePhone').val(res.data.phone)
                $('#updateAddress').val(res.data.address)
                $('#editModal').show();
            },
        });
    })
    
    // edit();

    // Update ajax code
    $('#EditForm').on('submit', function (e) {
        e.preventDefault();
        let formdata = new FormData(this);

        $.ajax({
            url: '/banks',
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
                // $('.load-data').load(location.href + ' .load-data');
                show();
                alert(res.message)
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
                    // toastr.error('An unexpected error occurred.', "Error");
                }
            },
        });
    });
});