<?php
namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class ExperiencesController extends Controller
{
    // Experience module

    public function list()
    {
        return view('experiences.list', [
            'experiences' => Experience::all()    // returning experience list
        ]);
    }

    public function addForm()
    {
        return view('experiences.add');  // returning add experience page
    }

    // adding experience
    public function add()
    {
        $attributes = request()->validate([
            'company_name' => 'required',
            'position' => 'required',
            'job_role' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $experience = new Experience();
        $experience->company_name = $attributes['company_name'];
        $experience->position = $attributes['position'];
        $experience->job_role = $attributes['job_role'];
        $experience->start_date = $attributes['start_date'];
        $experience->end_date = $attributes['end_date'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been added!'); // returning to experience list with add success message
    }

    public function editForm(Experience $experience)
    {
        return view('experiences.edit', [
            'experience' => $experience
        ]);
    }

    public function edit(Experience $experience) // experience edit
    {
        $attributes = request()->validate([
            'company_name' => 'required',
            'position' => 'nullable',
            'job_role' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $experience->company_name = $attributes['company_name'];
        $experience->position = $attributes['position'];
        $experience->job_role = $attributes['job_role'];
        $experience->start_date = $attributes['start_date'];
        $experience->end_date = $attributes['end_date'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been edited!'); // returning to experience list with edit success message
    }

    public function delete(Experience $experience)
    {
        $experience->delete();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been deleted!');         // returning to experience list with delete success message
    }

    public function imageForm(Experience $experience)
    {
        return view('experiences.image', [
            'experience' => $experience,
        ]);
    }

    public function image(Experience $experience)
    {
        // $attributes = request()->validate([
        //     'image' => 'required|image',
        // ]);

        Storage::delete($experience->image);

        $path = request()->file('image')->store('experiences');

        $experience->image = $path;
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'experience image has been edited!');
    }
}
