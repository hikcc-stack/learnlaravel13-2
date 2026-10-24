<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
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

