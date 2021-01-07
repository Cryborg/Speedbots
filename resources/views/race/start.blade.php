@dump($track_start)

@for($i = 1; $i <= $circuit->length; $i++)
    @if (isset($track_start[$i]))
        @foreach ($track_start[$i] as $lane => $speedbots)
            @foreach ($speedbots as $sb)
                <span title="{{ $sb['speedbot']->id }}">{{ $sb['speedbot']->id . $sb['direction'] . $lane}}</span>
            @endforeach
        @endforeach
    @else
        .
    @endif
@endfor

@dump($track_end)

@for($i = 1; $i <= $circuit->length; $i++)
    @if (isset($track_end[$i]))
        @foreach ($track_end[$i] as $lane => $speedbots)
            @foreach ($speedbots as $sb)
                <span title="{{ $sb['speedbot']->id }}">{{ $sb['speedbot']->id . $sb['direction'] . $lane }}</span>
            @endforeach
        @endforeach
    @else
        .
    @endif
@endfor

@foreach ($logs as $log)
    <div>
        {!! $log->first() !!}
    </div>
@endforeach
