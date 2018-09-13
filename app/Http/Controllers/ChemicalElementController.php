<?php

namespace App\Http\Controllers;

use App\Element;
use App\Mineral;
use Illuminate\Http\Request;

class ChemicalElementController extends Controller
{
    public function number(Request $request)
    {
        $query = Element::query();
        $elements = $query->get();
        $number = $request->get('number_of_elements');
        return view('mineral.search', compact('elements', 'number'));
    }

    public function search(Request $request)
    {
        $query = Mineral::query();
        $minerals = $query->get();
        $numberOfElements = $request->get('numberOfElements');
        for ($i = 0; $i < $numberOfElements; $i++) {
            $search[$request->get("symbol_$i")] = $request->get("element_$i");
        }
        return view('mineral.searchResult', compact('search', 'numberOfElements', 'minerals'));
    }
}
