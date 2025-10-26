<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\StoreRequest;
use App\Http\Requests\Admin\Author\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index() {


        $authors = Author::query()->orderBy('id', 'desc')->paginate(10);

        return view('admin.author.index', [
            'authors' => $authors
        ]);
    }

    public function create() {
        return view('admin.author.create');
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::put('images', $data['image']);
        }

        $author = Author::create($data);

        return redirect()->route('admin.authors.index');
    }

    public function show($id) {

    }

    public function edit(Author $author) {

        return view('admin.author.edit', compact('author'));
    }

    public function update(UpdateRequest $request, Author $author) {

        $data = $request->validated();

        if (isset($data['image'])) {
            $path = Storage::disk('public')->put('images', $data['image']);
            // Сохранение пути к изображению в базе данных
            $data['image'] = $path ?? null;
        }

        $author->update($data);

        return redirect()->route('admin.authors.index');
    }

    public function destroy(Author $author) {

        $author->delete();

        return redirect()->route('admin.authors.index')
            ->with('success', 'Автор успешно удален');
    }
}
