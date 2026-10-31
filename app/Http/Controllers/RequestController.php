<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // импортируем фасад баз данных

class RequestController extends Controller
{
    public function show(){
        // 141. Соединение таблиц Laravel
        $posts = DB::table('posts')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->get();
        dump($posts);
        //  140. Удаление данных через QB Laravel
//        DB::table('posts')
//            ->where('id', 1)
//            ->delete();
//        DB::table('posts')
//            ->where('id', '>', 5)
//            ->delete();
//        DB::table('posts')
//            ->delete();
        // 139. Инкремент и декремент данных через QB Laravel
        //увеличение значения поля на единицу
        DB::table('posts')
            ->where('id', 1)
            ->increment('likes');
        //уменьшение значения поля на единицу
        DB::table('posts')
            ->where('id', 1)
            ->decrement('likes');
        //увеличение значения поля на заданное значение
        DB::table('posts')
            ->where('id', 1)
            ->increment('likes', 5);
        // 138. Обновление данных через QB Laravel
        DB::table('posts')->where('id', 1)->update([
            'title' => 'page',
            'slug' => 'slug',
        ]);
        DB::table('posts')->where('id', '>', 3)->update([
            'title' => 'page',
            'slug' => 'slug',
        ]);
        DB::table('posts')->update([
            'title' => 'page',
            'slug' => 'slug',
        ]);
        // 137. Массовая вставка записей через QB Laravel
        DB::table('posts')->insert([
            [
                'title' => 'page',
                'slug' => 'slug',
                'text' => 'text',
                'likes' => 150,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'page',
                'slug' => 'slug',
                'text' => 'text',
                'likes' => 150,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        // 136. Получение id вставленной записи через QB Laravel
        $posts = DB::table('posts')->insertGetId([
            'title' => 'page',
            'slug' => 'slug',
            'text' => 'text',
            'likes' => 150,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        echo $posts;
        // 135. Вставка одной записи через QB Laravel
        DB::table('posts')->insert([
           'title' => 'page',
           'slug' => 'slug',
            'text' => 'text',
            'likes' => 150,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // 134. Сдвиг при выборке через QB Laravel
        $posts = DB::table('posts')
            ->skip(2)
            ->take(3)
            ->get();
        dump($posts);
        // 133. Количество записей в выборке через QB в Laravel
        $posts = DB::table('posts')
            ->take(3)
            ->get();
        dump($posts);
        // 132. Случайная сортировка при выборке через QB Laravel
        $posts = DB::table('posts')
            ->inRandomOrder()
            ->get();
        dump($posts);
        $post = DB::table('posts')
            ->inRandomOrder()
            ->get();
        dump($post);
        // 131. 2. Указание поля сортировки
        $posts = DB::table('posts')
            ->oldest('updated_at')
            ->get();
        dump($posts);
        // Задания
        $users = DB::table('users')
            ->latest('updated_at')
            ->get();
        dump($users);
        $users = DB::table('users')
            ->where('age', '>', 18)
            ->oldest('updated_at')
            ->get();
        dump($users);
        // 131. Сортировка по дате при выборке через QB в Laravel
        $posts = DB::table('posts')
            ->latest() // убывание
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->oldest() // возрастание
            ->get();
        dump($posts);
        // задания
        $users = DB::table('users')
            ->oldest()
            ->get();
        dump($users);
        $users = DB::table('users')
            ->latest()
            ->get();
        dump($users);
        $users = DB::table('users')
            ->where('age', '>', 18)
            ->oldest()
            ->get();
        dump($users);
        // 130. Сортировка данных при выборке через QB в Laravel
        $posts = DB::table('posts')
            ->orderBy('likes')
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->orderBy('likes', 'desc')
            ->get();
        dump($posts);
        // Задания
        $users = DB::table('users')
            ->orderBy('age')
            ->get();
        dump($users);
        $users = DB::table('users')
            ->orderBy('salary', 'desc')
            ->get();
        dump($users);
        // 129. Комбинация динамических условий QB в Laravel
        $posts = DB::table('posts')
            ->whereIdAndSlug(1, 'slug1')
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->whereIdOrSlug(2, 'slug3')
            ->get();
        dump($posts);
        // задания
        $users = DB::table('users')
            ->whereIdAndAge(4, 17)
            ->get();
        dump($users);
        $users = DB::table('users')
            ->whereIdOrAge(3, 20)
            ->get();
        dump($users);
        //128. Динамические условия при выборке QB Laravel
        $posts = DB::table('posts')
            ->whereId(1)
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->whereSlug('slug1')
            ->get();
        dump($posts);
        //задания
        $users = DB::table('users')
            ->whereId(3)
            ->get();
        dump($users);
        $users = DB::table('users')
            ->whereName('имя2')
            ->get();
        dump($users);
        $users = DB::table('users')
            ->whereEmail('dd@gmail.com')
            ->get();
        dump($users);
        // 127. Проверка Null при выборке через QB Laravel
        $posts = DB::table('posts')
            ->whereNull('updated_at') // равны Null
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->whereNotNull('updated_at') // не равны Null
            ->get();
        dump($posts);
        // задания
        $users = DB::table('users')
            ->whereNotNull('email')
            ->get();
        dump($users);

        //126. Условие whereIn при выборке через QB в Laravel
        $posts = DB::table('posts')
            ->whereIn('id', [1, 2, 3]) // в массиве
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->whereNotIn('likes', [1, 2, 3]) // вне массива
            ->get();
        dump($posts);
        // задания
        $users = DB::table('users')
            ->whereIn('id', [1, 2 ,3 , 5])
            ->get();
        dump($users);
        $users = DB::table('users')
            ->whereNotIn('id', [1, 2 ,3 , 5])
            ->get();
        dump($users);
        //125. Условие whereBetween при выборке через QB в Laravel
        $posts = DB::table('posts')
            ->whereBetween('likes', [1, 200]) // в интервале
            ->get();
        dump($posts);
        $posts = DB::table('posts')
            ->whereNotBetween('likes', [1, 200]) // вне интервала
            ->get();
        dump($posts);
        // задания
        $users = DB::table('users')
            ->whereBetween('age', [16, 18])
            ->get();
        dump($users);
        $users = DB::table('users')
            ->whereNotBetween('age', [16, 18])
            ->get();
        dump($users);
        /*
        //124. Получение коллекции значений столбца через QB Laravel
        $titles = DB::table('posts')->pluck('title');
        dump($titles);
        //можно перебрать полученные данные циклом
        $titles = DB::table('posts')->pluck('title');
        foreach ($titles as $title) {
            echo "<br>";
            echo $title;
        }
        // 123. Получение значения одного столбца QueryBuilder Laravel
        $title = DB::table('posts')->where('id', 1)->value('title');
        echo $title;
        // 122. Получение одной строки через QB Laravel
        $posts = DB::table('posts')->where('id', 1)->first();
        return view('show', compact('posts'));
        */
        // 121. Сложные условия при выборке через QB Laravel
        /*
        $posts = DB::table('posts')
            ->where('id', '=', 3)
            ->orWhere(function ($query) {
                $query
                    ->where('likes', '>', 5000)
                    ->where('likes', '<', 5000);
            })
            ->get();
        return view('show', compact('post'));
        */
        //120. Условия orWhere при выборке через QB в Laravel
        /*
        $posts = DB::table('posts')
            ->where('id', '<', 3)
            ->orWhere('likes', '>', 3000)
            ->get();
        return view('show', compact('post'));
        */
        //119. Несколько условий where при выборке через QB в Laravel
        /*
        $posts = DB::table('posts')
            ->where('likes', '>', 4000)
            ->where('likes', '<', 20000)
            ->get();
        */
        //118. Условия where при выборке через QB в Laravel
        $posts = DB::table('posts')->where('likes', '=',200)->get();
        return view('show', compact('posts'));
        //117. Поля выборки в QB в Laravel (select-выцбираем 2 поля - title и text)
        /*
        $posts = DB::table('posts')->select('title','text')->get();
        // переименование столбцов
        $posts = DB::table('posts')->select('title','text as post_text')->get();
        */
        //116. ПРосмотр SQL запросов в Laravel
        /*
        // через QueryLog
        DB::enableQueryLog();
        DB::table('posts')->where('id', '>', 2)->get();
        dump(DB::getQueryLog());
        // вывод через toSQL
        $query=DB::table('posts')->where('id','>',2)->toSql();
        dump($query);
        //просмотр запроса через метод ump and die(dd)
        DB::table('posts')->where('id','>',2)->dd();
        // просмотр запроса через метод dump
//        DB::table('posts')->where('id','>',2)->dump();
        */
        //115. Вывод полученных записей в Laravel
//        $posts=DB::table('posts')->get();
//        return view('show',['posts'=>$posts]);
        // 114. Получение всех записей через Query Builder
//        $posts = DB::table('posts')->get();
//        dump($posts);
//
//        foreach ($posts as $post) {
//            dump($post->title);
//            dump($post->text);
//        }
    }
}
