<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    public function index()
    {

        return view('admin.add_product');
    }

    public function store(Product $product)
    {

        $product = request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'quantity' => 'required',
            'price' => 'required',
           'images'         => 'nullable'
//            'images'=>'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);

        //       REGULAR HOSTING

        if(request()->hasFile('images')){
            $fileNameToStore = request('images')->store('product_images', 'public');

        }else{
            $fileNameToStore = 'product_images\noimages.png';
        }

       $product = new Product(request(['name', 'description','quantity','price','images']));
        $product->images = $fileNameToStore;
        $product->save();
       return back();

//        CLOUDINARY HOSTING
////        $this->validate($request,[
////            'image_name'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
////        ]);
//
//        $images = $request->file('images');
//
//        $name = $request->file('images')->getClientOriginalName();
//
//        $image_name = $request->file('images')->getRealPath();
//
//        Cloudder::upload($image_name, null);
//
//        list($width, $height) = getimagesize($image_name);
//
//        $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
//        $imageId= Cloudder::getPublicId();
//        //save to uploads directory
//        $images->move(public_path("uploads"), $name);

        //Save images
//        $this->saveImages($request, $image_url);

//        $product = new Product(request(['name', 'description','cat_id','quantity','price','images']));
//        $product->images = $request->file('images')->getClientOriginalName();
//        $product->imagesId = $imageId;
////        $product->image_url = $image_url;
//        $product->save();

//        return back();

//        return redirect()->back()->with('status', 'Image Uploaded Successfully');


    }

//    public function saveImages(Request $request, $image_url)
//    {
//        $image = new Product();
//        $image->image_name = $request->file('image_name')->getClientOriginalName();
//        $image->image_url = $image_url;
//
//        $image->save();
//    }





    public function show()
    {
        $products = Product::paginate(10);
        return view('admin.product_list', compact('products'));

    }

    public function edit(Product $product)
    {

        return view ('admin.product_edit', compact( 'product'));

    }

    public function update(Product $product,Request $request)
    {



        $products = request()->validate([
            'name'           => 'required',
            'description'    => 'nullable',
            'quantity'       => 'required',
            'price'          => 'required',
            'images'         => 'nullable'
        ]);

//        REGULAR HOSTING


        $firstImage = request('firstImage');

        if(request()->hasFile('images')){
            Storage::delete('/public/'.$firstImage);
            $fileNameToStore = request('images')->store('product_images', 'public');
        }else{
            $fileNameToStore = $firstImage;
        }
       $product->update($products);
        $product->images = $fileNameToStore;
        $product->save();

        return back();





        //CLOUDINARY

//
//
//        if(request()->hasFile('images')){
//
//            Cloudder::destroyImage($product->imagesId);
//
//
//            $images = $request->file('images');
//
//            $name = $request->file('images')->getClientOriginalName();
//
//
//            $image_name = $request->file('images')->getRealPath();
//
//            Cloudder::upload($image_name, null);
//
//            list($width, $height) = getimagesize($image_name);
//
//            $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
//            $imageId= Cloudder::getPublicId();
//            //save to uploads directory
//            $images->move(public_path("uploads"), $name);
//
//            //Save images
//
//
//            $product->update($products);
//            $product->images = $request->file('images')->getClientOriginalName();
//            $product->imagesId = $imageId;
//
//            $product->save();
//
//
//            return back();
//        }else{
//            $product->update($products);
//            $firstImage = request('firstImage');
//            $product->save();
//        }
//
//
//        return back();

    }



    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }

}
