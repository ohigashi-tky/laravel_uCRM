<?php

namespace App\Http\Controllers;

use App\Models\InertiaTest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class InertiaTestController extends Controller
{
    public function index(): Response {
        return Inertia::render('Inertia/Index');
    }

    public function show($id = null): Response {
        return Inertia::render('Inertia/Show', ['id' => $id]);
    }

    public function store (Request $request) {
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inertia.index');
    }
}
