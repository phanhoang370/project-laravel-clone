var gridster = null;
$(document).ready(function () {
    gridster = $(".gridster ul").gridster({
        widget_base_dimensions: ['auto', 140],
        autogenerate_stylesheet: true,
        min_cols: 1,
        max_cols: 6,
        widget_margins: [5, 5],
        serialize_params: function ($w, wgd) {
            return {
                id: $w.attr('data-id'),
                col: wgd.col,
                row: wgd.row,
                size_x: wgd.size_x,
                size_y: wgd.size_y
            };
        },
        resize: {
            enabled: true,
            stop: function (e, ui, $widget) {
                console.log(gridster.serialize());
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post("/config", {data: gridster.serialize()})
                    .done(function (data) {
                        console.log(data);
                    });
            }
        },
        draggable: {
            stop: function (e, ui, $widget) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post("/config", {data: gridster.serialize()})
                    .done(function (data) {
                        console.log(data);
                    });
            }
        }

    }).data('gridster');
    $('.gridster  ul').css({'padding': '0'});

    $('.dropdown-toggle').prop('disabled', true);


});

function setLocate(data) {
    window.location.href = ('/' + data + window.location.pathname.slice(3));
}

$(document).ready(function () {

    setTimeout(function () {
        $('body').addClass('loaded');
        $('h1').css('color', '#222222');
    }, 500);

    $('td.change-link a').click(function (e) {
        e.preventDefault();
        window.location.href = 'http://www.infra911.com/' + $(this).attr('href');
    });

});


(function ($, window, document, undefined) {
    var jstree = {
        init: function () {
            $.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
                $.each(data, function (key, value) {
                    if (data[key]['parent'] == 'g_') data[key]['parent'] = '#';
                    //add a properies
                    data[key]["a_attr"] = ({
                        "gid": data[key]['gid'],
                        "nodeid": data[key]['nodeid']
                    });
                    delete data[key]['state'];
                });

                if (localStorage.getItem('data') === null) {
                    dataMerge = data;
                } else {
                    //console.log(JSON.parse(localStorage.getItem('data')));
                    dataMerge = JSON.parse(localStorage.getItem('data')).concat(data);
                }

                $('#tree-container').jstree({

                    "core": {
                        "data": dataMerge,
                        "check_callback": true,
                        "multiple": false,
                        'themes': {
                            'responsive': false,
                            "dots": false
                        }
                    },
                    "state": {"key": "myTree"},
                    "checkbox": {
                        "keep_selected_style": false
                    },
                    'types': {
                        'selectable': {
                            'icon': 'fa fa-lg fa-server status-critical'
                        },
                        'default': {
                            'icon': 'fa fa-lg fa-server status-critical'
                        }
                    },
                    "plugins": ["state", "contextmenu", "types"],
                    "contextmenu": {
                        "items": function ($node) {
                            var tree = $("#tree-container").jstree(true);
                            return {

                                "Create": {
                                    "separator_before": false,
                                    "separator_after": false,
                                    "label": "Create",
                                    "action": function (obj) {
                                        $node = tree.create_node($node);
                                        tree.edit($node);
                                    }
                                },
                                "Rename": {
                                    "separator_before": false,
                                    "separator_after": false,
                                    "label": "Rename",
                                    "action": function (obj) {
                                        tree.edit($node);
                                    }
                                },
                                "Remove": {
                                    "separator_before": false,
                                    "separator_after": false,
                                    "label": "Remove",
                                    "action": function (obj) {
                                        tree.delete_node($node);
                                    }
                                },
                                "ViewGrid": {
                                    "separator_before": false,
                                    "separator_after": false,
                                    "label": "View Grid",
                                    "action": function (obj) {
                                        //console.log(obj.reference[0].id);
                                        viewGrid(obj.reference[0].id)
                                    }
                                },

                                "ViewChart": {
                                    "separator_before": false,
                                    "separator_after": false,
                                    "label": "View Chart",
                                    "action": function (obj) {
                                        viewChart(obj.reference[0].id)
                                    }
                                }
                            }
                        }
                     }

                    //"dnd","search" ,
                }).on('ready.jstree click', function (e, data) {
                    $('').removeClass('').addClass('fa fa-lg fa-server status-critical');
                })
                    .on('create_node.jstree', function (e, data) {
                        if (localStorage.getItem('data') === null) {

                            localStorage.setItem('data', JSON.stringify([{
                                "id": guid(),
                                'parent': data.node.parent,
                                'position': data.position,
                                'text': data.node.text,
                                'a_attr': {'gid': "1", 'nodeid': "1"},
                            }]));

                        } else {

                            resultJsonData=localStorage.setItem('data', JSON.stringify(JSON.parse(localStorage.getItem('data')).concat(
                                {
                                    "id": guid(),
                                    'parent': data.node.parent,
                                    'position': data.position,
                                    'text': data.node.text,
                                    'a_attr': {'gid': "1", 'nodeid': "1"},
                                }
                            )));
                            jsonParseData = JSON.parse(localStorage.getItem('data'));
                            //console.log(resultJsonData);
                            for (var i = 0; i < jsonParseData.length; i++) {
                                console.log(data.node.id);
                                //if (resultJsonData[i]['id'] == data.node.id) {
                                    console.log('voday');
                                    jsonParseData[i]['text'] = data.node.text;

                                    console.log(jsonParseData[i]['text'] = data.node.text);
                                    insertData = localStorage.setItem('data', JSON.stringify(jsonParseData));
                                    // localStorage.setItem('data', JSON.stringify(jsonParseData.concat(
                                    //     {
                                    //         "id": guid(),
                                    //         'parent': data.node.parent,
                                    //         'position': data.position,
                                    //         'text': data.node.text,
                                    //         'a_attr': {'gid': "1", 'nodeid': "1"},
                                    //     }
                                    // )));

                                //}
                            }


                        }

                        //console.log(JSON.parse(localStorage.getItem('data')));
                    }).on('rename_node.jstree', function (e, data) {

                    jsonParseData = JSON.parse(localStorage.getItem('data'));
                    //console.log(jsonParseData);
                    for (var i = 0; i < jsonParseData.length; i++) {
                        //console.log(data.node.id);
                        if (jsonParseData[i]['id'] == data.node.id) {
                            jsonParseData[i]['text'] = data.text;
                            insertData = localStorage.setItem('data', JSON.stringify(jsonParseData));
                            //console.log(insertData);
                        }
                    }

                }).on('delete_node.jstree', function (e, data) {
                    jsonParseData = JSON.parse(localStorage.getItem('data'));
                    for (var i = 0; i < jsonParseData.length; i++) {

                        if (jsonParseData[i]['id'] == data.node.id) {
                            console.log(data.node.id);
                            jsonParseData.splice(i,1);
                            localStorage.setItem('data', JSON.stringify(jsonParseData));
                        }
                    }

                });


            });
        }
    };
    $(document).ready(function () {
        $('#g_0').removeClass('jstree-open');
        $('#g_0').attr("aria-expanded", "false");
        jstree.init();


        setInterval(function () {
            $('#tree-container').removeAttr('aria-multiselectable', 'aria-activedescendant', 'aria-busy', 'tabindex', 'role');
            $('#tree-container').removeClass('jstree', 'jstree-1', 'jstree-default');
            jstree.init();

        }, 60000);


    });
})(jQuery, window, document);

function guid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }

    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();

}


