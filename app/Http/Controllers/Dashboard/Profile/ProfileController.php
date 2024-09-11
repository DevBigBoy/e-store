<?php

namespace App\Http\Controllers\Dashboard\Profile;

use App\Models\Profile;
use Illuminate\Http\Request;
use Symfony\Component\Intl\Locales;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Intl\Countries;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        // $countries = Countries::getNames('ar');
        $countries = Countries::getNames();
        $locales = Locales::getNames();
        return view('dashboard.profile.edit', compact('user', 'countries', 'locales'));
    }


    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'], //
            'last_name' => ['required', 'string', 'max:255'], //
            'birthday' => ['required', 'date', 'before:today'],
            'gender' => ['required', 'in:male,female'], //
            'country' => ['required', 'string', 'size:2'],
            'local' => ['required', 'string', 'size:2'],
            'city' => ['nullable', 'string'],
            'street_address' => ['nullable', 'string'], //
            'state' => ['nullable', 'string'],
            'postal_code' => ['nullable', 'string'],
        ]);

        $user = $request->user();

        $user->profile->fill($request->all())->save();

        return Redirect::back()->with('success', 'Profile Updated Successfully!');
    }
}
