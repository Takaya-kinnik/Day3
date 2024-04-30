{{\App\Models\User::where('id', auth()->id())->get()[0]['name']}}さんの運勢は
<br/>
{{ $unseiList[0]['name'] }}です。
好きな言葉は{{ $word }}です。
