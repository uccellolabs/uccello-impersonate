<?php

namespace Uccello\Impersonate\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Uccello\Core\Models\Domain;
use Uccello\Core\Models\Module;

class ImpersonateController extends Controller
{
    public function start(?Domain $domain, User $user)
    {
        session(['impersonate.original_user' => auth()->id()]);

        Auth::loginUsingId($user->id);

        return redirect(ucroute('uccello.index', $domain, 'home'));
    }

    public function stop(?Domain $domain)
    {
        $originalUserId = session('impersonate.original_user');

        if ($originalUserId) {
            Auth::loginUsingId($originalUserId);
            session(['impersonate.original_user' => null]);
        }

        return redirect(ucroute('uccello.index', $domain, 'home'));
    }
}
