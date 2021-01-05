@dump($track_start)

@for($i = 1; $i <= $circuit->length; $i++)
    @if (isset($track_start[$i]))
        @foreach ($track_start[$i] as $sb)
            <span title="{{ $sb['opponent']->id }}">{{ $sb['direction'] }}</span>
        @endforeach
    @else
        .
    @endif
@endfor

@dump($track_end)

@for($i = 1; $i <= $circuit->length; $i++)
    @if (isset($track_end[$i]))
        @foreach ($track_end[$i] as $sb)
            <span title="{{ $sb['opponent']->id }}">{{ $sb['direction'] }}</span>
        @endforeach
    @else
        .
    @endif
@endfor
