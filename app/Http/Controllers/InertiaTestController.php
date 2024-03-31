<?php

namespace App\Http\Controllers;

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
}
