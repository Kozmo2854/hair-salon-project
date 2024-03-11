$(document).ready(function () {
    let columnDefs = [
        {
            data: "id",
            title: "ID",
            type: "hidden",
        },
        {
            data: "title",
            title: "Title",
        },
        {
            data: "originalPrice",
            title: "Original Price"
        },
        {
            data: "description",
            title: "Description"
        },
        {
            data: "image",
            title: "Image"
        },
        {
            data: "discountedPrice",
            title: "Discounted Price"
        },
        {
            data: "stock",
            title: "Stock"
        },
        {
            data: "category",
            title: "Category"
        },
        {
            data: "created_at",
            title: "Created at",
            type: "readonly"
        },
        {
            data: "updated_at",
            title: "Updated at",
            type: "readonly"
        },
    ];
    myTable = $('.dataTable').DataTable({
        "sPaginationType": "full_numbers",
        ajax: {
            url: "http://localhost:8000/api/getAdminOrders",
            // our data is an array of objects, in the root node instead of /data node, so we need 'dataSrc' parameter
            dataSrc: '',
        },
        columns: columnDefs,
        dom: 'Bfrtip',        // Needs button container
        select: 'single',
        responsive: true,
        altEditor: true,     // Enable altEditor
        buttons: [
            {
                text: 'Add',
                name: 'add'        // do not change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Edit',
                name: 'edit'        // do not change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Delete',
                name: 'delete'      // do not change name
            },
            {
                text: 'Refresh',
                name: 'refresh'      // do not change name
            }
        ],
        onAddRow: function (datatable, rowdata, success, error) {
            $.ajax({
                // a tipycal url would be / with type='PUT'
                url: "http://localhost:90/api/product",
                type: 'POST',
                data: rowdata,
                success: success,
                error: error
            });
        },
        onDeleteRow: function (datatable, rowdata, success, error) {
            for (const row of rowdata) {
                $.ajax({
                    // a tipycal url would be /{id} with type='DELETE'
                    url: "http://localhost:90/api/product/" + row.id,
                    type: 'DELETE',
                    data: rowdata,
                    success: success,
                    error: error
                });
            }
        },
        onEditRow: function (datatable, rowdata, success, error) {
            $.ajax({
                // a tipycal url would be /{id} with type='POST'
                url: "http://localhost:90/api/product/" + rowdata.id,
                type: 'PATCH',
                data: rowdata,
                success: success,
                error: error
            });
        }
    })
})
