<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolists;

class toDoListController extends Controller
{
    public function index ()
    {
        $toDoLists = todolists::all()->groupBy('title');

        return view('todo', [
            'toDoLists' => $toDoLists
        ]);
    }

    public function store (Request $request)
    {
        $toDoList = new todolists();

        $toDoList->title = $request->title;
        
        $toDoList->save();
        return redirect('/todo');
    }

    public function store_item ($title, Request $request)
    {
        $toDoList = new todolists();

        $toDoList->title = $request->title;
        $toDoList->item = $request->new_item;

        $toDoList->save();
        return redirect('/todo');
    }

    public function done ($id)
    {
        $toDoList = todolists::findOrFail($id);

        $toDoList->done = 1;
        $toDoList->update();

        return redirect('/todo');
    }

    public function unDone ($id)
    {
        $toDoList = todolists::findOrFail($id);

        $toDoList->done = null;
        $toDoList->update();

        return redirect('/todo');
    }

    public function update ($title, Request $request)
    {
        $toDoList = new todolists();

        $ids = $toDoList->where('title', '=', $title)->get('id')->toArray();
        
        foreach ($ids as $id) {
            $toDoLists = $toDoList->findOrFail($id['id']);
    
            $toDoLists->title = $request->edit_title;
            $toDoLists->update();
        }

        return redirect('/todo');
    }

    public function destroy ($id)
    {
        $toDoList = todolists::findOrFail($id);

        $toDoList->delete();
        return redirect('/todo');
    }

    public function destroy_list ($title)
    {

        $toDoList = new todolists();

        $ids = $toDoList->where('title', '=', $title)->get('id')->toArray();
        
        foreach ($ids as $id) {
            $toDoLists = $toDoList->findOrFail($id['id']);
    
            $toDoLists->delete();
        }

        return redirect('/todo');
    }

    public function config (Request $request)
    {
        $toDoList = new todolists();

        $ids = $toDoList->get('id')->toArray();
        
        foreach ($ids as $id) {
            $toDoLists = $toDoList->findOrFail($id['id']);

            $toDoLists->timezone = $request->timezone;
            
            $toDoLists->update();
        }
        
        return redirect('/todo');
    }
}
