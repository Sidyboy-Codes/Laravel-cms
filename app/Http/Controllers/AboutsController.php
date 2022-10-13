<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    //

    public function list()
    {
        return view('abouts.list', [
            'abouts' => About::all() // returning about view list
        ]);
    }

    public function addForm()
    {
        return view('abouts.add'); // returning  add form
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'tagline' => 'required',    // tagline an ddescription both required
            'description' => 'required'
        ]);

        $about = new About();
        $about->tagline = $attributes['tagline'];
        $about->description = $attributes['description'];
        $about->save();

        return redirect('/console/abouts/list')
            ->with('message', 'About has been added!');
    }

    public function editForm(About $about)
    {
        return view('abouts.edit', [ // returning about edit view
            'about' => $about
        ]);
    }

    public function edit(About $about)
    {

        $attributes = request()->validate([
            'tagline' => 'required',
            'description' => 'required'
        ]);

        $about->tagline = $attributes['tagline'];
        $about->description = $attributes['description'];
        $about->save();

        return redirect('/console/abouts/list')
            ->with('message', 'About has been edited!');
    }

    public function delete(About $about)
    {
        $about->delete();
        
        return redirect('/console/abouts/list')
            ->with('message', 'About has been deleted!');        // returning to about main list page with success message
    }

    public function imageForm(About $about)
    {
        return view('abouts.image', [
            'about' => $about,
        ]);
    }

    // about image handling
    public function image(About $about)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($about->image); 
        
        $path = request()->file('image')->store('abouts');

        $about->image = $path;
        $about->save();
        
        return redirect('/console/abouts/list')
            ->with('message', 'About image has been edited!');
    }
}
