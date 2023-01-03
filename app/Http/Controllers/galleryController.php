<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Instagram,Image,DB;
use Illuminate\Support\Facades\View;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->galleryModel = new Gallery();
    }
    
    public function index()
    {

        $response = Instagram::users()->getMedia('self');
        $instagrams = $response->get();
        $images = $this->galleryModel->where('status',1)->orderBy('id_gallery','DESC')->get();
        // return response()->json(['data' => $images]);
        return view('public_page.front.gallery')
                ->with('instagrams', $instagrams)
                ->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('public_page.front.galleryAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postUploadGallery(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['error' => true],404);
        }
        $image = $request->file('file');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $iconPath = public_path('images/gallery/icon/' . $filename);
        $fullPath = public_path('images/gallery/fullsize/' . $filename);
        $transaction = DB::transaction(function() use ($image,$filename,$iconPath,$fullPath,$request){
            // Icono
            $saveImageIcon = Image::make($image->getRealPath())->resize(350, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($iconPath);
            // Fullsize
            $saveImageFull = Image::make($image->getRealPath())->save($fullPath);
            if ($saveImageIcon && $saveImageFull) {
                $itemImageBdd = $this->galleryModel;
                $itemImageBdd->nombre = $request->name;
                $itemImageBdd->descripcion = $request->descripcion;
                $itemImageBdd->url = $filename;
                $itemImageBdd->tags = $request->tags;
                $itemImageBdd->url_redirect = $request->url_redirect;
                $itemImageBdd->status = 1;
                $saveItem = $itemImageBdd->save();
            }else{
                $saveItem = false;
            }
            
            return $saveItem;
        });
        
        return response()->json(['error' => $transaction]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        $images = $this->galleryModel->where('status',1)->orderBy('id_gallery','DESC')->get();
        $view = View::make('public_page.partials.imagesGallery', array('images'=> $images));
        if ($request->ajax()) {
            $sections = $view->rendersections();
            return response()->json($sections);
        }else{
            return $view;
        }  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (!$request->has('id_gallery')) {
            return response()->json(['error' => true]);
        }
        $item = $this->galleryModel->find($request->id_gallery);
        $item->status = 0;
        $item->save();
        return response()->json(['error' => false]);
    }
}
