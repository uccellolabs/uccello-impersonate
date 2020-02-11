@if (session('impersonate.original_user'))
    <div style="padding: 4px 30px; color: white; position: fixed; left: 0; right: 0; z-index: 100" class="orange right-align">
        {{ trans('impersonate::message.logged_in_as') }} <b>{{ auth()->user()->name }}</b>.
        <a href="{{ ucroute('impersonate.stop', $domain) }}" class="primary-text" style="margin-left: 16px; font-weight: bold">{{ trans('impersonate::message.stop_impersonation') }}</a>
    </div>

    @section('extra-css')
    <style>
    body.theme-uccello .navbar-fixed.navbar-top {
        margin-top: 30px;
    }
    </style>
    @append
@endif