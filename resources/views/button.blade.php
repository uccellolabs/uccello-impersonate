@if ($record->getKey() !== auth()->id())
<a href="{{ ucroute('impersonate.start', $domain, $module, ["user" => $record->getKey()]) }}" class="waves-effect waves-light btn orange right">
    {{ trans('impersonate::message.start_impersonation')}}
</a>
@endif