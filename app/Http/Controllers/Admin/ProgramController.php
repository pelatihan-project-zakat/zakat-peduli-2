<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;
use App\Mustahiq;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);

        return view('admin.program.index', [
            'programs'=>$programs]);
    }

    public function create()
    {
        $mustahiqs = Mustahiq::get();

        return  view('admin.program.create', [
            'mustahiqs' => $mustahiqs,
        ]);
    }

    public function store(Request $request)
    {
        $program = new Program();

        $program->mustahiq_id = $request->mustahiq;
        $program->nama_program = $request->nama_program;
        $program->jenis_amalan = $request->jenis_amalan;
        $program->keterangan = $request->keterangan;
        $program->save();

        return redirect()->route('program.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Program $program)
    {
        $mustahiqs = Mustahiq::get();

        return view('admin.program.edit', [
            'mustahiqs' => $mustahiqs,
            'program' => $program,
        ]);
    }

    public function update(Request $request, Program $program)
    {
        $program->mustahiq_id = $request->mustahiq;
        $program->nama_program = $request->nama_program;
        $program->jenis_amalan = $request->jenis_amalan;
        $program->keterangan = $request->keterangan;
        $program->save();

        return redirect()->route('program.index');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('program.index');
    }
}
