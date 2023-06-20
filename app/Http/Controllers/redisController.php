<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Predis\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class redisController extends Controller
{
    public function redis_mgmt()
    {
        // Create a new Redis client instance
        $redis = new Client();

        // Perform Redis operations
        $redis->set('key', 'value');

       // $user=User::all();
       $user=DB::table('grafana_tables')->get();

       dd($user);

        $redis->set('user', json_encode($user,true));

        echo $value = $redis->get('user');
        echo "aa".$redis->incrby('counter', 5);


        $redis->lpush('mylist', 'item1','item55');

        // Add multiple items to the end of a list
        $redis->rpush('mylist', 'item2', 'item3');

        // Get all elements of a list
        $listItems = $redis->lrange('mylist', 0, 3);

        print_r($listItems);


        $redis->hmset('myhash', ['field1' => 'value1', 'field2' => 'value2']);

        // Get the value of a specific field in a hash
        $value = $redis->hget('myhash', 'field1');

        // Get all field-value pairs in a hash
        $allFields = $redis->hgetall('myhash');

        dd($allFields);

    }
}
