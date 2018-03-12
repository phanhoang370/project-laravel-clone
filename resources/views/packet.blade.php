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
                                                <div id="chart1-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==1)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart2-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==2)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart3-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==3)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart4-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==4)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart5-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==5)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart6-packet" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==6)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <table id="table-sm" class="table table-bordered table-hover table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">IP</th>
                                                        <th class="text-center">Percent</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach(array_chunk($results, 2) as $key => $result)
                                                        <tr>
                                                            <td>{{$key + 1}}</td>
                                                            @foreach($result as $k =>$item)
                                                                @if($k == 1)
                                                                    <td width="150">
                                                                        <div class="progress-with-amount">
                                                                            <div class="progress progress-xs">
                                                                                <div class="progress-bar progress-success" role="progressbar" style="width: {{$item->innertext}};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <div class="progress-with-amount-number">{!! $item->innertext !!}</div>
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                <td class="change-link">{!! $item->innertext  !!}</td>
                                                                @endif
                                                            @endforeach
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    @elseif($key==7)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <table id="table-sm" class="table table-bordered table-hover table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">IP</th>
                                                        <th class="text-center">Percent</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach(array_chunk($results, 2) as $key => $result)
                                                        <tr>
                                                            <td>{{$key + 1}}</td>
                                                            @foreach($result as $k =>$item)
                                                                @if($k == 1)
                                                                    <td width="150">
                                                                        <div class="progress-with-amount">
                                                                            <div class="progress progress-xs">
                                                                                <div class="progress-bar progress-success" role="progressbar" style="width: {{$item->innertext}};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <div class="progress-with-amount-number">{!! $item->innertext !!}</div>
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td class="change-link">{!! $item->innertext  !!}</td>
                                                                @endif
                                                            @endforeach
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    @elseif($key==8)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <table id="table-sm" class="table table-bordered table-hover table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">IP</th>
                                                        <th class="text-center">Percent</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach(array_chunk($results, 2) as $key => $result)
                                                        <tr>
                                                            <td>{{$key + 1}}</td>
                                                            @foreach($result as $k =>$item)
                                                                @if($k == 1)
                                                                    <td width="150">
                                                                        <div class="progress-with-amount">
                                                                            <div class="progress progress-xs">
                                                                                <div class="progress-bar progress-success" role="progressbar" style="width: {{$item->innertext}};" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <div class="progress-with-amount-number">{!! $item->innertext !!}</div>
                                                                        </div>
                                                                    </td>
                                                                @else
                                                                    <td class="change-link">{!! $item->innertext  !!}</td>
                                                                @endif
                                                            @endforeach
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    @else
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart10" class="chartdiv"></div>
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
    {{--<script>--}}
        {{--$('#tree-container').jstree({--}}
            {{--'plugins': ["wholerow", "checkbox"],--}}
            {{--'core' : {--}}
                {{--'data' : {--}}
                    {{--"url" : "http://192.168.0.5:5005/tree.php",--}}
                    {{--"plugins" : [ "wholerow", "checkbox" ],--}}
                    {{--"dataType" : "json" // needed only if you do not supply JSON headers--}}
                {{--}--}}
            {{--}--}}
        {{--})--}}
    {{--</script>--}}
@endsection
