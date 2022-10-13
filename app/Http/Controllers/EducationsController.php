<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all(),
        ]);
    }
    public function addForm()
    {
        return view('educations.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'institutename' => 'required',
            'location' => 'nullable',
            'degree' => 'nullable',
            'completedate' => 'nullable',
            'info' =>'nullable'
        ]);

        $education = new Education();
        $education->institutename = $attributes['institutename'];
        $education->location = $attributes['location'];
        $education->degree = $attributes['degree'];
        $education->completedate = $attributes['completedate'];
        $education->info = $attributes['info'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education ){
        return view('educations.edit', [
            'education'=>$education
        ]);
    }

    public function edit(Education $education)
    {
        $attributes = request()->validate([
            'institutename' => 'required',
            'location' => 'nullable',
            'degree' => 'nullable',
            'completedate' => 'nullable',
            'info' =>'nullable'
        ]);

        $education->institutename = $attributes['institutename'];
        $education->location = $attributes['location'];
        $education->degree = $attributes['degree'];
        $education->completedate = $attributes['completedate'];
        $education->info = $attributes['info'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been updated!');
    }

    public function delete(Education $education){
        $education->delete();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');

    }
}
