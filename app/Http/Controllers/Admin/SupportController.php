<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {}

    public function index(Request $request){

        $support = $this->service->getAll($request->filter);

        return view('admin/supports/index', compact('support'));
    }

    public function show(string $id){

       if(!$supports = $this->service->findOne($id)){
            return back();
       }

       return view('admin/supports/show', compact('supports'));
    }

    public function create(){

        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support){

        $data = $request->validated ();
        $data['status'] = 'a';

        $support->create($data);
        
        return redirect()->route('supports.index');
    }

    public function edit(string $id){

        if(!$support = $this->service->findOne($id)){
            return back();
        }

        return view('admin/supports.edit', compact('support'));

    }

    public function update(StoreUpdateSupport $request, string $id){

        if (!$supports = Support::find($id)) {
            return back();
        }

        $supports->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function destroy(string $id){

        $this->service->delete($id);

        return redirect()->route('supports.index');

    }
}
