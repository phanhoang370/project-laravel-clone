<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jstree;
use App\Evtlist;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function user($lang)
    {
        app()->setLocale($lang);
        return view('user');
    }

    public function alluser()
    {
        $data = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.name as role')->get()->toArray();
        return response()->json($data);
    }

    public function saveRole(Request $request)
    {
        $userRole = Role::whereName($request->input('role'))->first();
        $user = User::find($request->input('id'));
        DB::table('role_user')
            ->where('user_id', '=', $user->id)
            ->delete();
        DB::table('role_user')
            ->insert([
                'user_id'=> $user->id,
                'role_id'=>$userRole->id
                ]);

        return response()->json($user);
    }

    public function packet($lang){

        //Get Table From http://www.infra911.com/pkt_data.php?Act=pkt_dash7_1&prefix=p1

        $html = file_get_html("http://www.infra911.com/pkt_data.php?Act=pkt_dash7_1&prefix=p1");

        $percents = $html->find('div.gauge_square');

        $ids = $html->find('td.ip_td');
        $results = [];
        foreach ($ids as $key=>$id){
            $results[] = $id;
            $results[] = $percents[$key];
        }

        //dd($results);
        //$results = $percents + $ips;

        //get all Evtlist
        $evtlists = Evtlist::all();

        //get all setting
        $settings = DB::table('users')
            ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
            ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
            ->where('user_id',Auth::id())
            ->where('SETTINGS.PAGE','packet')
            ->select('SETTINGS.*', 'ITEMS.NAME')
            ->get();

        //check exist setting
        if ($settings->isEmpty()){
            //get all items
            $itemSettings = DB::table('ITEMS')->skip(8)->take(9)->get();

            //insert default to database
            foreach ($itemSettings as $key=>$itemSetting){
                switch ($key) {
                    case 0:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 1:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 2:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 3:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 4:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 5:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 6:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 7:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    case 8:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                        break;
                    default:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 1, 'PAGE'=>'packet']
                        ]);
                }

            }
            $settings = DB::table('users')
                ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
                ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
                ->where('user_id',Auth::id())
                ->where('SETTINGS.PAGE','packet')
                ->select('SETTINGS.*', 'ITEMS.NAME')
                ->get();
        }
        app()->setLocale($lang);
        return view('packet', compact('settings','evtlists', 'results'));

    }


    public function test()
    {
        return view('test');
    }
    public function jsTree($lang){

        //get all setting

        $settings = DB::table('users')
            ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
            ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
            ->where('user_id',Auth::id())
            ->where('SETTINGS.PAGE','jstree')
            ->select('SETTINGS.*', 'ITEMS.NAME')
            ->get();
        //check exist setting
        if ($settings->isEmpty()){
            //get all items
            $itemSettings = DB::table('ITEMS')->skip(17)->take(2)->get();

            //insert default to database
            foreach ($itemSettings as $key=>$itemSetting){
                switch ($key) {
                    case 0:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 1, 'SIZEX' => 1, 'SIZEY' => 6, 'PAGE'=>'jstree']
                        ]);
                        break;
                    case 1:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 2, 'SIZEX' => 5, 'SIZEY' => 6, 'PAGE'=>'jstree']
                        ]);
                        break;
                    default:
                        DB::table('SETTINGS')->insert([
                            ['USER_ID' => Auth::id(), 'ITEM_ID' => $itemSetting->ID, 'ROW' => 1, 'COL' => 2, 'SIZEX' => 5, 'SIZEY' => 6, 'PAGE'=>'jstree']
                        ]);
                }

            }
            $settings = DB::table('users')
                ->join('SETTINGS', 'users.id', '=', 'SETTINGS.USER_ID')
                ->join('ITEMS', 'SETTINGS.ITEM_ID', '=', 'ITEMS.ID')
                ->where('user_id',Auth::id())
                ->where('SETTINGS.PAGE','jstree')
                ->select('SETTINGS.*', 'ITEMS.NAME')
                ->get();
        }
        app()->setLocale($lang);
        return view('jstree', compact('settings'));

    }
}
