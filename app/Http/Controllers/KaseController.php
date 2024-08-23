<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kase;

class KaseController extends Controller
{
    public function index()
    {
        $kases = Kase::all();
        return view('kases.index', compact('kases'));
    }

    public function create()
    {
        return view('kases.create');
    }

    public function store(Request $request)
    {
        // حفظ قضية جديدة
    }

    public function show($id)
    {
        $kase = Kase::findOrFail($id);
        return view('kases.show', compact('kase'));
    }

    public function edit($id)
    {
        $kase = Kase::findOrFail($id);
        return view('kases.edit', compact('kase'));
    }

    public function update(Request $request, $id)
    {
        // تحديث قضية
    }

    public function destroy($id)
    {
        $kase = Kase::findOrFail($id);
        $kase->delete();
        return redirect()->route('kases.index');
    }
}
