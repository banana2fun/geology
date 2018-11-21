<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMineralRequest;
use App\Mineral;
use App\MineralClass;
use Illuminate\Http\Request;

class MineralController extends Controller
{
    public function index(Request $request)
    {
        $query = Mineral::query();
        $mineralClasses = MineralClass::query()->get();
        $currentMineralClass = $request->get('filterMinClass');
        $searchName = $request->get('searchName');
        if ($searchName) {
            $query->where('ru_name', 'like', $searchName . '%');
        }
        if ($currentMineralClass) {
            $query->where('min_class_id', $currentMineralClass);
        }
        $minerals = $query->paginate(20);
        return view('mineral.list', compact('minerals', 'mineralClasses', 'currentMineralClass', 'searchName'));
    }

    public function create(Request $request)
    {
        $mineralClasses = MineralClass::query()->get();
        $currentMineralClass = $request->get('min_class_id');
        return view('mineral.form', compact('minerals', 'mineralClasses', 'currentMineralClass'), ['mineral' => Mineral::make()]);
    }

    public function store(AddMineralRequest $request)
    {
        $validated = $request->validated();
        $mineral = Mineral::create($validated);
        return redirect(route('mineral.show', $mineral));
    }

    public function show(Mineral $mineral)
    {
        return view('mineral.view', compact('mineral'));
    }

    public function edit(Mineral $mineral, Request $request)
    {
        $mineralClasses = MineralClass::query()->get();
        $currentMineralClass = $request->get('min_class_id');
        return view('mineral.form', compact('mineral', 'mineralClasses', 'currentMineralClass'));
    }

    public function update(AddMineralRequest $request, Mineral $mineral)
    {
        $data = $request->validated();
        $mineral->fill($data)->saveOrFail();
        return redirect(route('mineral.show', $mineral));
    }

    public function destroy(Mineral $mineral)
    {
        $mineral->delete();
        return back();
    }
}
