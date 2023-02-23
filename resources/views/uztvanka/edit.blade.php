<h1>Juodieji: {{$uztvanka->juodi}}</h1>
<h1>Rudieji: {{$uztvanka->rudi}}</h1>
<form action="{{route('uztvanka-save', $uztvanka)}}" method="post">
  <div>Juodieji: <input type="text" name="j"></div>
  <div>Rudieji: <input type="text" name="r"></div>
  <div><button type="submit" name="add" value="add">Prideti</button></div>
@csrf
</form>

<form action="{{route('uztvanka-save', $uztvanka)}}" method="post">
  <div>Juodieji: <input type="text" name="j"></div>
  <div>Rudieji: <input type="text" name="r"></div>
  <div><button type="submit" name="rem" value="rem">Atimti</button></div>
@csrf
</form>