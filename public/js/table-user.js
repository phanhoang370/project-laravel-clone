//change route
function changeRoute(role, id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post( "/admin/user/saveRole", {role: role, id:id})
        .done(function( data ) {
            swal(
                'Good job!',
                'Update complete!',
                'success'
            ).then(function (value) {
                var $table = $('#table-user')
                $table.bootstrapTable('refresh');
            });
        }).
    fail(function(response) {
        swal(
            'Oops...',
            response,
            'error'
        )
    });
}

$(document).ready(function(){

    /* ==========================================================================
        Tables
        ========================================================================== */

    var $table = $('#table-user'),
        $remove = $('#remove'),
        selections = [];

    function totalTextFormatter(data) {
        return 'Total';
    }

    function totalNameFormatter(data) {
        return data.length;
    }

    function totalPriceFormatter(data) {
        return '*********';
    }



    function roleFormatter(data, rowData, index) {
        var classBtn = '',
            classDropup = '',
            pageSize = 10;

        if (data === 'Unverified') classBtn = 'btn-danger';
        if (data === 'User') classBtn = 'btn-primary';
        if (data === 'Admin') classBtn = 'btn-success';

        if (index >= pageSize / 2) {
            classDropup = 'dropup';
        }

        return	'<div class="dropdown dropdown-status ' +
            classDropup +
            ' ">' +
            '<button class="btn ' +
            classBtn +
            ' dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
            data +
            '</button>' +
            '<div class="dropdown-menu">' +
            '<a class="dropdown-item" onclick="changeRoute(\'admin\','+ rowData.id +')">Admin</a>' +
            '<a class="dropdown-item" onclick="changeRoute(\'User\','+ rowData.id +')">User</a>' +
            '<a class="dropdown-item" onclick="changeRoute(\'Unverified\','+ rowData.id +')">Unverified</a>' +
            '</div></div>';
    }

    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        },
        'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'id',
                values: [row.id]
            });
        }
    };

    function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a>  ',
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }

    $table.bootstrapTable({
        iconsPrefix: 'font-icon',
        icons: {
            paginationSwitchDown:'font-icon-arrow-square-down',
            paginationSwitchUp: 'font-icon-arrow-square-down up',
            refresh: 'font-icon-refresh',
            toggle: 'font-icon-list-square',
            columns: 'font-icon-list-rotate',
            export: 'font-icon-download',
            detailOpen: 'font-icon-plus',
            detailClose: 'font-icon-minus-1'
        },
        paginationPreText: '<i class="font-icon font-icon-arrow-left"></i>',
        paginationNextText: '<i class="font-icon font-icon-arrow-right"></i>',
        url: '/admin/user',
        type: 'get',
        dataType: 'json',
        queryParams: function (params) {
            return $.extend(params, {}); // ajax data
        },
        columns: [
            [
                {
                    field: 'state',
                    checkbox: true,
                    rowspan: 2,
                    align: 'center',
                    valign: 'middle'
                },
                {
                    title: 'User ID',
                    field: 'id',
                    rowspan: 2,
                    align: 'center',
                    valign: 'middle',
                    sortable: true,
                    //footerFormatter: totalTextFormatter
                },
                {
                    title: 'User Detail',
                    colspan: 4,
                    align: 'center'
                }
            ],
            [
                {
                    field: 'name',
                    title: 'Name',
                    sortable: true,
                    editable: true,
                    align: 'center'
                },
                {
                    field: 'role',
                    title: 'Role',
                    sortable: true,
                    editable: true,
                    formatter: roleFormatter,
                    // footerFormatter: totalNameFormatter,
                    align: 'center'
                },
                {
                    field: 'email',
                    title: 'User Email',
                    sortable: true,
                    align: 'center'

                },
                {

                    title: 'User Password',
                    sortable: true,
                    align: 'center',
                    formatter: totalPriceFormatter
                }
            ]
        ]
    });

    $table.on('check.bs.table uncheck.bs.table ' +
        'check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        // save your data, here just save the current page
        selections = getIdSelections();
        // push or splice the selections if you want to save all data selections
    });

    $remove.click(function () {
        var ids = getIdSelections();
        $table.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
    });

    $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('refreshOptions', {
            exportDataType: $(this).val()
        });
    });

    /* ========================================================================== */

});
