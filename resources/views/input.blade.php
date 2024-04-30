<form action="/result" method="post">
    @csrf
    <p>好きな言葉は？<input type="text" name="word"></p>
    <p>{{\App\Models\User::where('id', auth()->id())->get()[0]['name']}}</p>
    <p><input type="submit" value="送信"></p>
</form>
