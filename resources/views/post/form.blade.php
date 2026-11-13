<form action="/result">
    <input name="title">
    <input name="slug">
    <input type="submit">
</form>

<h5>194</h5>
<form action="/result" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <input type="submit">
</form>

<form action="/result/profile" method="POST">
    @csrf
    <input name="name">
    <input name="age">
    <input name="salary">
    <input type="submit">
</form>

<h5>195</h5>
<form action="/result" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <input type="submit">
</form>
<form action="/result" method="POST">
    @csrf
    <p>Введите город:</p>
    <input name="title">
    <p>Введите страну:</p>
    <input name="slug">
    <input type="submit">
</form>
<h5>196</h5>
<form action="/result" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <input name="text">
    <input type="submit">
</form>
{{--
<ul>
    @foreach($data as $name => $value)
        <li>{{$name}} : {{$value}}</li>
    @endforeach
</ul>
--}}


<h5>197</h5>
<form action="/result" method="POST">
    @csrf
    Имя<input name="name">
    Фамилия<input name="surname">
    Почта<input name="email">
    Пароль<input type="password">
    <input type="submit">
</form>
{{--
<ul>
    @foreach($data as $name => $value)
        <li>{{$name}} : {{$value}}</li>
    @endforeach
</ul>
--}}


<h5>198</h5>
<form action="/result" method="POST">
    @csrf
    Имя<input name="name">
    Фамилия<input name="surname">
    Почта<input name="email">
    Пароль<input type="password">
    <input type="submit">
</form>
{{--
<ul>
    @foreach($data as $name => $value)
        <li>{{$name}} : {{$value}}</li>
    @endforeach
</ul>
--}}
<h5>199</h5>
<form action="/result" method="POST">
    @csrf
    <input type="text" name="user[name]">
    <input type="text" name="user[surname]">
    <input type="submit">
</form>
{{--
<ul>
    @foreach($data as $name => $value)
        <li>{{$name}} : {{$value}}</li>
    @endforeach
</ul>
--}}
<form action="/result" method="POST">
    @csrf
    <div>
        <label>Имя: <input type="text" name="user[name]"></label>
    </div>
    <div>
        <label>Фамилия: <input type="text" name="user[surname]"></label>
    </div>
    <div>
        <label>Email: <input type="email" name="user[email]"></label>
    </div>
    <button type="submit">Отправить</button>
</form>
{{--
<p>Имя: {{ $name }}</p>
<p>Фамилия: {{ $surname }}</p>
<p>Email: {{ $email }}</p>
--}}


<h5>200</h5>
<form action="/result/1/user1" method="POST">
    @csrf
    <input type="text" name="text">
    <input type="submit">
</form>

<h5>201</h5>
<form action="/store" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <textarea name="text"></textarea>
    <input type="submit">
</form>

<form action="/store" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <textarea name="text"></textarea>
    <input type="submit">
</form>



<form action="/createUser" method="POST">
    @csrf
    <input name="name">
    <input name="email">
    <input name="age">
    <input name="password">
    <input type="submit">
</form>

<form action="/createUserFillable" method="POST">
    @csrf
    <input name="name">
    <input name="email">
    <input name="age">
    <input name="salary">
    <input name="password">
    <input type="submit">
</form>

<h5>202</h5>
<p>Чтобы отсеять некорректные ненужные данные до их сохранения в базу и избежать сбоев в приложении.</p>
<ul>
    <li>Пустое обязательное поле.</li>
    <li>Email с опечаткой (без @)</li>
    <li>Слишком короткий пароль.</li>
</ul>
<p>Пользователя возвращают назад на форму и показывают рядом с полями сообщения о том, что нужно исправить.</p>

<h5>203 и 204 и 205 и 206 b 208</h5>
<form action="/formPost" method="POST">
    @csrf
    <div>
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <input name="title" value="{{ old('title') }}">
    </div>
    <div>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <input name="email" value="{{ old('email') }}">
    </div>
    <input type="submit">
</form>
<h5>216</h5>
<form action="/validation" method="POST">
    @csrf
    <div>
        <label>website:</label>
        <input type="text" name="website" value="{{ old('website') }}">
    </div>
    <div>
        <label>slug:</label>
        <input type="text" name="slug" value="{{ old('slug') }}">
    </div>
    <button type="submit">Отправить</button>
</form>

<h5>229</h5>
<form action="/validation" method="POST">
    @csrf
    <div>
        <label>email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <button type="submit">Отправить</button>
</form>
