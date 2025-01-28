<?php

namespace App\Http\Controllers;

use App\Models\InertiaTest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/index');
    }

    public function show($id)
    {
        return Inertia::render('Inertia/show',
        [
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {
        $inertiaTest = new InertiaTest();
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inerita.index');
    }

}
