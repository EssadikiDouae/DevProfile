<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 

class SkillController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $skills = Auth::user()->skills;
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $skill = new Skill($request->all());
        $skill->user_id = Auth::id();
        $skill->save();

        return redirect()->route('skills.index')->with('success', 'Compétence ajoutée avec succès.');
    }

    public function edit(Skill $skill)
    {
        $this->authorize('update', $skill);
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->authorize('update', $skill);
        $skill->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Compétence modifiée avec succès.');
    }

    public function destroy(Skill $skill)
    {
        $this->authorize('delete', $skill);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Compétence supprimée.');
    }
}
