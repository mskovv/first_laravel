<?php

namespace App\Http\Controllers;

use App\Service\ImagesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    private $imagesService;
    public function __construct(ImagesService $imagesService)
    {
        $this->imagesService = $imagesService;
    }

    function index(){
        $result = $this->imagesService->all();
        return view('welcome', ['images' => $result]);
    }

    function create(){
        return view('create');
    }

    function show($id){
        $result = $this->imagesService->getOne($id);
        return view('show', ['image'=> $result->image]);
    }

    function store(Request $request){
        $image = $request->file('image');
        $this->imagesService->add($image);

        return redirect('/');
    }

    function edit($id){
        $image = $this->imagesService->getOne($id);
        return view('edit',['image' => $image]);
    }

    function update(Request $request , $id){
        $image = $request->image;
        $this->imagesService->update( $id, $image);

        return redirect('/');
    }

    function delete($id){
        $this->imagesService->delete($id);
        return redirect('/');
    }
}
