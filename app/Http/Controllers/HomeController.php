<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function showHome(Request $request) {
        $repos = DB::select('SELECT * FROM github_repos');

        $sorted = array();
        $categories = array();
        foreach($repos as $repo) {
            $repo = json_decode(json_encode($repo), true);
            $category = $repo['category'];

            if (!isset($sorted[$category])) {
                $sorted[$category] = array();
            }

            if (!isset($categories[$category])) {
                switch ($category) {
                    case 0:
                        $title = 'Utilities';
                        break;
                    default:
                        $title = 'TITLE NOT FOUND';
                        
                }
                $categories[$category] = $title;
            }

            $trimmed = array(
                'name' => $repo['name'],
                'updated' => $repo['last_updated'],
            );

            $sorted[$category][] = $trimmed;
        }

        return view('home', [
            'repos' => $sorted,
            'categories' => $categories,
        ]);
    }
}
