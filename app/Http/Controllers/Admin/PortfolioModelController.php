<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PortfolioModel;
use App\Http\Requests\StorePortfolioModelRequest;
use App\Http\Requests\UpdatePortfolioModelRequest;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Types;
use App\Models\Technology;


class PortfolioModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = PortfolioModel::all();
        return view('admin.works.index', compact('sites'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
        $site = PortfolioModel::findOrFail($id);
        
        return view('admin.works.show', compact('site'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Types::all();
        $technologies=Technology::all();
        return view('admin.works.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioModelRequest $request)
    {
        $form_data= $request->all();

        $site= new PortfolioModel();
        
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);

            $form_data['image']=$path;
        }


        $site->fill($form_data);
        
        $site->save();
        if($request->has('technologies')){
            $site->technologies()->sync($request->technologies);
        }
        return redirect()->route('admin.works.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site =PortfolioModel::findOrFail($id);
        $types=Types::all();
        $technologies=Technology::all();
       return view('admin.works.edit', compact('site', 'types','technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioModelRequest  $request
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioModelRequest $request, $id)
    {   
        $site = PortfolioModel::findOrFail($id);
        $form_data = $request->all();
        

    //    //OTTENGO LA CATEGORIA SELEZIONATA <--------------------------------------------------------QUI!!
    //     $selectedCategories = $request->input('categories', []);
    //     //SALVO IL DATO
    //     $site->type->update($selectedCategories);
        
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);
           
            $form_data['image']=$path;
        }

        if($request->has('technologies')){
            $site->technologies()->sync($request->technologies);
        }
        
        $site->update($form_data);
        
        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $site = PortfolioModel::findOrFail($id);
        $site->technologies()->detach();
        $site->delete();
        return redirect()->route('admin.works.index');
    }
}
