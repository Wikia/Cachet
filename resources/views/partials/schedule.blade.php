<div class="timeline schedule">
    <div class="panel panel-info">
        <div class="panel-heading">
            <strong>{{ trans('cachet.incidents.scheduled') }}</strong>
        </div>
        <div class="list-group">
            @foreach($scheduled_maintenance as $schedule)
            <div class="list-group-item">
                <strong>{{ $schedule->name }}</strong> <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="@if($schedule->scheduled_end){{ trans('cachet.incidents.scheduled_from_till', ['from'=>$schedule->scheduled_at_formatted, 'till'=>$schedule->scheduled_end_formatted]) }}@else{{ $schedule->scheduled_at_formatted }}@endif" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
                {!! $schedule->formattedMessage !!}
            </div>
            @endforeach
        </div>
    </div>
</div>
