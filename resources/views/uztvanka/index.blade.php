<ul>
@forelse ($uztvankos as $uztvanka)
    <li>
      <div><b>ID: {{$uztvanka->id}}</b></div>
      <div>Juodi: {{$uztvanka->juodi}}</div>
      <div>Rudi: {{$uztvanka->rudi}}</div>
      <a href="{{route('uztvanka-edit', $uztvanka)}}">Redaguoti Bebrus</a>
    </li>
@empty
    <li>Uztvanku nera.</li>
@endforelse
</ul>