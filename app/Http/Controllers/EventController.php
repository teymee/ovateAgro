<?php

namespace App\Http\Controllers;

use App\Article;
use App\Event;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{


    public function index()
    {

        $event = Event::latest()->paginate(10);
        return view('admin.admin_event_list', [
            'events' => $event
        ]);
    }

    public function create(Event $event)
    {

        return view('admin.add_event');

    }

    public function store(Event $event)
    {

        $requestValidation = request()->validate([
            'name' => 'required',
            'body' => 'required',
            'Agro_Person' => 'required',
            'date' => 'required',
            'images' => 'nullable'
        ]);

        if (request()->hasFile('images')) {
            $images = request('images')->store('event_images', 'public');
        } else {
            $images = 'noimages.png';
        }

        $event = Event::create($requestValidation);
        $event->images = $images;
        $event->save();
        return redirect('/events');
    }

    public function show(Event $event)
    {

        $articles = Article::all();
        $tags = Tag::all();
        $randomArticle = Article::inRandomOrder()->take(3)->get();

        return view('event_show', [
            'events' => $event,
            'article' => $articles,
            'tags' => $tags,
            'randomArticles' => $randomArticle

        ]);
    }

    public function edit(Event $event)
    {

        return view('admin.event_edit', [

            'event' => $event
        ]);
    }

    public function update(Event $event)
    {

        if (request()->hasFile('images')) {
            $firstImage = $event->images;
            if ($firstImage) {
                Storage::delete('/public/' . $firstImage);
            }
            $image = request('images')->store('event_images', 'public');
            $event->images = $image;

        }

        $validateRequest = request()->validate([
            'name' => 'required',
            'date' => 'required',
            'body' => 'required',

        ]);


        $event->update($validateRequest);


        return redirect('/events');

    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }

}
