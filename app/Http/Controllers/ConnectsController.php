<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connect;
use Illuminate\Support\Facades\Storage;

class ConnectsController extends Controller
{
    // listing all the Connect
    public function list()
    {
        return view('connects.list', [
            'connects' => Connect::all(),
        ]);
    }

    public function addForm()
    {
        return view('connects.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'link' => 'nullable',
            'title' => 'nullable'
        ]);

        $connect = new Connect();
        $connect->link = $attributes['link'];
        $connect->title = $attributes['title'];
        $connect->save();

        return redirect('/console/connects/list')
            ->with('message', 'Connect has been added!');
    }

    public function editForm(Connect $connect ){
        return view('connects.edit', [
            'connect'=>$connect
        ]);
    }

    public function edit(Connect $connect)
    {
        $attributes = request()->validate([
            'link' => 'nullable',
            'title' => 'nullable'
        ]);


        $connect->link = $attributes['link'];
        $connect->title = $attributes['title'];
        $connect->save();

        return redirect('/console/connects/list')
            ->with('message', 'Connect has been updated!');
    }

    public function delete(Connect $connect){
        $connect->delete();

        return redirect('/console/connects/list')
            ->with('message', 'Connect has been deleted!');

    }
    public function imageForm(Connect $connect){
        return view('connects.image',[
            'connect'=>$connect
        ]);
    }

    public function image(Connect $connect){
        $attributes = request()->validate([
            'image' => 'nullable|image',
        ]);

        Storage::delete($connect->image);
        
        $path = request()->file('image')->store('connects');

        $connect->image = $path;
        $connect->save();
        
        return redirect('/console/connects/list')
            ->with('message', 'Connect image has been edited!');
    }
}   
