<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SKill;
use Illuminate\Support\Facades\Storage;

class SkillsController extends Controller
{
    // listing all the skills
    public function list()
    {
        return view('skills.list', [
            // fetching all skill rows
            'skills' => Skill::all(),
        ]);
    }

    public function addForm()
    {
        return view('skills.add');
    }

    public function add()
    {
        // adding row to skill table
        $attributes = request()->validate([
            'skill_name' => 'required',
            'skill_level' => 'nullable'
        ]);

        $skill = new SKill();
        $skill->skill_name = $attributes['skill_name'];
        $skill->skill_level = $attributes['skill_level'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been added!');
    }

    public function editForm(Skill $skill ){
        return view('skills.edit', [
            // edit one row from skill
            'skill'=>$skill
        ]);
    }

    public function edit(Skill $skill)
    {
        $attributes = request()->validate([
            'skill_name' => 'required',
            'skill_level' => 'nullable'
        ]);

        
        $skill->skill_name = $attributes['skill_name'];
        $skill->skill_level = $attributes['skill_level'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been updated!');
    }

    public function delete(Skill $skill){

        // delete skill from row
        $skill->delete();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');

    }

    public function imageForm(Skill $skill){
        return view('skills.image',[
            'skill'=>$skill
        ]);
    }

    public function image(Skill $skill){
        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($skill->image);
        
        $path = request()->file('image')->store('skills');

        $skill->image = $path;
        $skill->save();
        
        return redirect('/console/skills/list')
            ->with('message', 'Skill image has been edited!');
    }
}
