<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Undefined;
use App\Models\Event;

class HomeControler extends Controller
{
    public function index() {

        $events = Event::all();

        return view('home', ['events'=> $events]);
        
    }

    public function create(){
        return view('events.create');
    }

    public function store(request $request){

        $event = new Event;

        $event -> title = $request -> title;
        $event -> city = $request -> city;
        $event -> private = $request -> private;
        $event -> description = $request -> description;

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');
    }
}
