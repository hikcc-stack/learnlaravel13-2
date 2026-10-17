<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider; /* Глобальное ограничение */
use App\Http\Controllers\PostController; /* Подключение контроллера */
use App\Http\Controllers\TestController; /* Подключение контроллера */

// codemu
//15
Route::get('/', function () {
    return view('!!!');
});
Route::get('/', function () {
    return 'home page';
});
Route::get('/about', function () {
    return 'about page';
});
Route::get('/posts', function () {
    return 'posts list';
});
Route::get('/test', function () {
    return 'test page';
});
Route::get('/dir/test', function () {
    return 'dir test page';
});
Route::get('/contacts', function () {
    return 'contacts page';
});
//16
Route::get('/post/{id}', function ($id) {
    return 'post' . $id;
});

Route::get('/user/{id}', function ($id) {
    return 'user' . ' ' . $id;
});
Route::get('/post/{name}', function ($name) {
    return 'post' . ' '. $name;
});
Route::get('/city/{name}', function ($name) {
    return 'city' . ' '. $name;
});
//17
Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
    return $catId . ' ' . $postId;
});

Route::get('/user/{name}/{surname}', function ($name, $surname) {
    return $name . ' ' . $surname;
});

Route::get('/city/{country}/{name}', function ($country, $name) {
    return $country . ' ' . $name;
});
Route::get('/post/{id}/comment/{num}', function ($id, $num) {
    return 'post' . ' ' . $id . ' '. 'comment' . ' '. $num;
});
//18
Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'page number ' . $page;
});
Route::get('/city/{city?}', function ($city = 'minsk') {
    return 'city:' . $city;
});
Route::get('/page/{num?}', function ($num = 1) {
    return 'page number ' . $num;
});
//19
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->where('id', '[0-9]+');
Route::get('/user/{id}', function ($id) {
    return 'user ' . $id;
})->where('id', '[0-9]+');
Route::get('/product/{code}', function ($code) {
    return 'product ' . $code;
})->where('code', '[0-4]');
//20
Route::get('/post/{slug}/{id}', function ($slug, $id) {
    return 'post ' . $slug . ' ' . $id;
})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');
Route::get('/post/{slug}/{id}', function ($slug, $id) {
    return 'post ' . $slug . ' ' . $id;
})->where([
    'slug' => '[a-z0-9_-]+',
    'id'=> '[0-9]+',
]);

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'user ' . $id . ' ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[a-z]',
]);

Route::get('/posts/{date}', function ($date) {
    return 'date: ' . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

Route::get('/posts/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'date: ' . $year . '-' . $month . '-' . $day;
})->where('year', '[0-9]{4}')->where('month', '[0-9]{2}') ->where( 'day',  '[0-9]{2}');

Route::get('/users/{order}', function ($order) {
    return 'users ' . $order;
})->where([
    'order' => 'name', 'surname', 'age'
]);
Route::get('/product/{code}', function ($code) {
    return 'product ' . $code;
})->where('code', '[0-4]');

//21
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->whereNumber('id');

Route::get('/post/{slug}', function ($slug) {
    return 'post ' . $slug;
})->whereAlpha('slug');

Route::get('/post/{slug}', function ($slug) {
    return 'post ' . $slug;
})->whereAlphaNumeric('slug');

Route::get('/users/{order}', function ($order) {
    return 'sort: ' . $order;
})->whereIn('order', ['name', 'surname', 'age']);

Route::get('/user/{id}', function ($id) {
    return 'user: ' . $id;
})->whereNumber('id');

Route::get('/city/{name}', function ($name) {
    return 'city: ' . $name;
})->whereAlpha('name');

Route::get('/tag/{slug}', function ($slug) {
    return 'tag: ' . $slug;
})->whereAlphaNumeric('slug');

Route::get('/users/{order}', function ($order) {
    return 'sort: ' . $order;
})->whereIn('order', ['name', 'surname', 'age']);

//22
class AppServiceProvider extends ServiceProvider {
    public function boot(): void{
        Route::pattern('id', '[0-9]+');
        Route::pattern('slug', '[a-z0-9_-]+');
    }

}
Route::get('/post/{id}', function () {
    return '!!!'; // only numeric
});
//23
Route::get('/post/all', function () {
    return 'all';
})->whereNumber('id');
Route::get('/post/{id}', function ($id) {
    return 'id';
});

Route::get('/user/all', function () {
    return 'all';
});

Route::get('/user/{id}', function ($id) {
    return 'id';
});


Route::get('/page/about', function () {
    return 'about';
});

Route::get('/page/{num}', function ($num) {
    return 'num';
})->whereNumber('num');

Route::get('/page', function () {
    return 'page';
});


Route::get('/user/all', function () {
    return 'all';
});

Route::get('/user', function () {
    return 'user';
});

Route::get('/user/{id?}', function ($id = null) {
    return 'id';
});


Route::get('/user/all/desc', function () {
    return 'all desc';
});

Route::get('/user/all', function () {
    return 'all';
});

Route::get('/user/{name}/{id?}', function ($name, $id = null) {
    return 'name id';
});


//24
Route::prefix('blog')->group(function () {
    Route::prefix('post')->group(function () {
        return 'all';
    });
    Route::get('/post/{id}', function ($id) {
        return $id;
    });
});


Route::prefix('admin')->group(function () {
    Route::prefix('user')->group(function () {
        return 'all';
    });
    Route::get('/{id}', function ($id) {
        return $id;
    });
});

Route::prefix('shop')->group(function () {
    Route::prefix('product')->group(function () {
        Route::prefix('category')->group(function () {
            return 'all';
        });
    });
    Route::get('/{id}', function ($id) {
        return $id;
    });
});






Route::get('/newpost', [PostController::class, 'show']); // Сокращенная запись обращения к контроллеру
Route::get('/newposts', [PostController::class, 'all']); // Обращение ко второму методу контроллера
Route::get('/longpost', [\App\Http\Controllers\Controller::class, '#']); // Удлиненная запись

Route::get('/rarepost/{id}', [PostController::class, 'shows']);
Route::get('/rarepost/{surname}/{name}', [PostController::class, 'newshow']);
Route::get('/oldpost/{id}', [PostController::class, 'oldshow']);

Route::get('/oldpost', [TestController::class, 'show']);
Route::get('/oldpost/newpost/1', [TestController::class, 'oldshow']);

/* 39. Представления в Laravel */
Route::get('/views', [TestController::class, 'view']);
Route::get('/newviews', [TestController::class, 'newview']);

// 41. Структура представлений
Route::get('/example', [PostController::class, 'example']);
Route::get('/example/1', function() {
    return view('components.layout');
});


/* ♣♠♦♥☻ */
/* 22. Глобальное ограничение
class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');
    }
}
*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return '!!!!!!!!!!!!!!!!';
});

Route::get('/about', function () {
    return 'about page';
});
Route::get('/about/{id}', function ($id) {
    return 'Номер страницы ' . $id;
});
Route::get('/animals/{catId}/{mouseId?}', function ($catId, $mouseId = 1) {
    return  'ID кошки: ' . $catId . ' ID мыши: ' . $mouseId;
});

// Ограничение параметров маршрутов в Laravel
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->where('id', '[0-9]+'); // where - условие "где"

// Ограничения на несколько параметров
Route::get('/post/{slug}/{id}', function ($slug, $id) {
    return 'post ' . $slug . ' id ' . $id;
})->where('slug', '[a-z0-9_-]+') // a-z - любые строчные (маленькие) буквы латинского алфавита от a до z
    ->where('id', '[0-9]+');  // 0-9 - любые цифры от 0 до 9

// Шаблонные ограничения параметров маршрутов
Route::get('/posts/{id}' , function ($id) {
    return 'posts ' . $id;
})->whereNumber('id'); // ограничение только цифрами

// Шаблонные ограничения параметров маршрутов
Route::get('/posts/{slug}' , function ($slug) {
    return 'posts ' . $slug;
})->whereAlpha('slug'); // ограничение только буквами

// Шаблонные ограничения параметров маршрутов
Route::get('/posts/{slug}' , function ($slug) {
    return 'posts ' . $slug;
})->whereAlphaNumeric('slug'); // ограничение только цифрами и буквами

// Шаблонные ограничения параметров маршрутов
Route::get('/users/{order}' , function ($order) {
    return 'sort: ' . $order;
})->whereIn('order', ['name', 'surname', 'age']); // ограничение только цифрами и буквами

// Разрешение конфликтов маршрутов
Route::get('/get/{id}', function ($id) {
    return 'id';
})->whereNumber('id');
Route::get('/get/all', function () {
    return 'all';
});

// Группировка маршрутов в Laravel
// вынесем общую часть через prefix и group
Route::prefix('blog')->group(function() {
    Route::get('/blog/post/all', function() {
        return 'all';
    });
    Route::get('/blog/post/{id}', function($id) {
        return $id;
    });
});

// Именованные маршруты в Laravel
Route::get('/newblog/all/{id}', function($id) {
    return 'blogs ' . $id;
})->name('blogs');











