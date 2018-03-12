@extends('layouts.app')

@section('content')
    @role('Admin')
    <div class="mobile-menu-left-overlay"></div>

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-6 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">{{trans('auth.panel-title')}}</h3>
                        </header>
                        <div class="box-typical-body panel-body ">
                            <iframe class="iframe" src="/ifram8" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div><!--.col-->
                <div class="col-xl-6 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">{{trans('auth.panel-title')}}</h3>
                        </header>
                        <div class="box-typical-body panel-body card-block">
                            <iframe class="iframe" src="/ifram7" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div><!--.col-->
            </div>
            <div class="row">
                <div class="col-xl-4 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">{{trans('auth.panel-title')}}</h3>
                        </header>
                        <div class="box-typical-body panel-body card-block">
                            <iframe class="iframe" src="/ifram5" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-4 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">{{trans('auth.panel-title')}}</h3>
                        </header>
                        <div class="box-typical-body panel-body cart-block">
                            <iframe class="iframe" src="/ifram6" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-4 dahsboard-column">

                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">{{trans('auth.panel-title')}}</h3>
                        </header>

                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="/jstreeload" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 dahsboard-column">


                    <section class="box-typical">
                        <div id="toolbar">
                            <div class="bootstrap-table-header">{{trans('auth.table-header')}}</div>
                            <button id="add" class="btn btn-success remove" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                Add
                            </button>
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Add Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form data-toggle="validator" action="/evtitems" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="GID" class="form-control"
                                                                   placeholder="GID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODEID" class="form-control"
                                                                   placeholder="Node ID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODEIP" class="form-control"
                                                                   placeholder="Node IP"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODENAME" class="form-control"
                                                                   placeholder="Node Name"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTSTART" class="form-control"
                                                                   placeholder="Node EVTSTART YYYY/MM/DD"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTEND" class="form-control"
                                                                   placeholder="Node EVTEND YYYY/MM/DD"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTOPEN" class="form-control"
                                                                   placeholder="EVTOPEN"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODESTAT" class="form-control"
                                                                   placeholder="NODESTAT"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTDESCR" class="form-control"
                                                                   placeholder="EVTDESCR"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTCOMMENT" class="form-control"
                                                                   placeholder="EVTCOMMENT"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <input type="text" name="EVTID" class="form-control"
                                                                   placeholder="EVTID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTIGNORE" class="form-control"
                                                                   placeholder="EVTIGNORE"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTNOTIFY" class="form-control"
                                                                   placeholder="EVTNOTIFY"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CLSNOTIFY" class="form-control"
                                                                   placeholder="CLSNOTIFY"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTGROUP" class="form-control"
                                                                   placeholder="EVTGROUP"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="WCHK" class="form-control"
                                                                   placeholder="WCHK"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CURWEIGHT" class="form-control"
                                                                   placeholder="CURWEIGHT"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTITEM" class="form-control"
                                                                   placeholder="EVTITEM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CHKDATE" class="form-control"
                                                                   placeholder="CHKDATE"/>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button id="remove" class="btn btn-danger remove" disabled>
                                <i class="font-icon font-icon-close-2"></i> Delete
                            </button>

                            <button id="edit" class="btn btn-default remove" data-toggle="modal"
                                    data-target="#edit-item">
                                Edit
                            </button>


                            <div class="modal fade" id="edit-item" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="GID" class="form-control"
                                                                   placeholder="GID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODEID" class="form-control"
                                                                   placeholder="Node ID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODEIP" class="form-control"
                                                                   placeholder="Node IP"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODENAME" class="form-control"
                                                                   placeholder="Node Name"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTSTART" class="form-control"
                                                                   placeholder="Node EVTSTART YYYY/MM/DD"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTEND" class="form-control"
                                                                   placeholder="Node EVTEND YYYY/MM/DD"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTOPEN" class="form-control"
                                                                   placeholder="EVTOPEN"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="NODESTAT" class="form-control"
                                                                   placeholder="NODESTAT"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTDESCR" class="form-control"
                                                                   placeholder="EVTDESCR"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTCOMMENT" class="form-control"
                                                                   placeholder="EVTCOMMENT"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="EVTID" class="form-control"
                                                                   placeholder="EVTID"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTIGNORE" class="form-control"
                                                                   placeholder="EVTIGNORE"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTNOTIFY" class="form-control"
                                                                   placeholder="EVTNOTIFY"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CLSNOTIFY" class="form-control"
                                                                   placeholder="CLSNOTIFY"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTGROUP" class="form-control"
                                                                   placeholder="EVTGROUP"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="WCHK" class="form-control"
                                                                   placeholder="WCHK"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CURWEIGHT" class="form-control"
                                                                   placeholder="CURWEIGHT"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="EVTITEM" class="form-control"
                                                                   placeholder="EVTITEM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="CHKDATE" class="form-control"
                                                                   placeholder="CHKDATE"/>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit"
                                                        class="btn btn-primary crud-submit-edit edit-item">Edit changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{--Son layout--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gridster">
                                        <ul>

                                            @foreach($settings as $setting)
                                                <li data-row="{{$setting->ROW}}" data-col="{{$setting->COL}}"
                                                    data-id="{{$setting->ID}}"
                                                    data-sizex="{{$setting->SIZEX}}"
                                                    data-sizey="{{$setting->SIZEY}}"></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div><!--.col-->
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
   @endrole

@endsection
