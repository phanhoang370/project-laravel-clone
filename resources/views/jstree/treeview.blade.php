@extends('layouts.app')
<div id="jstree" style="position: absolute;top:200px;">test</div>
@section('scripts')
    <script>
        $('#jstree').jstree({
            'plugins': ['state'],
            'core' : {
                'data' : {
                    "url" : "/jstree",
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            }
        })
        // var inst;
        // function createNode(parent, pos) {
        //     inst.create_node(parent, {}, pos, function (newNode) {
        //         setTimeout(function () {
        //             inst.edit(newNode, '', function (newNode, status) {
        //                 if (!newNode.text || !status) inst.delete_node(newNode);
        //             });
        //         }, 0);
        //     });
        // }
        //
        // function updateDB(node, action) {
        //     console.log(action+' '+node.id);
        // }
        //
        // $('#jstree').on('keydown.jstree', '.jstree-anchor', function (e) {
        //     if(e.target.tagName === "INPUT") { return true; }
        //
        //     var node = inst.get_node(this);
        //     var plain=!e.ctrlKey && !e.altKey && !e.shiftKey;
        //     var ctrlOnly=e.ctrlKey && !e.altKey && !e.shiftKey;
        //
        //     // creating nodes - ctrl + arrow keys
        //     var index=[38, 40,37, 39].indexOf(e.which);
        //     if (index>-1 && ctrlOnly) createNode(node, ['before', 'after', 'first', 'last'][index]);
        //
        //     // deleting nodes - del key
        //     if (e.which===46 && plain) inst.delete_node(node);
        // });
        //
        // $('#jstree').on('rename_node.jstree', function(e, obj) {
        //     var text=obj.text.trim();
        //     var old=obj.old.trim();
        //     if (text && !old) updateDB(obj.node, 'create'); else if (text!==old) updateDB(obj.node, 'rename');
        // });
        //
        // $('#jstree').on('delete_node.jstree', function(e, obj) {
        //     if (obj.node.text) updateDB(obj.node, 'delete');
        // });
        //
        // $('#jstree').on('select_node.jstree', function(e, obj) {
        //     var selected=inst.get_selected()[0];
        //     var currTime=(new Date()).getTime();
        //     if (inst.selected==selected && currTime-inst.selectedTime<2*1000) inst.edit(obj.node);
        //     inst.selected=selected;
        //     inst.selectedTime=currTime;
        // });



        // var url = $.get("http://192.168.0.5:5005/tree.php", function () {
        // }).done(function (data) {
        //     var newdata = $.parseJSON(data);
        //     console.log(newdata);
        //     $('#tree-container')
        //         .jstree({
        //             "core" : {
        //                 "data" : newdata,
        //                 "themes": {
        //                     "url": true,
        //                     "icons": true,
        //                     "dots": true
        //                 },
        //                 "check_callback": true
        //             },
        //             "plugins": [ "dnd" ]
        //         });
        //
        // });


    </script>
@endsection
