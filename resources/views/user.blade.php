@extends('layouts.app')

@section('content')

    <div class="mobile-menu-left-overlay"></div>

    <div class="page-content">
        <div class="container-fluid">
            {{--Son layout--}}
            <div class="row">

                <section class="card card-blue-fill" style="width: 100%">
                    <header class="card-header">
                        {{trans('auth.panel-title')}}
                    </header>
                    <div class="card-block">
                        <section class="box-typical" id="datatable-session">
                            <div id="toolbar">
                                <div class="bootstrap-table-header">{{trans('auth.table-header')}}</div>
                                <button id="add" class="btn btn-success remove" data-toggle="modal"
                                        data-target="#add-item">
                                    {{trans('auth.add-to')}}
                                </button>

                                <button id="remove" class="btn btn-danger remove" disabled>
                                    <i class="font-icon font-icon-close-2"></i> {{trans('auth.delete')}}
                                </button>

                            </div>
                            <div class="table-responsive">
                                <table id="table-user"
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
                                       data-show-footer="false">
                                </table>
                            </div>
                        </section><!--.box-typical-dashboard-->
                    </div>
                </section>
            </div>
        </div>
    </div><!--.container-fluid-->
@endsection
