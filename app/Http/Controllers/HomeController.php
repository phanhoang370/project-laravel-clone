<?php

namespace App\Http\Controllers;

use App\Jstree;
use Illuminate\Http\Request;

use App\Evtlist;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        //get all Evtlist
        $evtlists = Evtlist::all();

        //get all setting

        $settings = DB::table('users')
            ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
            ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
            ->where('user_id', Auth::id())
            ->select('SETTINGS.*', 'ITEMS.NAME')
            ->get();

        //check exist setting
        if ($settings->isEmpty()) {
            //get all items
            $itemSettings = DB::table('ITEMS')->get();

            //insert default to database
            foreach ($itemSettings as $itemSetting) {
                DB::table('SETTINGS')->insert([
                    ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->id, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1]
                ]);
            }
            $settings = DB::table('users')
                ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
                ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
                ->where('user_id', Auth::id())
                ->select('SETTINGS.*', 'ITEMS.NAME')
                ->get();
        }

        app()->setLocale($lang);


        return view('home', compact('settings', 'evtlists'));

    }

    public function newDashboard($lang)
    {
        //get all Evtlist
        $evtlists = Evtlist::all();

        //get all setting

        $settings = DB::table('users')
            ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
            ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
            ->where('user_id', Auth::id())
            ->where('SETTINGS.PAGE', 'failure')
            ->select('SETTINGS.*', 'ITEMS.NAME')
            ->get();

        //check exist setting
        if ($settings->isEmpty()) {
            //get all items
            $itemSettings = DB::table('ITEMS')->take(8)->get();

            //insert default to database
            foreach ($itemSettings as $key => $itemSetting) {
                switch ($key) {
                    case 0:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 1:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 5, 'COL' => 1, 'SIZEX' => 2, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 2:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 3, 'COL' => 1, 'SIZEX' => 2, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 3:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 2, 'SIZEX' => 1, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 4:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 3, 'SIZEX' => 1, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 5:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 5, 'SIZEX' => 6, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 6:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 4, 'SIZEX' => 1, 'SIZEY' => 2, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 7:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 3, 'COL' => 3, 'SIZEX' => 4, 'SIZEY' => 4, 'PAGE' => 'failure']
                        ]);
                        break;
                    case 8:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 5, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE' => 'failure']
                        ]);
                        break;
                    default:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 3, 'COL' => 3, 'SIZEX' => 4, 'SIZEY' => 4, 'PAGE' => 'failure']
                        ]);
                }

            }
            $settings = DB::table('users')
                ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
                ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
                ->where('user_id', Auth::id())
                ->where('SETTINGS.PAGE', 'failure')
                ->select('SETTINGS.*', 'ITEMS.NAME')
                ->get();
        }
        app()->setLocale($lang);
        return view('new', compact('settings', 'evtlists'));

    }

    public function save(Request $request)
    {
        $settings = $request->input('data');
        //get all setting
        foreach ($settings as $key => $setting) {
            DB::table('SETTINGS')
                ->where('id', $setting['id'])
                ->update([
                    'ROW' => $setting['row'],
                    'COL' => $setting['col'],
                    'SIZEX' => $setting['size_x'],
                    'SIZEY' => $setting['size_y']
                ]);
        }

        return response()->json("success");
    }

    public function Evtlist()
    {
        $evtlists = DB::table('evtlists')->get()->toJson();
        $evtlist = json_decode($evtlists);
        return response()->json($evtlist);
    }

    public function showjstree()
    {
        $treeviews = DB::table('treeviews')
            ->select('treeviews.id as id', 'treeviews.NAME as name', 'treeviews.TEXT as text', 'treeviews.PARENT_ID as parent_id')
            ->get();

        $childs = array();

        foreach ($treeviews as $treeview)
            $childs[$treeview->parent_id][] = $treeview;
        $childs[$treeview->name][] = $treeview;
        unset($treeview);
        foreach ($treeviews as $treeview)
            if (isset($childs[$treeview->id]))
                $treeview->children = $childs[$treeview->id];

        return $childs[0];


    }

    public function loadjstree()
    {
        $treeviews = DB::table('treeviews')->get();
        //$this->showjstree();
        $tree = $this->showjstree();
//        $data = [
//            "text" => "i-SAM",
//            "attr" => [
//                "id" => "g_0",
//                "rel" => "Root",
//                "href" => "",
//                "type" => 0,
//                "icon" => "fa fa-lg fa-server status-",
//                "gid" => "0",
//                "nodeid" => ""
//
//            ],
//            "children"=>[
//                "text" => "Vietnam",
//                "attr" => [
//                    "id" => "g_1",
//                    "rel" => "Root",
//                    "href" => "",
//                    "type" => 0,
//                    "icon" => "fa fa-lg fa-server status-",
//                    "gid" => "0",
//                    "nodeid" => "g_0"
//
//                ]
//            ]
//        ];


        //dd($tree);
        return response()->json($tree);
    }

    public function controljstree()
    {
        return view('jstree/treeview');
    }


    public function Remove(Request $request)
    {
        $evtlists = $request->input('data');
        $result = array_unique($evtlists);
        foreach ($result as $evtlist) {
            DB::table('evtlists')
                ->where('NODEID', $evtlist)
                ->delete();
        }

        return response()->json("Delete Complete");
    }

    public function chart1()
    {
        return view('iframeChart/iframeChart1');
    }

    public function chart2()
    {
        return view('iframeChart/iframeChart2');
    }

    public function chart4()
    {
        return view('iframeChart/iframeChart4');
    }

    public function chart5()
    {
        return view('iframeChart/iframeChart5');
    }

    public function chart6()
    {
        return view('iframeChart/iframeChart6');
    }

    public function chart7()
    {
        return view('iframeChart/iframeChart7');
    }

    public function chart8()
    {
        return view('iframeChart/iframeChart8');
    }
}