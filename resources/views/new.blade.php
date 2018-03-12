@extends('layouts.app')

@section('content')
    @role('Admin')
    <div class="mobile-menu-left-overlay"></div>

    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div class="page-content">
        <div class="container-fluid">
            {{--Son layout--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="gridster">
                        <ul>
                            @foreach($settings as $key=>$setting)
                                <li data-row="{{$setting->ROW}}" data-col="{{$setting->COL}}"
                                    data-id="{{$setting->ID}}"
                                    data-sizex="{{$setting->SIZEX}}" data-sizey="{{$setting->SIZEY}}">
                                    @if($key==0)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart1" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==1)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart2" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==2)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart3" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==3)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart4" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==4)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart5" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==5)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart6" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==6)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart7" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==7)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <section class="box-typical" id="datatable-session">
                                                    <div id="toolbar">
                                                        <div class="bootstrap-table-header">{{trans('auth.table-header')}}</div>
                                                        <button id="add" class="btn btn-success remove" data-toggle="modal" data-target="#add-item">
                                                            Add
                                                        </button>
                                                        <div class="modal fade" id="add-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Item</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form data-toggle="validator" id="addForm">
                                                                        {{ csrf_field() }}
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="GID" class="form-control" placeholder="GID"  />
                                                                                        <p class="text-danger fix-error" id="GID-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEID" class="form-control" placeholder="Node ID"  />
                                                                                        <p class="text-danger fix-error" id="NODEID-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEIP" class="form-control" placeholder="Node IP"  />
                                                                                        <p class="text-danger fix-error" id="NODEIP-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODENAME" class="form-control" placeholder="Node Name"  />
                                                                                        <p class="text-danger fix-error" id="NODENAME-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTSTART" class="form-control" placeholder="Node EVTSTART YYYY/MM/DD"  />
                                                                                        <p class="text-danger fix-error" id="EVTSTART-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTEND" class="form-control" placeholder="Node EVTEND YYYY/MM/DD"  />
                                                                                        <p class="text-danger fix-error" id="EVTEND-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTOPEN" class="form-control" placeholder="EVTOPEN"  />
                                                                                        <p class="text-danger fix-error" id="EVTOPEN-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODESTAT" class="form-control" placeholder="NODESTAT"  />
                                                                                        <p class="text-danger fix-error" id="NODESTAT-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTDESCR" class="form-control" placeholder="EVTDESCR"  />
                                                                                        <p class="text-danger fix-error" id="EVTDESCR-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTCOMMENT" class="form-control" placeholder="EVTCOMMENT"  />
                                                                                        <p class="text-danger fix-error" id="EVTCOMMENT-error"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTID" class="form-control" placeholder="EVTID"  />
                                                                                        <p class="text-danger fix-error" id="EVTID-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTIGNORE" class="form-control" placeholder="EVTIGNORE"  />
                                                                                        <p class="text-danger fix-error" id="EVTIGNORE-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTNOTIFY" class="form-control" placeholder="EVTNOTIFY"  />
                                                                                        <p class="text-danger fix-error" id="EVTNOTIFY-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CLSNOTIFY" class="form-control" placeholder="CLSNOTIFY"  />
                                                                                        <p class="text-danger fix-error" id="CLSNOTIFY-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTGROUP" class="form-control" placeholder="EVTGROUP"  />
                                                                                        <p class="text-danger fix-error" id="EVTGROUP-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="WCHK" class="form-control" placeholder="WCHK"  />
                                                                                        <p class="text-danger fix-error" id="WCHK-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CURWEIGHT" class="form-control" placeholder="CURWEIGHT"  />
                                                                                        <p class="text-danger fix-error" id="CURWEIGHT-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTITEM" class="form-control" placeholder="EVTITEM"  />
                                                                                        <p class="text-danger fix-error" id="EVTITEM-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CHKDATE" class="form-control" placeholder="CHKDATE"  />
                                                                                        <p class="text-danger fix-error" id="CHKDATE-error"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" id="submitForm" class="btn btn-primary crud-submit-add">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button id="remove" class="btn btn-danger remove" disabled>
                                                            <i class="font-icon font-icon-close-2"></i> Delete
                                                        </button>

                                                        <button id="edit" class="btn btn-default remove">
                                                            Edit
                                                        </button>

                                                        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                                                                        <input type="text" name="GID" class="form-control" placeholder="GID"  />
                                                                                        <p class="text-danger fix-error" id="GIDe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEID" class="form-control" placeholder="Node ID" />
                                                                                        <p class="text-danger fix-error" id="NODEIDe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEIP" class="form-control" placeholder="Node IP"  />
                                                                                        <p class="text-danger fix-error" id="NODEIPe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODENAME" class="form-control" placeholder="Node Name"  />
                                                                                        <p class="text-danger fix-error" id="NODENAMEe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTSTART" class="form-control" placeholder="Node EVTSTART YYYY/MM/DD"  />
                                                                                        <p class="text-danger fix-error" id="EVTSTARTe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTEND" class="form-control" placeholder="Node EVTEND YYYY/MM/DD"  />
                                                                                        <p class="text-danger fix-error" id="EVTENDe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTOPEN" class="form-control" placeholder="EVTOPEN"  />
                                                                                        <p class="text-danger fix-error" id="EVTOPENe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODESTAT" class="form-control" placeholder="NODESTAT"  />
                                                                                        <p class="text-danger fix-error" id="NODESTATe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTDESCR" class="form-control" placeholder="EVTDESCR"  />
                                                                                        <p class="text-danger fix-error" id="EVTDESCRe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTCOMMENT" class="form-control" placeholder="EVTCOMMENT"  />
                                                                                        <p class="text-danger fix-error" id="EVTCOMMENTe-error"></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTID" class="form-control" placeholder="EVTID"  />
                                                                                        <p class="text-danger fix-error" id="EVTIDe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTIGNORE" class="form-control" placeholder="EVTIGNORE"  />
                                                                                        <p class="text-danger fix-error" id="EVTIGNOREe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTNOTIFY" class="form-control" placeholder="EVTNOTIFY"  />
                                                                                        <p class="text-danger fix-error" id="EVTNOTIFYe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CLSNOTIFY" class="form-control" placeholder="CLSNOTIFY"  />
                                                                                        <p class="text-danger fix-error" id="CLSNOTIFYe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTGROUP" class="form-control" placeholder="EVTGROUP"  />
                                                                                        <p class="text-danger fix-error" id="EVTGROUPe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="WCHK" class="form-control" placeholder="WCHK"  />
                                                                                        <p class="text-danger fix-error" id="WCHKe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CURWEIGHT" class="form-control" placeholder="CURWEIGHT"  />
                                                                                        <p class="text-danger fix-error" id="CURWEIGHTe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTITEM" class="form-control" placeholder="EVTITEM"  />
                                                                                        <p class="text-danger fix-error" id="EVTITEMe-error"></p>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CHKDATE" class="form-control" placeholder="CHKDATE"  />
                                                                                        <p class="text-danger fix-error" id="CHKDATEe-error"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary crud-submit-edit">Edit changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table id="table"
                                                               class="table table-striped"
                                                               data-toolbar="#toolbar"
                                                               data-search="true"
                                                               data-show-refresh="true"
                                                               data-show-toggle="true"
                                                               data-show-columns="true"
                                                               data-show-export="true"
                                                               data-detail-view="true"
                                                               data-detail-formatter="detailFormatter"
                                                               data-minimum-count-columns="2"
                                                               data-show-pagination-switch="true"
                                                               data-pagination="true"
                                                               data-id-field="id"
                                                               data-page-list="[10, 25, 50, 100, ALL]"
                                                               data-show-footer="false"
                                                               data-response-handler="responseHandler">
                                                        </table>
                                                    </div>
                                                </section><!--.box-typical-dashboard-->
                                            </div>
                                        </section>
                                    @else
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart5" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @endif
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div><!--.col-->
            </div>
        </div>
    </div><!--.container-fluid-->
@endrole
@role('User')
    <p style="text-align: center; margin-top: 500px;font-size: 60px">Welcome User</p>
@endrole
@endsection
@section('scripts')
    <script>
        $('#tree-container').jstree({
            'plugins': ["wholerow", "checkbox"],
            'core' : {
                'data' : {
                    "url" : "/jstree",
                    "plugins" : [ "wholerow", "checkbox" ],
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            }
        })
    </script>
@endsection
