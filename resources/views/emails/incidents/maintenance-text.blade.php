{!! $name !!}

{!! $status !!}
{!! $text_content !!}
@if($timestamp_end)
{!! trans('cachet.incidents.scheduled_from_till', ['from' => $timestamp, 'till' => $timestamp_end]) !!}
@else
{!! $timestamp !!}
@endif

@if($has_component)
({{ $component_name }})
@endif
@if($has_manage_link)
{!! trans('cachet.subscriber.email.manage') !!} {{ $manage_link }}
@endif
@if($has_unsubscribe_link)
{!! trans('cachet.subscriber.email.unsubscribe') !!} {{ $unsubscribe_link }}
@endif

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
