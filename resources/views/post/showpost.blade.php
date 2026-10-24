<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- 48 -->
{{--<p>{{$var1}}</p>--}}
{{--<p>{{$var2}}</p>--}}
{{--<p>{{$var3}}</p>--}}

{{--<p>{{$name}}</p>--}}
{{--<p>{{$age}}</p>--}}
{{--<p>{{$salary}}</p>--}}

<!-- 49 -->
{{--<p class="{{ $cls }}"></p>--}}
{{--<input value="{{ $val }}">--}}

{{--<p class="{{ $cls }}"></p>--}}

{{--<input value="{{$val1}}">--}}
{{--<input value="{{$val2}}">--}}
{{--<input value="{{$val3}}">--}}

{{--<div style="{{$style}}">--}}
{{--</div>--}}

{{--<p>{{$text}}</p>--}}
{{--<a>{{$href}}</a>--}}

<!-- 50 -->
{{--<p>{{ time() }}</p>--}}
{{--<p>{{date('d.m.Y') }}</p>--}}
{{--<p>full name: {{ $first . ' ' . $last }}</p>--}}
{{--<p>length: {{ strlen($first) }}</p>--}}

{{--<p> name: {{ strtoupper($name) }}</p>--}}
{{--<p> length: {{ strlen($name) }}</p>--}}

<!-- 51 -->
{{--<p> sum: {{ $a + $b }}</p>--}}
{{--<p> diff: {{ $a - $b }}</p>--}}
{{--<p> product: {{ $a * $b }}</p>--}}
{{--<p> quotient: {{ $a / $b }}</p>--}}
{{--<p> power: {{ $a ** $b }}</p>--}}

{{--<p> diff: {{ $price - $discount }}</p>--}}
{{--<p> power: {{ $a ** $b }}</p>--}}

<!-- 52 -->
{{--<p>first element {{$arr[0]}}</p>--}}
{{--<p>second element {{$arr[1]}}</p>--}}

{{--<p> sum {{$arr[0] + $arr[1]}}</p>--}}
{{--<p>количество элементов массива {{ count($arr) }}</p>--}}

{{--<p> name {{$employee['name']}}</p>--}}
{{--<p> age {{$employee['age']}}</p>--}}
{{--<p> salary {{$employee['salary']}}</p>--}}

{{--<p>{{count($arr)}}</p>--}}

<!-- 53 -->
{{--<p>{{$var ? 'eee' : 'bbb'}}</p>--}}
{{--<p>{{$var ?? 'eee' }}</p>--}}
{{--<p>{{$year ?? date('Y') }}</p>--}}

{{--<p>{{$city ?? 'Moscow'}}</p>--}}

{{--<p>Страна: {{ $location['country'] ?? 'Russia' }}</p>--}}
{{--<p>Город: {{ $location['city'] ?? 'Moscow' }}</p>--}}

{{--<p>Год: {{ $year ?? date('y') }}</p>--}}
{{--<p>Месяц: {{ $month ?? date('m') }}</p>--}}
{{--<p>День: {{ $day ?? date('d') }}</p>--}}


<!-- 54 -->

{{--<p>Hello, {{!! $name !!}}</p>--}}
{{--<p>Hello, {{!! $str !!}}</p>--}}

{{-- 55 comment--}}

<!-- 56 -->
{{--@if($isAuth)--}}
{{--    you are logged in--}}
{{--@endif--}}
{{--@if(!$isAuth)--}}
{{--    you are not logged in--}}
{{--@endif--}}

{{--@if ($age > 18)--}}
{{--    <p>теекст</p>--}}
{{--@endif--}}

<!-- 57 -->
{{--@if($isAuth)--}}
{{--    you are logged in--}}
{{--@else--}}
{{--    you are not logged in--}}
{{--@endif--}}

{{--@if($age > 18)--}}
{{--    бубубубу--}}
{{--@else--}}
{{--    ненененен--}}
{{--@endif--}}

<!-- 58 -->
{{--@if($num >0)--}}
{{--    greater than zero--}}
{{--@elseif($num === 0)--}}
{{--    zero--}}
{{--@else--}}
{{--    less than zero--}}
{{--@endif--}}

{{--@if($age > 18)--}}
{{--    greater than 18--}}
{{--@elseif($age === 18)--}}
{{--    18!--}}
{{--@else--}}
{{--    less than 18 :(--}}
{{--@endif--}}

<!-- 59 -->
{{--@if(!$isAuth)--}}
{{--    you are not logged in--}}
{{--@endif--}}
{{--@unless($isAuth)--}}
{{--    you are not logged in--}}
{{--@endunless--}}

{{--@unless($age > 18)--}}
{{--    несовершеннолетний--}}
{{--@endunless--}}

<!-- 60 -->
{{--@if(count($arr) >= 1)--}}
{{--    the array has records--}}
{{--@else--}}
{{--    the array has no records--}}
{{--@endif--}}
{{--@if(count($arr) > 0)--}}
{{--    <p>Сумма {{array_sum($arr)}} </p>--}}
{{--@else--}}
{{--    количесвто равно нулю--}}
{{--@endif--}}

<!-- 61 -->
{{--@foreach($arr as $elem)--}}
{{--    <p>{{$elem}}</p>--}}
{{--@endforeach--}}
{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        <li>{{$elem}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}


{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        <li>{{$elem}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        <li>{{$elem * $elem}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        <li>{{sqrt($elem)}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

<!-- 62 -->
{{--@foreach($arr as $key => $elem)--}}
{{--    {{$key + 1}} {{$elem}}--}}
{{--@endforeach--}}
{{--<ul>--}}
{{--    @foreach($arr as $key => $elem)--}}
{{--        <li>{{$key + 1}} {{$elem}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

<!-- 63 -->
{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        @if($elem >0)--}}
{{--            <li>{{$elem}}</li>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</ul>--}}


{{--@if(count($arr)>0)--}}
{{--    <ul>--}}
{{--        @foreach($arr as $elem)--}}
{{--            <li>{{$elem}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}

{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        @if($elem % 2 == 0)--}}
{{--            <li>{{$elem}}</li>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--@if(count($data)>0)--}}
{{--    <ul>--}}
{{--    @foreach($data as $elem)--}}
{{--            <li>{{$elem}}</li>--}}
{{--    @endforeach--}}
{{--    </ul>--}}
{{--@else--}}
{{--    <p>{{$data}}</p>--}}
{{--@endif--}}

<!-- 64 -->
{{--@foreach ($arr as $subArr)--}}
{{--    @foreach ($subArr as $elem)--}}
{{--        {{ $elem }}--}}
{{--    @endforeach--}}
{{--@endforeach--}}

{{--<ul>--}}
{{--    @foreach ($arr as $subArr)--}}
{{--        <li>--}}
{{--            <ul>--}}
{{--                @foreach ($subArr as $elem)--}}
{{--                    <li>{{ $elem }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<table>--}}
{{--    @foreach ($arr as $row)--}}
{{--        <tr>--}}
{{--            @foreach ($row as $elem)--}}
{{--                <td>{{ $elem }}</td>--}}
{{--            @endforeach--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}

<!-- 65 -->
{{--<ul>--}}
{{--    @foreach ($users as $user)--}}
{{--        <li>{{ $user['name'] }} {{ $user['age'] }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @foreach ($employees as $employee)--}}
{{--        <li>{{ $employee['name'] }} {{ $employee['surname'] }} {{ $employee['salary'] }}$</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<table>--}}
{{--    @foreach ($employees as $employee)--}}
{{--        <tr>--}}
{{--            <td>{{ $employee['name'] }}</td>--}}
{{--            <td>{{ $employee['surname'] }}</td>--}}
{{--            <td>{{ $employee['salary'] }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}

<!-- 66 -->
{{--@forelse($arr as $elem)--}}
{{--    <p>{{$elem}}</p>--}}
{{--@empty--}}
{{--    <p>array is empty</p>--}}
{{--@endforelse--}}

{{--@forelse($users as $elem)--}}
{{--    <p>{{$elem}}</p>--}}
{{--@empty--}}
{{--    <p>array is empty</p>--}}
{{--@endforelse--}}

<!-- 67 -->
<!-- граничные итерации-->
{{--@foreach($arr as $elem)--}}
{{--    @if ($loop->first)--}}
{{--        first iteration--}}
{{--    @endif--}}

{{--    @if($loop->last)--}}
{{--        last iteration--}}
{{--    @endif--}}

{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--<!-- четность-->--}}
{{--@foreach($arr as $elem)--}}
{{--    @if ($loop->odd)--}}
{{--        first iteration--}}
{{--    @endif--}}

{{--    @if($loop->even)--}}
{{--        last iteration--}}
{{--    @endif--}}

{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--<!-- итерации -->--}}
{{--@foreach($arr as $elem)--}}
{{--    {{$loop->index}}--}}
{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--@foreach($arr as $elem)--}}
{{--    {{$loop->iteration}}--}}
{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--@foreach($arr as $elem)--}}
{{--    {{$loop->remaining}}--}}
{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--<!-- количсество элементов -->--}}
{{--@foreach($arr as $elem)--}}
{{--    {{$loop->count}}--}}
{{--    {{$elem}}--}}
{{--@endforeach--}}


{{--<ul>--}}
{{--    @foreach ($arr as $elem)--}}
{{--        <li>{{ $loop->index }}--}}
{{--            {{ $elem }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @foreach ($arr as $elem)--}}
{{--        <li>{{ $loop->iteration }}--}}
{{--            {{ $elem }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<ul>--}}
{{--    @foreach ($arr as $elem)--}}
{{--        <li class="--}}
{{--            @if ($loop->first) first @endif--}}
{{--            @if ($loop->last) last @endif--}}
{{--        ">--}}
{{--            {{ $elem }}--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--@foreach ($arr as $elem)--}}
{{--    @if ($loop->remaining < 3)--}}
{{--        <i>{{ $elem }}</i>--}}
{{--    @else--}}
{{--        <b>{{ $elem }}</b>--}}
{{--    @endif--}}
{{--@endforeach--}}

<!-- 68 -->

{{--@foreach($arr as $elem) --}}
{{--    {{$elem}}--}}
{{--    @if ($elem == 3)--}}
{{--        @break--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--@foreach($arr as $elem)--}}
{{--    {{$elem}}--}}
{{--    --}}
{{--    @break($elem == 3)--}}
{{--@endforeach--}}

{{--@foreach($arr as $elem)--}}
{{--    {{$elem}}--}}
{{--    @if ($elem == 0)--}}
{{--        @break--}}
{{--    @endif--}}
{{--@endforeach--}}

<!-- 69 -->
{{--@foreach($arr as $elem) --}}
{{--    @if($elem == 3)--}}
{{--        @continue--}}
{{--    @endif--}}
{{--    --}}
{{--    {{$elem}}--}}
{{--@endforeach--}}

{{--@foreach($arr as $elem)--}}
{{--        @continue($elem == 3)--}}

{{--    {{$elem}}--}}
{{--@endforeach--}}
{{--<ul>--}}
{{--    @foreach($arr as $elem)--}}
{{--        @continue($elem == 0)--}}

{{--        <li>{{$elem}}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

<!-- 70 -->
{{--@for ($i = 0; $i < 10; $i++)--}}
{{--    counter: {{$i}}--}}
{{--@endfor--}}

{{--@for ($i = 1; $i <= 10; $i++)--}}
{{--    <p>{{$i}}</p>--}}
{{--@endfor--}}

{{--<ul>--}}
{{--    @for ($i = 1; $i <= 5; $i++)--}}
{{--        <li>item {{$i}}</li>--}}
{{--    @endfor--}}
{{--</ul>--}}

{{--@for ($i = 1; $i <= $count; $i++)--}}
{{--    <p>step {{$i}}</p>--}}
{{--@endfor--}}

{{--@for ($i = 1; $i <= 10; $i++)--}}
{{--    <p>{{$i}}</p>--}}
{{--@endfor--}}

{{--<ul>--}}
{{--    @for ($i = 1; $i <= 5; $i++)--}}
{{--        <li>{{$i * $i}}</li>--}}
{{--    @endfor--}}
{{--</ul>--}}

{{--@for ($i = 1; $i <= $count; $i++)--}}
{{--    <p>step {{$i}}</p>--}}
{{--@endfor--}}

<!-- 71 -->
{{--@php--}}
{{--////--}}
{{--@endphp--}}

{{--@php--}}
{{--    echo 123;--}}
{{--@endphp--}}

{{--@php--}}
{{--    echo $a + $b;--}}
{{--@endphp--}}

{{--@php--}}
{{--  $today = date('d.m.Y')--}}
{{--@endphp--}}
{{--{{$today}}--}}

<!-- 72 -->
{{--@foreach ($links as $link)--}}
{{--    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>--}}
{{--@endforeach--}}

{{--<ul>--}}
{{--    @foreach ($links as $link)--}}
{{--        <li>--}}
{{--            <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}


{{--<table>--}}
{{--    @foreach ($employees as $employee)--}}
{{--        <tr>--}}
{{--            <td>{{ $employee['name'] }}</td>--}}
{{--            <td>{{ $employee['surn'] }}</td>--}}
{{--            <td>{{ $employee['salary'] }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}

{{--<table>--}}
{{--    <tr>--}}
{{--        <th>#</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Surname</th>--}}
{{--        <th>Salary</th>--}}
{{--    </tr>--}}
{{--    @foreach ($employees as $key => $employee )--}}
{{--        <tr>--}}
{{--            <td>{{$key + 1}}</td>--}}
{{--            <td>{{ $employee['name'] }}</td>--}}
{{--            <td>{{ $employee['surn'] }}</td>--}}
{{--            <td>{{ $employee['salary'] }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}


{{--<table>--}}
{{--    <tr>--}}
{{--        <th>#</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Surname</th>--}}
{{--        <th>Salary</th>--}}
{{--    </tr>--}}
{{--    @foreach ($employees as $key => $employee)--}}
{{--        @if ($employee['salary'] > 2000)--}}
{{--            <tr>--}}
{{--                <td>{{$key + 1}}</td>--}}
{{--                <td>{{ $employee['name'] }}</td>--}}
{{--                <td>{{ $employee['surn'] }}</td>--}}
{{--                <td>{{ $employee['salary'] }}</td>--}}
{{--            </tr>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</table>--}}

{{--<table>--}}
{{--    @foreach ($users as $user)--}}
{{--        <tr--}}
{{--            @if ($user['banned'])--}}
{{--                style="color: red;"--}}
{{--            @else--}}
{{--                style="color: green;"--}}
{{--            @endif--}}
{{--        >--}}
{{--            <td>{{ $user['name'] }}</td>--}}
{{--            <td>{{ $user['surn'] }}</td>--}}
{{--            <td>{{ $user['banned'] ? 'banned' : 'active' }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}


{{--@foreach($arr as $elem)--}}
{{--    <input value="{{$elem}}">--}}
{{--@endforeach--}}

{{--<select>--}}
{{--    @foreach($cities as $elem)--}}
{{--        <option>{{$elem}}</option>--}}
{{--    @endforeach--}}
{{--</select>--}}


{{--<ul>--}}
{{--    @foreach ($days as $day)--}}
{{--        <li class="{{ $day === $today ? 'active' : '' }}">{{ $day }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}




</body>
</html>
