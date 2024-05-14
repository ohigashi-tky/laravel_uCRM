<?php

namespace App\Http\Controllers;

use App\Models\InertiaTest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class InertiaTestController extends Controller
{
    public function index(): Response {
        return Inertia::render('Inertia/Index',['blogs' => InertiaTest::all()]);
    }

    public function create(): Response {
        return Inertia::render('Inertia/Create');
    }

    public function show($id = null): Response {
        return Inertia::render('Inertia/Show', ['id' => $id]);
    }

    public function store (Request $request) {
        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inertia.index')->with(['message' => '登録しました。']);
    }
}
