@if ($record->getKey() !== auth()->id())
<a href="{{ ucroute('impersonate.start', $domain, $module, ["user" => $record->getKey()]) }}"
    class="waves-effect waves-light btn-floating btn-small red"
    style="margin-right: 10px"
    data-tooltip="{{ trans('impersonate::message.start_impersonation') }}" data-position="top">
    <i class="material-icons">switch_account</i>
</a>
@endif
