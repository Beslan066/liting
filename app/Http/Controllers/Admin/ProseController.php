<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Prose\StoreRequest;
use App\Http\Requests\Admin\Prose\UpdateRequest;
use App\Models\Author;
use App\Models\Prose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProseController extends Controller
{
    public function index() {

        $proses = Prose::paginate(10);

        return view('admin.prose.index', [
            'proses' => $proses
        ]);
    }

    public function create() {

        $authors = Author::all();

        return view('admin.prose.create', [
            'authors' => $authors
        ]);
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::put('images', $data['image']);
        }

        $prose = Prose::create($data);

        return redirect()->route('admin.proses.index');
    }

    public function show($id) {

    }

    public function edit(Prose $prose) {

        $authors = Author::all();

        return view('admin.prose.edit', [
            'prose' => $prose,
            'authors' => $authors
        ]);
    }

    public function update(UpdateRequest $request, Prose $prose) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::disk('public')->put('images', $data['image']);
            // Сохранение пути к изображению в базе данных
            $data['image'] = $path ?? null;
        }

        $prose->update($data);

        return redirect()->route('admin.proses.index');
    }

    public function destroy(Prose $prose) {

        $prose->delete();

        return redirect()->route('admin.proses.index')
            ->with('success', 'Проза успешно удалена');
    }
}
