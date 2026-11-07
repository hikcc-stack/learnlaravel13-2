<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function result(Request $request){
        $title = $request -> input('title');
        $slug = $request -> input('slug');

        return view('post.form', [
            'title' => $title, 'slug' => $slug
        ]);
    }
    public function form(){
        return view('post.form');
    }

    //192. Объект Request
    // теперь укажем объект запроса параметром действия, используя контроль типов
    // laravel обнаружит, что мы хотим "внедрить" объект запроса в действие и автоматически передаст его в нужный параметр
    // в результате в действии у нас будет доступна переменная $request.
    public function indexes(Request $request){

    }




    // 191. Доп. возможности связей моделей
    // проверка наличия связей
    // Метод has - оставляет только те записи, у которых есть связанные/метод doesntHave - наоборот
    // $users = User::has('posts')->get();
    public function index(){

        $client = Order::find(5)->client;
        dump($client);

        $orders5 = Order::where('client_id','>', 5)->get();
        dump($orders5);

        $orders = Order::with(['orderlist', 'client'])->get();
        foreach($orders as $order){
            dump($order);
            dump($order->orderlist);
            dump($order->client);
        }

        $orders = Order::all();
        dump($orders);
    }


    // 181. Получение данных связь один ко многим
    public function show(){

        $orders = Order::all();
        foreach ($orders as $order) {
            dump($order->id);

            if($order->client) {
                dump($order->client->id);
                dump($order->client->name);
            }
        }

        $order = Order::find(1);
        // получили клиента по заказу
        dump($order->client);
    }
}
