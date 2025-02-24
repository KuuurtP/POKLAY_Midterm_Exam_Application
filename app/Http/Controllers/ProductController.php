<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = collect([
            [
                'title'    => 'The Batman',
                'year'     => 2022,
                'director' => 'Matt Reeves',
            ],
            [
                'title'    => 'No Time to Die',
                'year'     => 2021,
                'director' => 'Cary Joji Fukunaga',
            ],
            [
                'title'    => 'Tenet',
                'year'     => 2020,
                'director' => 'Christopher Nolan',
            ],
            [
                'title'    => 'The Invisible Man',
                'year'     => 2020,
                'director' => 'Leigh Whannell',
            ],
            [
                'title'    => 'Oppenheimer',
                'year'     => 2023,
                'director' => 'Christopher Nolan',
            ],
            [
                'title'    => 'Dune',
                'year'     => 2021,
                'director' => 'Denis Villeneuve',
            ],
            [
                'title'    => 'Barbie',
                'year'     => 2023,
                'director' => 'Greta Gerwig',
            ],
            [
                'title'    => 'Spider-Man: Across the Spider-Verse',
                'year'     => 2023,
                'director' => 'Joaquim Dos Santos',
            ],
            [
                'title'    => 'Top Gun: Maverick',
                'year'     => 2022,
                'director' => 'Joseph Kosinski',
            ],
            [
                'title'    => 'The Batman 2',
                'year'     => 2025,
                'director' => 'Matt Reeves',
            ],
        ]);

        return view('movies.index', ['movies' => $movies]);
    }
}
