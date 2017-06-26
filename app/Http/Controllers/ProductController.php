<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use File;
use Image;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $cates = Category::all();
        return view('admin.products.add', compact('cates'));
    }

    public function store(ProductRequest $request)
    {
        $image = $request->file('fImages');
        $filename = $image->getClientOriginalName();
        $path = public_path('upload/images/' . $filename);
        Image::make($image->getRealPath())->resize(337 , 247)->save($path);

        $product = new Product();
        $product->title = $request->txtTitle;
        $product->alias = changeTitle($request->txtTitle);
        $product->image = $filename;
        $product->view = 0;
        $product->source = $request->source;
        $product->user_id = 1;
        $product->cate_id = $request->category;
        $product->save();
        $image->move('upload/images/image_details/', $filename);

        $product_id = $product->id;
        if ($request->hasFile('fImgdetails')) {
            foreach ($request->file('fImgdetails') as $file) {
                $imgdetail = new ProductImage();
                if (isset($file)) {
                    $filename = microtime().$file->getClientOriginalName();
                    $imgdetail->image = $filename;
                    $imgdetail->product_id = $product_id;
                    $file->move('upload/images/image_details/', $filename);
                    $imgdetail->save();
                }
            } 
        }

        return redirect()
                ->route('image.index')
                ->with([
                    'flash_level' => 'success',
                    'flash_message' => 'Success !! Complete Created Image'
                ]);
    }

    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        $imagedetails = Product::find($id)->images;

        return view('admin.products.edit', compact('category', 'product', 'imagedetails'));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $view = $product->view;
        $product->title = $request->txtTitle;
        $product->alias = changeTitle($request->txtTitle);
        $product->view = $view;
        $product->source = $request->source;
        $product->user_id = Auth::user()->id;
        $product->cate_id = $request->category;

        $image_current = 'upload/images/' .$product->image;
        $image_current_detail = 'upload/images/image_details/' .$product->image;
        if (!empty($request->file('fImages'))) {
            if (File::exists($image_current_detail)) {
                File::delete($image_current_detail);
            }
            $image = $request->file('fImages');
            $filename = $image->getClientOriginalName();
            $path = public_path('upload/images/' . $filename);
            Image::make($image->getRealPath())->resize(337 , 247)->save($path);
            $product->image = $filename;
            $image->move('upload/images/image_details/', $filename);
            if (File::exists($image_current)) {
                File::delete($image_current);
            } 
            
        } else {
             echo "Not Exists File !";
        }
        $product->save();

        if (!empty($request->file('fImgdetails'))) {
            foreach ($request->file('fImgdetails') as $fimgdetail) {
                $image_detail  = new ProductImage();
                if (isset($fimgdetail)) {
                    $filename = microtime().$fimgdetail->getClientOriginalName();
                    $image_detail->image = $filename;
                    $image_detail->product_id = $id;
                    $fimgdetail->move('upload/images/image_details/', $filename);
                    $image_detail->save();
                }
            }
        } else {
            echo "Not File!";
        }

        return redirect()
                ->route('image.index')
                ->with([
                    'flash_level' => 'success',
                    'flash_message' => 'Success !! Complete Updated Image !'
                ]);

    }

    public function destroy($id)
    {
        $product_imgdetails = Product::find($id)->images->toArray();
        foreach ($product_imgdetails as $imgdetail) {
            File::delete('upload/images/image_details/' .$imgdetail['image']);
        }

        $product_image = Product::find($id);
        File::delete('upload/images/' .$product_image->image);
        File::delete('upload/images/image_details/' .$product_image->image);
        $product_image->delete();

        return redirect()
                ->route('image.index')
                ->with([
                    'flash_level' => 'success',
                    'flash_message' => 'Success !! Complete Deleted Image !'
                ]);
    }

    public function delimg($id, Request $request)
    {
        if ($request->ajax()) {
            $idhinh = (int)$request->get('idHinh');
            $image_detail = ProductImage::findOrFail($idhinh);
            if (!empty($image_detail)) {
                $img = 'upload/images/image_details/'.$image_detail->image;
                if (File::exists($img)) {
                    File::delete($img);
                }
                $image_detail->delete();
            }
            return "success";
        }
    }
}
