<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Evtlist
 *
 * @property int $GID
 * @property int $NODEID
 * @property string $NODEIP
 * @property string $NODENAME
 * @property string $EVTSTART
 * @property string $EVTEND
 * @property int $EVTOPEN
 * @property int $EVTGROUP
 * @property string $EVTITEM
 * @property int $NODESTAT
 * @property string $EVTDESCR
 * @property string $EVTCOMMENT
 * @property int $EVTID
 * @property int $EVTIGNORE
 * @property int $EvtNotify
 * @property int|null $CLSNotify
 * @property int|null $wChk
 * @property int $CurWeight
 * @property string $ChkDate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereCLSNotify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereChkDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereCurWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTCOMMENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTDESCR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTEND($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTGROUP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTIGNORE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTITEM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTOPEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEVTSTART($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereEvtNotify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereGID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereNODEID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereNODEIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereNODENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereNODESTAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Evtlist whereWChk($value)
 * @mixin \Eloquent
 */
class Jstree extends Model
{
    protected $table = "treeviews";
}
