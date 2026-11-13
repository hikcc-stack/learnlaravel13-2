<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Validator;

class PostController extends Controller
{
    public function validation(Request $request){
        $validator = Validator::make($request->all(),[
            'website' => 'url',
            'slug' => 'alpha_dash',
            'email' => 'bail|required|email|unique:users',
        ]);
        if($validator->fails()){
            $res = $validator->errors()->all();
            echo implode(", ", $res);
            return;
        }
        echo 'Проверка пройдена';
    }
    public function sintacsis(Request $request){
        $data = [
            'title' => 'title',
            'age' => 45,
            'price' => 23500
        ];
        $rules = [
            'title' => 'string|required|min:5|max:500',
            'age' => 'integer|between:18,100',
            'price' => 'numeric|between:1,9999',
            'password' => ['required|min:8','password:letters,numbers'],
            'code' => 'size:4',
            'pin' => 'size:6',
            'name' => 'alpha|required',
            'login' => 'alpha_num|regex:/^[a-z]+$/',
            'year' =>  'digits:5',
            'sms_code' => 'digits:6',
            'website' => 'url',
            'note' => 'nullable',
            'birthday' => 'date',
            'deadline' => 'after:today',
            'end_at' => '2025-01-01',
            'start_at' => 'before:end_at',
            'status' => 'in:draft,published',
            'role' => 'in:admin,user',
            'terms' => 'accepted',
            'is_active' => 'boolean',
            'phone' => 'regex:/^\+?[0-9]{10,15}$',
            'tags' => 'array',
            'roles' => 'array|max:3',
            'avatar' => [
                'image',
                'mimes:jpg,png',
                Rule::dimensions([
                    'max_width' => 500,
                    'max_height' => 500,
                ]),
            ],
            'doc' => 'file|mimes:pdf',
            'cover' => Rule::dimensions([
                'min_width' => 800,
            ]),
            'email' => 'unique:users,email',
            'slug' => 'unique:posts,slug',
            'category_id' => 'exists:categories,id',
            'author_id' => 'exists:users,author_id',
            'company' => 'required_if:type, business',
            'phonenumber' => 'sometimes|string',
            'email1' => 'bail|required|email|unique:users',
            'password1' => 'required|confirmed',
            'min_price' => 'min:100',
            'max_price' => 'max:9999',
        ];
        // numeric отличается от integer тем, что numeric может проверить является ли значением числом или строкой, представляющей число
        // Правило пропускает целые числа, числа с плавающей точкой и числа в экспоненциальной записи, но не пропускает строки с буквами или специальными символами.
        // integer проверяет только числовые значения
        // Правило работает как со значениями из запроса, так и с массивами данных. При несовпадении типа возвращается ошибка.

        // В отличие от правила required, правило filled проверяет поле
        // только в том случае, если оно присутствует в запросе. Если поле отсутствует, валидация считается успешной.
        // Если поле присутствует, оно не должно быть пустым.

    }

    public function formPost(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'title' => 'required',
                'email' => 'required|email',
            ]);

            dump($validated);
        }
        return view('post.form');
    }

    public function createUserFillable(Request $request){
        User::create($request->only('name', 'email', 'age', 'salary', 'password'));

        return 'user created';
    }

    public function createUser(Request $request){
        $post = new User();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->age = $request->input('age');
        $post->salary = rand(1000,100000);
        $post->password = $request->input('password');
        $post->save();

        return ('user created');
    }


    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->text = $request->input('text');
        $post->likes = 0;
        $post->category_id = rand(1,10);
        $post->save();

        return ('post saved');
    }

    public function form()
    {
        return view('post.form');
    }

    public function test(Request $request, $id, $login){

        $text = $request->input('text');
        dump($id);
        dump($login);
        dump($text);
    }


    public function result(Request $request)
    {
        // 196
        // Данные формы в виде массива в Laravel
        //по одному полю
        $title = $request->input('title');
        $slug  = $request->input('slug');
        // все поля сразу
        $data = $request->all();

        $data = $request->only(['name', 'email']);
        $data = $request->except(['password', 'email', '_token']);
        // $data['title'], $data['slug']

        $name = $request->input('user.name');
        $surname = $request->input('user.surname');
        $email = $request->input('user.email');

        return view('post.form', [
            //'title' => $title, 'slug' => $slug,
            'data' => $data,

            'name' => $name,
            'surname' => $surname,
            'email' => $email,
        ]);
    }

//    public function form(Request $request)
//    {
//        if ($request->has('title') && $request->has('slug')) {
//            dump($request->input('title'));
//            dump($request->input('slug'));
//        }
//        return view('post.form');
//    }

    public function profile(Request $request)
    {
        $name = $request->input('name');
        $age  = $request->input('age');
        $salary  = $request->input('salary');

        return view('post.form', [
            'name' => $name, 'age' => $age, 'salary' => $salary
        ]);
    }


    public function create(){
        //173. Мягкое удаление
        $post = Post::find(10);
        //$post->delete();
        //Восстановление удаленной записи при помощи метода restore
        // метод withTrashed - позволяет увидеть и мягко удаленные записи
        $post = Post::withTrashed()->find(10);
        $post->restore();
        // forceDelete - окончательное удаление, позволяет полностью удалить запись из базы данных
        $post->forceDelete();


        // 172. Удаление записей по id в моделях Eloquent
        // удаление через метод destroy
        Post::destroy(3);
        //удаление нескольких записей
        Post::destroy([4, 5, 6]);
        //171. удаление записи
        $post = Post::find(2);
        //$post->delete();
        //удаление записи по условию
        $deletedRows = Post::where('id', '>', 50)->delete();
        //170.изменение записи
        $post = Post::find(1);
        $post->title = 'Новый заголовок';
        $post->save(); //save- метод сохранения
        //169 создание записи
        $post = new Post();
        $post->title = 'title';
        $post->text = 'text';
        $post->slug = 'text';
        $post->likes = 1111;
        $post->category_id = 1;
        $post->save();
    }
    public function view(){
        $posts = Post::find(1);// Получение одной записи
        //$posts = Post::find([1, 2, 3]);// Получение нескольких записей

        //$posts = Post::where('likes', 6308)->first();
        return view('post.show',['posts' => $posts]);
    }
    // 165 Получение данных из моделей Eloquent
    public function data(){

        $posts = Post::where('likes', 3333)->get();
        dump($posts);
        // 167. Получение одной записи
        // отличие от get
        // если условию подходит несколько строк, get вернет их все,
        // a first - только первую из результата
        //$post = Post::where('id', 1)->first();

        //выводим пост где количество лайков - 6308 и id =1, первую запись
        $post =Post::where('likes', 6308)
            ->where('id', 1)
            ->first();
        dump($post);

        // Конструктор запросов в моделях Eloquent
        $posts = Post::where('likes', '>', 3000)->get();
        return $posts;

        //через построитель запросов
        $posts = DB::table('posts')
            ->where('id','>',200)
            ->get();
        // то же самое через модель
        $posts = Post::where('id', '>', 200)->get();

        foreach ($posts as $post) {
            dump($post->title);
            dump($post->text);
        }

    }

    public function oldshow($id) {
        $posts = [
            1 => 'Вывелся текст под номером 1',
            2 => 'Вывелся текст под номером 2',
            3 => 'Вывелся текст под номером 3',
            4 => 'Вывелся текст под номером 4',
            5 => 'Вывелся текст под номером 5',
        ];

        return $posts[$id];
    }
    public function newshow($surname, $name)
    {
        return $surname . ' ' . $name;
    }
    public function shows($id)
    {
        return 'post ' . $id;
    }
    public function show() {
        return "hello world";

    }
    public function all() {
        return 'all posts';
    }
    // 41. Структура представлений
    public function example()
    {
        return view('post.post');
    }
    // codemu
    // 48
    public function showpost()
    {
        //48
//        return view('post.showpost', [
//            'var1' => 'aaa',
//            'var2' => 'bbb',
//            'var3' => 'ccc',
//        ]);

//          return view('post.showpost', [
//              'name' => 'john',
//              'age' => 25,
//              'salary' => 1000,
//          ]);
        //49
//        return view('post.showpost', [
//            'cls' => 'active',
//            'val' => 'text',
//        ]);
//        return view('post.showpost', [
//            'cls' => 'success',
//        ]);
//        return view('post.showpost', [
//            'val1' => 'a',
//            'val2' => 'b',
//            'val3' => 'c',
//        ]);

        //50
//        return view('post.showpost', [
//            'style' => 'color: red;',
//        ]);

//        return view('post.showpost', [
//            'text' => 'link text',
//            'href' => 'https://example.com',
//        ]);

//        return view('post.showpost', [
//            'first' => 'john',
//            'last' => 'smith',
//        ]);
//        return view('post.showpost', [
//            'name' => 'john',
//        ]);
        //51
//        return view('post.showpost', [
//            'a' => 10,
//            'b' => 3,
//        ]);

//        return view('post.showpost', [
//            'price' => 1000,
//            'discount' => 500,
//        ]);
//        return view('post.showpost', [
//            'a' => 4,
//            'b' => 8,
//        ]);
//  52
//        return view('post.showpost', [
//           'arr' => [1, 2],
//       ]);
//        return view('post.showpost', [
//            'employee' => [
//                'name' => 'john',
//                'age' => 25,
//                'salary' => 1000,
//            ],
///      ]);
//        return view('post.showpost', [
//           'arr' => [1, 2, 3, 4, 5],
//        ]);
//        return view('post.showpost', [
//            'var' => true,
//        ]);
//        return view('post.showpost', [
//            'city' => 'Minsk',
//        ]);
//        return view('post.showpost', [
//            'location' => [
//                'country' => 'Belarus',
//                'city' => 'Minsk',
//            ],
//        ]);
//        return view('post.showpost', [
//            'year' => 2026,
//            'month' => 9,
//            'day' => 15,
//        ]);
//        return view('post.showpost', [
//            'name' => '<b>john</b>',
//        ]);
//        return view('post.showpost', [
//            'str' => '<b>text</b>',
//        ]);
//        return view('post.showpost', [
//            'isAuth' => 'true',
//        ]);
//        return view('post.showpost', [
//            'age' => 20,
//        ]);
        // 57
//        return view('post.showpost', [
//            'isAuth' => true,
//        ]);
//        return view('post.showpost', [
//            'age' => 20,
//        ]);
//  58
//        return view('post.showpost', [
//            'num' => 5,
//        ]);
//        return view('post.showpost', [
//            'age' => 18,
//        ]);
        //59
//        return view('post.showpost', [
//            'isAuth' => false,
//        ]);
//        return view('post.showpost', [
//            'age' => 15,
//        ]);
        //60

//        return view('post.showpost', [
//            'arr' => [1, 2, 3],
//        ]);

//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4],
//        ]);

        //61
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c', 'd', 'e'],
//        ]);
//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4, 5],
//       ]);

        //62
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c'],
//        ]);
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c', 'd'],
//        ]);
        //63
//        return view('post.showpost', [
//            'arr' => [-1 ,2 ,-3, 4, 5],
//        ]);
//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4, 5, 6],
//        ]);

//        return view('post.showpost', [
//            'data' => [1, 2, 3 ],
//        ]);
        //64
//        return view('post.showpost', [
//            'arr' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
//        ]);
//        return view('post.showpost', [
//            'arr' => [[1, 2], [3,4], [5, 6]]
//        ]);
        //65
//        return view('post.showpost', [
//            'users' => [
//                [
//                    'name' => 'user1',
//                    'age' => 21,
//                ],
//                [
//                    'name' => 'user2',
//                    'age' => 22,
//                ],
//                [
//                    'name' => 'user3',
//                    'age' => 23,
//                ],
//            ],
//        ]);
//        return view('post.showpost', [
//            'employees' => [
//                [
//                    'name' => 'user1',
//                    'surname' => 'surname1',
//                    'salary' => 1000,
//                ],
//                [
//                    'name' => 'user2',
//                    'surname' => 'surname2',
//                    'salary' => 2000,
//                ],
//                [
//                    'name' => 'user3',
//                    'surname' => 'surname3',
//                    'salary' => 3000,
//                ],
//            ],
//        ]);
        // 66
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c'],
//        ]);
//        return view('post.showpost', [
//            'users' => ['user1', 'user2', 'user3'],
//        ]);
        //67
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c'],
//        ]);
//        return view('post.showpost', [
//            'arr' => ['a', 'b', 'c', 'd'],
//        ]);
//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4, 5],
//        ]);
        //68
//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4, 5],
//        ]);

//        return view('post.showpost', [
//            'arr' => [1, 2, 0, 4, 5],
//        ]);
        //69
//        return view('post.showpost', [
//            'arr' => [1, 2, 3, 4, 5],
//        ]);
//        return view('post.showpost', [
//            'arr' => [1, 0, 2, 0, 3],
//        ]);
        //70
//        return view('post.showpost', [
//            'count' => 6,
//        ]);
        //71
//        return view('post.showpost', [
//            'a' => 6,
//            'b' => 2,
//        ]);
        //72
//        return view('post.showpost', [
//            'links' => [
//                [
//                    'text' => 'text1',
//                    'href' => 'href1'
//                ],
//                [
//                    'text' => 'text2',
//                    'href' => 'href2'
//                ],
//                [
//                    'text' => 'text3',
//                    'href' => 'href3'
//                ],
//            ]
//
//        ]);
//        return view('post.showpost', [
//            'employees' => [
//                [
//                    'name' => 'user1',
//                    'surn' => 'surn1',
//                    'salary' => 1000
//                ],
//                [
//                    'name' => 'user2',
//                    'surn' => 'surn2',
//                    'salary' => 2000
//                ],
//                [
//                    'name' => 'user3',
//                    'surn' => 'surn3',
//                    'salary' => 3000
//                ],
//                [
//                    'name' => 'user4',
//                    'surn' => 'surn4',
//                    'salary' => 4000
//                ],
//                [
//                    'name' => 'user5',
//                    'surn' => 'surn5',
//                    'salary' => 5000
//                ],
//            ]
//        ]);

//
//        return view('post.showpost', [
//            'arr' => ['aaa', 'bbb', 'ccc', 'ddd'],
//        ]);

//        return view('post.showpost', [
//            'cities' => ['Moscow', 'London', 'Paris'],
//        ]);

//        $daysInMonth = date('t');
//        $today = date('d');
//
//        $days = [];
//        for ($i = 1; $i <= $daysInMonth; $i++) {
//            $days[] = $i;
//        }
//
//        return view('post.showpost', [
//            'days'  => $days,
//            'today' => $today,
//        ]);



    }


}

