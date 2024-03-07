{{-- for testing
    <div>
    Rating goes here {{$rating}}
    </div> 
--}}

@if ($rating)
    @for ($i = 0; $i <= 5; $i++)
    {{ $i <= round($rating) ? '★' : '☆' }}
    @endfor
@else
    No rating yet
@endif