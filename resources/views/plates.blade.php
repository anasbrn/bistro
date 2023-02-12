@foreach ($Plates as $Plate)

<h2>
    <a href="/plate/id={{$Plate['id']}}">
        {{$Plate['plateName']}}
    </a>
</h2>
<p>{{$Plate['description']}}</p>

<span>{{$Plate['category']}}</span>

@endforeach