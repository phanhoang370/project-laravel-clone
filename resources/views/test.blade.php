<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div id="tree-container">

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/jstree.min.js"></script>
<script>
    $.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
        $.each(data, function (key, value) {
            //root  must be value=#
            if (data[key]['parent'] == 'g_') data[key]['parent'] = '#';

            //add a properies
            data[key]["a_attr"] = ({
                "gid": data[key]['gid'],
                "nodeid": data[key]['nodeid']
            });

            $('#tree-container').jstree({
                "core": {
                    "data": data,
                    'check_callback' : true,
                    'themes' : {
                        'responsive' : false
                    }
                },
                'plugins': ['state', 'contextmenu'],
                "contextmenu":{
                    "items": function($node) {
                        var tree = $("#tree-container").jstree(true);
                        return {

                            "Grid": {
                                "separator_before": false,
                                "separator_after": false,
                                "label": "Grid",
                                "icon"				: "glyphicon glyphicon-leaf",
                                "action": function (obj) {
                                    $node = tree.copy_node($node);
                                    console.log(obj.reference[0].id);

                                }
                            },

                        };
                    }
                }
            }).on('create_node.jstree', function (e, data) {
                if (localStorage.getItem('data')===null) {
                    localStorage.setItem('data', JSON.stringify([{
                        "id": guid(),
                        'parent': data.node.parent,
                        'position': data.position,
                        'text': data.node.text,
                        'a_attr': {'gid': "1", 'nodeid': "1"},
                    }]));

                }else {
                    localStorage.setItem('data', JSON.stringify(JSON.parse(localStorage.getItem('data')).concat(
                        {
                            "id": guid(),
                            'parent': data.node.parent,
                            'position': data.position,
                            'text': data.node.text,
                            'a_attr': {'gid': "1", 'nodeid': "1"},
                        }
                    )));
                }
                console.log(JSON.parse(localStorage.getItem('data')));
            }).on('rename_node.jstree', function (e, data) {


            }).on('delete_node.jstree', function (e, data) {
                $.get('response.php?operation=delete_node', {'id': data.node.id})
                    .fail(function () {
                        data.instance.refresh();
                    });
            });
        });

    });
    function guid() {
        function s4() {
            return Math.floor((1 + Math.random()) * 0x10000)
                .toString(16)
                .substring(1);
        }
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
            s4() + '-' + s4() + s4() + s4();
    }
</script>
</body>

</html>