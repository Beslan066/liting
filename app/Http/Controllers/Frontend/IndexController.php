<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Jubilee;
use App\Models\Play;
use App\Models\Poesy;
use App\Models\Prose;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $proses = Prose::query()->orderBy('created_at', 'desc')->take(4)->get();
        $plays = Play::query()->orderBy('created_at', 'desc')->take(4)->get();
        $jubilees = Jubilee::query()->orderBy('created_at', 'desc')->take(4)->get();
        $poesies = Poesy::query()->orderBy('created_at', 'desc')->take(6)->get();
        $authors = Author::query()->orderBy('created_at', 'desc')->get();

        return view('frontend.index',[
            'proses' => $proses,
            'poesies' => $poesies,
            'authors' => $authors,
            'plays' => $plays,
            'jubilees' => $jubilees,
            ]);
    }


    public function poesy()
    {

        $poesies = Poesy::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.poesy.index', [
            'poesies' => $poesies,
        ]);
    }

    public function poesySingle(Poesy $poesy) {

        return view('frontend.poesy.single', [
            'poesy' => $poesy,
        ]);
    }

    public function prose()
    {
        $proses = Prose::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.prose.index', [
            'proses' => $proses,
        ]);
    }

    public function proseSingle(Prose $prose) {

        return view('frontend.prose.single',[
            'prose' => $prose,
        ]);
    }

    public function plays()
    {

        $plays = Play::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.play.index', [
            'plays' => $plays,
        ]);
    }

    public function playSingle(Play $play) {

        return view('frontend.play.single', [
            'play' => $play,
        ]);
    }

    public function jubilees()
    {

        $jubilees = Jubilee::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.jubilee.index', [
            'jubilees' => $jubilees,
        ]);
    }

    public function jubileeSingle(Jubilee $jubilee) {

        return view('frontend.jubilee.single', [
            'jubilee' => $jubilee,
        ]);
    }

    public function authors()
    {
        $authors = Author::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.author.index', [
            'authors' => $authors,
        ]);
    }

    public function authorSingle(Author $author)
    {

        $author->load([
            'proses',
            'poesies',
            'plays',
            'jubilees'
        ]);

        return view('frontend.author.single', [
            'author' => $author,
        ]);
    }


    public function archive() {

        return view('frontend.archive');
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
