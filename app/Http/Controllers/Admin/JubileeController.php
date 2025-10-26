<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jubilee\StoreRequest;
use App\Http\Requests\Admin\Jubilee\UpdateRequest;
use App\Models\Author;
use App\Models\Jubilee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JubileeController extends Controller
{
    public function index() {

        $jubilees = Jubilee::paginate(10);

        return view('admin.jubilee.index', [
            'jubilees' => $jubilees
        ]);
    }

    public function create() {

        $authors = Author::all();

        return view('admin.jubilee.create', [
            'authors' => $authors
        ]);
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::put('images', $data['image']);
        }

        $jubilee = Jubilee::create($data);

        return redirect()->route('admin.jubilees.index');
    }

    public function show($id) {

    }

    public function edit(Jubilee $jubilee) {

        $authors = Author::all();

        return view('admin.play.edit', [
            'jubilee' => $jubilee,
            'authors' => $authors
        ]);
    }

    public function update(UpdateRequest $request, Jubilee $jubilee) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::disk('public')->put('images', $data['image']);
            // Сохранение пути к изображению в базе данных
            $data['image'] = $path ?? null;
        }

        $jubilee->update($data);

        return redirect()->route('admin.jubilees.index');
    }

    public function destroy(Jubilee $jubilee) {

        $jubilee->delete();

        return redirect()->route('admin.jubilees.index')
            ->with('success', 'jubilee успешно удалена');
    }
}
