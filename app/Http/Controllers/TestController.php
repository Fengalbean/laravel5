<?php
/**
 * Created by PhpStorm.
 * User: 3020
 * Date: 2016/10/20
 * Time: 15:57
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $query = DB::select('select * from fdb_test;');
        return $query;
    }

    public function select()
    {
        $query = DB::select('select * from fdb_test;');
        return $query;
    }
    public function add()
    {
//        $query = DB::insert('insert into fdb_test(name,age,sex) value("aa",18,1)');
//        $query1 = DB::table('test')->insert(['name'=>'bb','age'=>41,'sex'=>0]);
        $query1 = DB::table('test')->insertGetId(['name'=>'bb','age'=>44,'sex'=>0]);
        var_dump($query1) ;
    }
    public function del($id)
    {
        $query = DB::delete('delete from fdb_test where id = '.$id);
        return $query;
    }
    public function update($id,$age)
    {
        $query = DB::update('update fdb_test set age = '.$age.' where id = '.$id);
        return $query;
    }
}