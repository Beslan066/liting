<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Play\StoreRequest;
use App\Http\Requests\Admin\Play\UpdateRequest;
use App\Models\Author;
use App\Models\Play;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayController extends Controller
{
    public function index() {

        $plays = Play::paginate(10);

        return view('admin.play.index', [
            'plays' => $plays
        ]);
    }

    public function create() {

        $authors = Author::all();


        return view('admin.play.create', [
            'authors' => $authors
        ]);
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::put('images', $data['image']);
        }

        $play = Play::create($data);

        return redirect()->route('admin.play.index');
    }

    public function show($id) {

    }

    public function edit(Play $play) {

        $authors = Author::all();

        return view('admin.play.edit', [
            'play' => $play,
            'authors' => $authors
        ]);
    }

    public function update(UpdateRequest $request, Play $play) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::disk('public')->put('images', $data['image']);
            // Сохранение пути к изображению в базе данных
            $data['image'] = $path ?? null;
        }

        $play->update($data);

        return redirect()->route('admin.play.index');
    }

    public function destroy(Play $play) {

        $play->delete();

        return redirect()->route('admin.play.index')
            ->with('success', 'Пьеса успешно удалена');
    }
}
