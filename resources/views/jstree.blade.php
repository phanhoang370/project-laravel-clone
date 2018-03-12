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
                    {{--<div id="tree-container"></div>--}}

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

                                            <div class="card-block jstree-main">
                                                <div id="tree-container"></div>

                                            </div>
                                        </section>
                                    @elseif($key==1)
                                        <section class="card card-blue-fill border-all-content">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div id="table-tree">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-1">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.group-name')}}
                                                                    </th>
                                                                    <td>
                                                                        Head Officeádsad
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.ip-address')}}
                                                                    </th>
                                                                    <td>
                                                                        160.154.0.87
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-description')}}
                                                                    </th>
                                                                    <td>
                                                                        Cisco IOS Software, C3560 Software
                                                                        (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5,
                                                                        RELEASE
                                                                        SOFTWARE (fc1)
                                                                        Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-2">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.host-name')}}
                                                                    </th>
                                                                    <td>
                                                                        http://www.infra911.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-name')}}
                                                                    </th>
                                                                    <td>
                                                                        http://www.infra911.com
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="tabs-section">
                                                        <div class="tabs-section-nav">
                                                            <div class="tbl">
                                                                <ul class="nav" role="tablist">
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link" href="#tabs-2-tab-1"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="false">
                                                                <span class="nav-link-in">
                                                                    {{trans('auth.snmp-status')}}
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link active" href="#tabs-2-tab-2"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Temperature/Fan/Power/Session
                                                                    <span class="label label-pill label-danger">2</span>
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link" href="#tabs-2-tab-3"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    ICMP/CPU/Memory
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                </ul>
                                                            </div>
                                                        </div><!--.tabs-section-nav-->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane fade in"
                                                                 id="tabs-2-tab-1"
                                                                 aria-expanded="true">
                                                                Talbe JS
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade active show"
                                                                 id="tabs-2-tab-2" aria-expanded="false">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <table class="table-editInf" id="table-body-1">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.affiliated-group')}}
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>{{trans('auth.promise')}}</option>
                                                                                        <option>{{trans('auth.collection')}}</option>
                                                                                        <option>{{trans('auth.synchronous')}}</option>
                                                                                        <option>{{trans('auth.asynchronous')}}</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.ip-address')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="ip-address-mask-input"
                                                                                           placeholder="192.168.2.5">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.snmp-community')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.snmp-timeout')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="email"
                                                                                           class="form-control"
                                                                                           id="time-mask-input"
                                                                                           placeholder="12:00:25">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-type')}}
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>NAN</option>
                                                                                        <option>NULL</option>
                                                                                        <option>UNDEFINED</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-name')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.explanation')}}
                                                                                </th>
                                                                                <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                                                                            Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                            Compiled Fri 20-Jul-07 01:44 by nachen
                                                                        </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-history')}}
                                                                                </th>
                                                                                <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                                                                            Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                            Compiled Fri 20-Jul-07 01:44 by nachen
                                                                        </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP V3 Option
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-v2">
                                                                                        <label for="check-v2">V2</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-v5">
                                                                                        <label for="check-v5">V5</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-l7">
                                                                                        <label for="check-l7">L7</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <table class="table-editInf" id="tab2-Info">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Affiliated Group
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Data
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>Asynchronous</option>
                                                                                        <option>Collection</option>
                                                                                        <option>Synchronous</option>
                                                                                        <option>Promise</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="3600">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    STMTP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="2500">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    HKT Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Comunity
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-9">
                                                                                        <label for="check-bird-9">Visa</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-7">
                                                                                        <label for="check-bird-7">Master</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-8">
                                                                                        <label for="check-bird-8">Union</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div><!--.tab-pane-->
                                                            <div role="tabpanel" class="tab-pane fade active"
                                                                 id="tabs-2-tab-3"
                                                                 aria-expanded="false">
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <table class="table-showInf" id="tab2-Info">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Affiliated Group
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Data
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>Asynchronous</option>
                                                                                        <option>Collection</option>
                                                                                        <option>Synchronous</option>
                                                                                        <option>Promise</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="3600">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    STMTP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="2500">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    HKT Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Comunity
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-9">
                                                                                        <label for="check-bird-9">Visa</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-7">
                                                                                        <label for="check-bird-7">Master</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-8">
                                                                                        <label for="check-bird-8">Union</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div><!--.tab-pane-->
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card-block " style="margin: 100px 10px 0 10px;">
                                                    <table id="table-sm"
                                                           class="table table-bordered table-hover table-sm">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th width="120">Date Created</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Revene for last quarter
                                                                in state
                                                                America for year 2013
                                                            </td>
                                                            <td>6 minutes ago</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Copyright (c) 1986-2007
                                                                by Cisco
                                                                Systems, Inc.
                                                            </td>
                                                            <td>25 minutes ago</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </section>
                                    @else
                                        <section class="card card-blue-fill border-all-content">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div id="table-tree">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-1">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.group-name')}}
                                                                    </th>
                                                                    <td>
                                                                        Head Office
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.ip-address')}}
                                                                    </th>
                                                                    <td>
                                                                        160.154.0.87
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-description')}}
                                                                    </th>
                                                                    <td>
                                                                        Cisco IOS Software, C3560 Software
                                                                        (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5,
                                                                        RELEASE
                                                                        SOFTWARE (fc1)
                                                                        Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-2">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.host-name')}}
                                                                    </th>
                                                                    <td>
                                                                        http://www.infra911.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-name')}}
                                                                    </th>
                                                                    <td>
                                                                        http://www.infra911.com
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="tabs-section">
                                                        <div class="tabs-section-nav">
                                                            <div class="tbl">
                                                                <ul class="nav" role="tablist">
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link" href="#tabs-2-tab-1"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="false">
                                                                <span class="nav-link-in">
                                                                    {{trans('auth.snmp-status')}}
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link active" href="#tabs-2-tab-2"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Temperature/Fan/Power/Session
                                                                    <span class="label label-pill label-danger">2</span>
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                    <ol class="nav-item">
                                                                        <a class="nav-link" href="#tabs-2-tab-3"
                                                                           role="tab"
                                                                           data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    ICMP/CPU/Memory
                                                                </span>
                                                                        </a>
                                                                    </ol>
                                                                </ul>
                                                            </div>
                                                        </div><!--.tabs-section-nav-->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane fade in"
                                                                 id="tabs-2-tab-1"
                                                                 aria-expanded="true">
                                                                Talbe JS
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade active show"
                                                                 id="tabs-2-tab-2" aria-expanded="false">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <table class="table-editInf" id="table-body-1">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.affiliated-group')}}
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>{{trans('auth.promise')}}</option>
                                                                                        <option>{{trans('auth.collection')}}</option>
                                                                                        <option>{{trans('auth.synchronous')}}</option>
                                                                                        <option>{{trans('auth.asynchronous')}}</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.ip-address')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="ip-address-mask-input"
                                                                                           placeholder="192.168.2.5">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.snmp-community')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.snmp-timeout')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="email"
                                                                                           class="form-control"
                                                                                           id="time-mask-input"
                                                                                           placeholder="12:00:25">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-type')}}
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>NAN</option>
                                                                                        <option>NULL</option>
                                                                                        <option>UNDEFINED</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-name')}}
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.explanation')}}
                                                                                </th>
                                                                                <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                                                                            Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                            Compiled Fri 20-Jul-07 01:44 by nachen
                                                                        </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    {{trans('auth.system-history')}}
                                                                                </th>
                                                                                <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                                                                            Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                            Compiled Fri 20-Jul-07 01:44 by nachen
                                                                        </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP V3 Option
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-v2">
                                                                                        <label for="check-v2">V2</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-v5">
                                                                                        <label for="check-v5">V5</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-l7">
                                                                                        <label for="check-l7">L7</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <table class="table-editInf" id="tab2-Info">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Affiliated Group
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Data
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>Asynchronous</option>
                                                                                        <option>Collection</option>
                                                                                        <option>Synchronous</option>
                                                                                        <option>Promise</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="3600">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    STMTP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="2500">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    HKT Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Comunity
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-9">
                                                                                        <label for="check-bird-9">Visa</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-7">
                                                                                        <label for="check-bird-7">Master</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-8">
                                                                                        <label for="check-bird-8">Union</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div><!--.tab-pane-->
                                                            <div role="tabpanel" class="tab-pane fade active"
                                                                 id="tabs-2-tab-3"
                                                                 aria-expanded="false">
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <table class="table-showInf" id="tab2-Info">
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Affiliated Group
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    Data
                                                                                </th>
                                                                                <td>
                                                                                    <select class="form-control"
                                                                                            id="sel1">
                                                                                        <option>Asynchronous</option>
                                                                                        <option>Collection</option>
                                                                                        <option>Synchronous</option>
                                                                                        <option>Promise</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="3600">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    STMTP Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="2500">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    HKT Timeout (Sec)
                                                                                </th>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           placeholder="1400">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                                    SNMP Comunity
                                                                                </th>
                                                                                <td>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-9">
                                                                                        <label for="check-bird-9">Visa</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-7">
                                                                                        <label for="check-bird-7">Master</label>
                                                                                    </div>
                                                                                    <div class="checkbox-bird">
                                                                                        <input type="checkbox"
                                                                                               id="check-bird-8">
                                                                                        <label for="check-bird-8">Union</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div><!--.tab-pane-->
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card-block " style="margin: 100px 10px 0 10px;">
                                                    <table id="table-sm"
                                                           class="table table-bordered table-hover table-sm">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th width="120">Date Created</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Revene for last quarter
                                                                in state
                                                                America for year 2013
                                                            </td>
                                                            <td>6 minutes ago</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Copyright (c) 1986-2007
                                                                by Cisco
                                                                Systems, Inc.
                                                            </td>
                                                            <td>25 minutes ago</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
        //get data serve
        function dataGrid(gid, nodeid) {
            $.get('http://www.infra911.com/data.php?Act=data1_6&paramGID=' + gid + '&GidList=' + nodeid, function (data) {
                var result = $.parseJSON(data.replace(/'/g, '"'));
                var table = ` <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-1">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.group-name')}}
                    </th>
                    <td>
                        Head Officeádsad
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.ip-address')}}
                    </th>
                    <td>
                        160.154.0.87
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-description')}}
                    </th>
                    <td>
                        Cisco IOS Software, C3560 Software
                        (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5,
                        RELEASE
                        SOFTWARE (fc1)
                        Copyright (c) 1986-2007 by Cisco Systems, Inc.
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table-showInf" id="table-head-2">
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.host-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="card-block">
    <div class="tabs-section">
        <div class="tabs-section-nav">
            <div class="tbl">
                <ul class="nav" role="tablist">
                    <ol class="nav-item">
                        <a class="nav-link" href="#tabs-2-tab-1"
                           role="tab"
                           data-toggle="tab" aria-expanded="false">
                                <span class="nav-link-in">
                                    {{trans('auth.snmp-status')}}
                                </span>
                        </a>
                    </ol>
                    <ol class="nav-item">
                        <a class="nav-link active" href="#tabs-2-tab-2"
                           role="tab"
                           data-toggle="tab" aria-expanded="true">
                            <span class="nav-link-in">
                                Temperature/Fan/Power/Session
                                <span class="label label-pill label-danger">2</span>
                            </span>
                        </a>
                    </ol>
                    <ol class="nav-item">
                        <a class="nav-link" href="#tabs-2-tab-3"
                               role="tab"
                               data-toggle="tab" aria-expanded="true">
                            <span class="nav-link-in">
                                ICMP/CPU/Memory
                            </span>
                        </a>
                    </ol>
                </ul>
            </div>
        </div>
            <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in"
                    id="tabs-2-tab-1"
                    aria-expanded="true">
                    Talbe JS
                    </div>
                    <div role="tabpanel" class="tab-pane fade active show"
                    id="tabs-2-tab-2" aria-expanded="false">
                    <div class="row">
                    <div class="col-md-5">
                    <table class="table-editInf" id="table-body-1">
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.affiliated-group')}}
                    </th>
                    <td>
                    <select class="form-control"
                    id="sel1">
                    <option>{{trans('auth.promise')}}</option>
                    <option>{{trans('auth.collection')}}</option>
                    <option>{{trans('auth.synchronous')}}</option>
                    <option>{{trans('auth.asynchronous')}}</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.ip-address')}}
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    id="ip-address-mask-input"
                    placeholder="192.168.2.5">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.snmp-community')}}
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1400">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.snmp-timeout')}}
                    </th>
                    <td>
                    <input type="email"
                    class="form-control"
                    id="time-mask-input"
                    placeholder="12:00:25">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.system-type')}}
                    </th>
                    <td>
                    <select class="form-control"
                    id="sel1">
                    <option>NAN</option>
                    <option>NULL</option>
                    <option>UNDEFINED</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.system-name')}}
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1400">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.explanation')}}
                    </th>
                    <td>
                    <textarea class="form-control" rows="5">
                    Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                    Copyright (c) 1986-2007 by Cisco Systems, Inc.
                    Compiled Fri 20-Jul-07 01:44 by nachen
                    </textarea>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                        {{trans('auth.system-history')}}
                    </th>
                    <td>
                    <textarea class="form-control" rows="5">
                    Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                    Copyright (c) 1986-2007 by Cisco Systems, Inc.
                    Compiled Fri 20-Jul-07 01:44 by nachen
                    </textarea>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    SNMP V3 Option
                    </th>
                    <td>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-v2">
                    <label for="check-v2">V2</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-v5">
                    <label for="check-v5">V5</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-l7">
                    <label for="check-l7">L7</label>
                    </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                    <div class="col-md-7">
                    <table class="table-editInf" id="tab2-Info">
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.affiliated-group')}}
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                   {{trans('auth.data')}}
                    </th>
                    <td>
                    <select class="form-control"
                    id="sel1">
                    <option>{{trans('auth.promise')}}</option>
                    <option>{{trans('auth.collection')}}</option>
                    <option>{{trans('auth.synchronous')}}</option>
                    <option>{{trans('auth.asynchronous')}}</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.snmp-timeout')}} (Sec)
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="3600">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.snmp-timeout')}} (Sec)
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="2500">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.hkt-timeout')}}
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1400">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.snmp-community')}}
                    </th>
                    <td>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-9">
                    <label for="check-bird-9">Visa</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-7">
                    <label for="check-bird-7">Master</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-8">
                    <label for="check-bird-8">Union</label>
                    </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                    </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade active"
                    id="tabs-2-tab-3"
                    aria-expanded="false">
                    <div class="row">
                    <div class="col-md-7">
                    <table class="table-showInf" id="tab2-Info">
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    Affiliated Group
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    {{trans('auth.data')}}
                    </th>
                    <td>
                    <select class="form-control"
                    id="sel1">
                    <option>{{trans('auth.promise')}}</option>
                    <option>{{trans('auth.collection')}}</option>
                    <option>{{trans('auth.synchronous')}}</option>
                    <option>{{trans('auth.asynchronous')}}</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    SNMP Timeout (Sec)
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="3600">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    STMTP Timeout (Sec)
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="2500">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    HKT Timeout (Sec)
                    </th>
                    <td>
                    <input type="text"
                    class="form-control"
                    placeholder="1400">
                    </td>
                    </tr>
                    <tr>
                    <th>
                    <i class="fa fa-arrow-circle-right fa-1"></i>
                    SNMP Comunity
                    </th>
                    <td>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-9">
                    <label for="check-bird-9">Visa</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-7">
                    <label for="check-bird-7">Master</label>
                    </div>
                    <div class="checkbox-bird">
                    <input type="checkbox"
                    id="check-bird-8">
                    <label for="check-bird-8">Union</label>
                    </div>
                    </td>
                    </tr>

                    </table>
                    </div>
                    </div>
                    </div>

                    </div>
                    </div>
                    <div class="card-block " style="margin: 100px 10px 0 10px;">
                    <table id="table-sm"
                    class="table table-bordered table-hover table-sm">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="120">Date Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Revene for last quarter
                    in state
                    America for year 2013
                    </td>
                    <td>6 minutes ago</td>
                    </tr>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Copyright (c) 1986-2007
                    by Cisco
                    Systems, Inc.
                    </td>
                    <td>25 minutes ago</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    `;

                $('#table-tree').empty().append(table).hide().fadeIn('slow');
            });
        }

        function viewGrid(data) {
            $.get('http://www.infra911.com/data.php?Act=data1_6&paramGID=' + 'gid' + '&GidList=' + 'nodeid', function (data) {
                var viewGrid = `
                    <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-1">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.group-name')}}
                    </th>
                    <td>
                        Head Officeádsad
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.ip-address')}}
                    </th>
                    <td>
                        160.154.0.87
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-description')}}
                    </th>
                    <td>
                        Cisco IOS Software, C3560 Software
                        (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5,
                        RELEASE
                        SOFTWARE (fc1)
                        Copyright (c) 1986-2007 by Cisco Systems, Inc.
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table-showInf" id="table-head-2">
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.host-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="card-block">
    <div class="tabs-section">
        <div class="tabs-section-nav">
            <div class="tbl">
                <ul class="nav" role="tablist">
                    <ol class="nav-item">
                        <a class="nav-link active" href="#tabs-2-tab-1"
                           role="tab"
                           data-toggle="tab" aria-expanded="false">
                                <span class="nav-link-in">
                                    Grid
                    </span>
            </a>
        </ol>
        <ol class="nav-item">
            <a class="nav-link" href="#tabs-2-tab-2"
               role="tab"
               data-toggle="tab" aria-expanded="true">
                <span class="nav-link-in">
                    Chart
                    <span class="label label-pill label-danger">2</span>
                </span>
            </a>
        </ol>
        <ol class="nav-item">
            <a class="nav-link" href="#tabs-2-tab-3"
                   role="tab"
                   data-toggle="tab" aria-expanded="true">
                <span class="nav-link-in">
                    Gauge
                </span>
            </a>
        </ol>
    </ul>
</div>
</div>
<div class="tab-content">
        <div role="tabpanel" class="tab-pane fade active show"
        id="tabs-2-tab-1"
        aria-expanded="true">
        <table id="table-sm"
                    class="table table-bordered table-hover table-sm">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="120">Date Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Revene for last quarter
                    in state
                    America for year 2013
                    </td>
                    <td>6 minutes ago</td>
                    </tr>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Copyright (c) 1986-2007
                    by Cisco
                    Systems, Inc.
                    </td>
                    <td>25 minutes ago</td>
                    </tr>
                    </tbody>
                    </table>
        </div>
        <div role="tabpanel" class="tab-pane fade"
        id="tabs-2-tab-2" aria-expanded="false">
        <div class="card-block">
             <div id="chart6-packet" style="height: 400px;" class="chartdiv"></div>
        </div>
        </div>

                    `;
                var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash6_1&prefix=p6", function () {
                }).done(function (data) {
                    var newdata = $.parseJSON(data.replace(/'/g, '"'));

                    var chart = AmCharts.makeChart("chart6-packet", {
                        "theme": "light",
                        "type": "serial",
                        "startDuration": 2,
                        "dataProvider": newdata,
                        "valueAxes": [{
                            "position": "left",
                            "title": ""
                        }],
                        "graphs": [{
                            "balloonText": "[[category]]: <b>[[value]]</b>",
                            "fillColorsField": "lineColor",
                            "fillAlphas": 1,
                            "lineAlpha": 0.1,
                            "type": "column",
                            "valueField": "value"
                        }],
                        "depth3D": 20,
                        "angle": 30,
                        "chartCursor": {
                            "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false
                        },
                        "categoryField": "label",
                        "categoryAxis": {
                            "gridPosition": "start",
                            "labelRotation": 90
                        },
                        "export": {
                            "enabled": false
                        }

                    });
                });
                $('#table-tree').empty().append(viewGrid).hide().fadeIn('slow');
            });
        }

        function viewChart(data) {
            $.get('http://www.infra911.com/data.php?Act=data1_6&paramGID=' + 'gid' + '&GidList=' + 'nodeid', function (data) {
                var viewChart = `
                    <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="table-head-1">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.group-name')}}
                    </th>
                    <td>
                        Head Officeádsad
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.ip-address')}}
                    </th>
                    <td>
                        160.154.0.87
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-description')}}
                    </th>
                    <td>
                        Cisco IOS Software, C3560 Software
                        (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5,
                        RELEASE
                        SOFTWARE (fc1)
                        Copyright (c) 1986-2007 by Cisco Systems, Inc.
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table-showInf" id="table-head-2">
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.host-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa fa-arrow-circle-right fa-1"></i> {{trans('auth.system-name')}}
                    </th>
                    <td>
                        http://www.infra911.com
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="card-block">
    <div class="tabs-section">
        <div class="tabs-section-nav">
            <div class="tbl">
                <ul class="nav" role="tablist">
                    <ol class="nav-item">
                        <a class="nav-link " href="#tabs-2-tab-1"
                           role="tab"
                           data-toggle="tab" aria-expanded="false">
                                <span class="nav-link-in">
                                    Grid
                    </span>
            </a>
        </ol>
        <ol class="nav-item">
            <a class="nav-link active" href="#tabs-2-tab-2"
               role="tab"
               data-toggle="tab" aria-expanded="true">
                <span class="nav-link-in">
                    Chart
                    <span class="label label-pill label-danger">2</span>
                </span>
            </a>
        </ol>
        <ol class="nav-item">
            <a class="nav-link" href="#tabs-2-tab-3"
                   role="tab"
                   data-toggle="tab" aria-expanded="true">
                <span class="nav-link-in">
                    Gauge
                </span>
            </a>
        </ol>
    </ul>
</div>
</div>
<div class="tab-content">
        <div role="tabpanel" class="tab-pane fade"
        id="tabs-2-tab-1"
        aria-expanded="true">
        <table id="table-sm"
                    class="table table-bordered table-hover table-sm">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th width="120">Date Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Revene for last quarter
                    in state
                    America for year 2013
                    </td>
                    <td>6 minutes ago</td>
                    </tr>
                    <tr>
                    <td>Last quarter revene</td>
                    <td class="color-blue-grey-lighter">Copyright (c) 1986-2007
                    by Cisco
                    Systems, Inc.
                    </td>
                    <td>25 minutes ago</td>
                    </tr>
                    </tbody>
                    </table>
        </div>
        <div role="tabpanel" class="tab-pane fade active show"
        id="tabs-2-tab-2" aria-expanded="false">
        <div class="card-block">
             <div id="chart6-packet" style="height: 400px;" class="chartdiv"></div>
        </div>
        </div>
                `;
                $('#table-tree').empty().append(viewChart).hide().fadeIn('slow');

                var url = $.get("http://www.infra911.com/pkt_data.php?Act=pkt_dash6_1&prefix=p6", function () {
                }).done(function (data) {
                    var newdata = $.parseJSON(data.replace(/'/g, '"'));

                    var chart = AmCharts.makeChart("chart6-packet", {
                        "theme": "light",
                        "type": "serial",
                        "startDuration": 2,
                        "dataProvider": newdata,
                        "valueAxes": [{
                            "position": "left",
                            "title": ""
                        }],
                        "graphs": [{
                            "balloonText": "[[category]]: <b>[[value]]</b>",
                            "fillColorsField": "lineColor",
                            "fillAlphas": 1,
                            "lineAlpha": 0.1,
                            "type": "column",
                            "valueField": "value"
                        }],
                        "depth3D": 20,
                        "angle": 30,
                        "chartCursor": {
                            "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false
                        },
                        "categoryField": "label",
                        "categoryAxis": {
                            "gridPosition": "start",
                            "labelRotation": 90
                        },
                        "export": {
                            "enabled": false
                        }

                    });
                });

            });
        }
    </script>
@endsection