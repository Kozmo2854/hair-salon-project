$(document).ready(function () {
    const columnDefs = [
        {
            data: 'id',
            title: 'ID',
            type: 'hidden',
        },
        {
            data: 'user_email',
            title: 'User email',
        },
        {
            data: 'action',
            title: 'Action',
        },
        {
            data: 'object_id',
            title: 'Object ID',
        },
        {
            data: 'created_at',
            title: 'Created at',
            type: 'readonly',
        },
        {
            data: 'updated_at',
            title: 'Updated at',
            type: 'readonly',
        },
    ];
    myTable = $('.dataTable').DataTable({
        "sPaginationType": "full_numbers",
        ajax: {
            url: "http://localhost:8000/api/getLogs",
            // our data is an array of objects, in the root node instead of /data node, so we need 'dataSrc' parameter
            dataSrc: '',
        },
        columns: columnDefs,
        dom: 'Bfrtip',        // Needs button container
        select: 'single',
        responsive: true,
        altEditor: false,     // Enable altEditor
        buttons: [],
    })
})
