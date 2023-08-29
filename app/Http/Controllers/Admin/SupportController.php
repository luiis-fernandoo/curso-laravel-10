<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Service\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {}

    public function index(Request $request){
        // Paginação de projetos pequenos:
        //$support = Support::paginate();
        $support = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 5),
            filter: $request->filter
        );

        $filters = ['filter' => $request->get('filter', '')];
        
        return view('admin/supports/index', compact('support', 'filters'));
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

        $this->service->new(CreateSupportDTO::makeFromRequest($request));
        
        return redirect()->route('supports.index');
    }

    public function edit(string $id){

        if(!$support = $this->service->findOne($id)){
            return back();
        }

        return view('admin/supports.edit', compact('support'));

    }

    public function update(StoreUpdateSupport $request, string $id){

        $supports = $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if (!$supports) {
            return back();
        }

        return redirect()->route('supports.index');
    }

    public function destroy(string $id){

        $this->service->delete($id);

        return redirect()->route('supports.index');

    }
}
