<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $user->name = StringHelper::firstLetterInUpper($user->name);
        $user->cpf = StringHelper::formatarInscricaoFederal($user->cpf);

        return view('cms.profile.index', ['user' => $user]);
    }
}
