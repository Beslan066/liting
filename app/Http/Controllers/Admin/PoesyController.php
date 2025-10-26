<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Poesy\StoreRequest;
use App\Http\Requests\Admin\Poesy\UpdateRequest;
use App\Models\Author;
use App\Models\Poesy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoesyController extends Controller
{
    public function index() {

        $poesies = Poesy::paginate(10);

        return view('admin.poesy.index', [
            'poesies' => $poesies
        ]);
    }

    public function create() {

        $authors = Author::all();

        return view('admin.poesy.create', [
            'authors' => $authors
        ]);
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::put('images', $data['image']);
        }

        $poesy = Poesy::create($data);

        return redirect()->route('admin.poesies.index');
    }

    public function show($id) {

    }

    public function edit(Poesy $poesy) {

        $authors = Author::all();

        return view('admin.poesy.edit', [
            'poesy' => $poesy,
            'authors' => $authors
        ]);
    }

    public function update(UpdateRequest $request, Poesy $poesy) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::disk('public')->put('images', $data['image']);
            // Сохранение пути к изображению в базе данных
            $data['image'] = $path ?? null;
        }

        $poesy->update($data);

        return redirect()->route('admin.poesies.index');
    }

    public function destroy(Poesy $poesy) {

        $poesy->delete();

        return redirect()->route('admin.poesies.index')
            ->with('success', 'Автор успешно удален');
    }
}
