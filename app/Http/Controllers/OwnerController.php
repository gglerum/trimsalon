<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function create(Request $request): void
    {
        $owner = Owner::create(
            [
                'name' => 'John Doe',
                'address' => 'Main Street 123',
                'email' => 'jdoe@example.com',
                'zipcode' => '12345',
                'city' => 'Springfield',
                'phone_number' => '555-1234',
                'house_number' => '123'
            ]
        );
    }

    public function show(Owner $owner): View
    {
        return view('owner', [
            'owner' => $owner
        ]);
    }
}
