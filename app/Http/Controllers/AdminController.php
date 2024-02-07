<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use function Pest\Laravel\get;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
      //   view("dashboard", ["menu" => $this->menu, "id" => "", 'users' => [], "role" => []]);
        //return "index"; //
        return Inertia::render('Dashboard', ["component" => "", 'users' => [], "role" => []]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function store(Request $request)
    {
        $user = User::with("role")->get();
        $product = Category::with("product")->get();
        $files = Storage::disk('public')->allFiles("images");
        $category = Category::all();
        return Inertia::render('Dashboard', ['component' => $request->component, 'files'=>$files, 'product'=>$product,'category'=>$category, 'users' => $user, 'role' => []]);
    }

    public function role(Request $request){
        if ($request->get("category") == "removeUser") {
            $userRemove = User::find($request->get("userid"));
            $userRemove->delete();
            Role::where("user_id", $request->get("userid"))->delete();

        }
        if ($request->roleUpdate == "Сохранить") {
            $role = new Role();
            $role->where("user_id", $request->userId)->update(["role" => $request->role]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with("role")->get();
        $role = Role::all();
        $category = Category::all();
        $product = Product::all();
        $files = Storage::disk('public')->allFiles();
        $productCategory = Category::with("product")->get();
        $newArr = [];
        $newArrCat = [];
        foreach ($product as $key => $val) {
            $newArr[$key] = $val->category_id;
        }

        foreach ($category as $key => $v) {
            $newArrCat[$key] = $v->id;
        }
        $idNoCategory = array_diff($newArr, $newArrCat);

        //return view("dashboard", ["files" => $files, "menu" => $this->menu, "id" => $id, "users" => $user, "role" => $role, "category" => $category, "product" => $product, "productCategory" => $productCategory, "idNoCategory" => $idNoCategory]);
       return "show"; //Inertia::render('Dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name, $id)
    {
        $category = Category::all();
        $categoryId = Product::find($id)->category()->first();
        $product = Product::find($id);
        $files = Storage::disk('public')->allFiles();
       // return view("editproduct", ["files" => $files, "menu" => $this->menu, "category" => $category, "product" => $product, "categoryId" => $categoryId]);
        return "edit"; //Inertia::render('Dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function editProduct(Request $request)
    {
        function params($product,$request){
            $product->name = empty($request->name)?"":$request->name ;
            $product->alias = empty($request->alias)?"":$request->alias;
            $product->image = empty($request->image)?"":$request->image;
            $product->title = empty($request->title)?"":$request->title;
            $product->description = empty($request->description)?"":$request->description;
            $product->title_meta = empty($request->title_meta)?"":$request->title_meta;
            $product->description_meta = empty($request->description_meta)?"":$request->description_meta;
            $product->keywords = empty($request->keywords)?"":$request->keywords;
            $product->price = empty($request->price)?"0":$request->price;
            $product->discount = empty($request->discount)?"0":$request->discount;
            $product->storage_time = empty($request->storage_time)?"":$request->storage_time;
            $product->color = empty($request->color)?"":$request->color;
            $product->flavor = empty($request->flavor)?"":$request->flavor;
            $product->sort = empty($request->sort)?"":$request->sort;
            $product->volume = empty($request->volume)?"":$request->volume;
            $product->category_id = empty($request->category_id)?"0":$request->category_id;
            $product->save();
        }


        if ($request->button == "update-product" && !empty($request->id)) {
            $product = Product::find($request->id);
            params($product,$request);
        }

        if ($request->button == "add-product") {
            $product = new Product;
            params($product,$request);
        }

        if ($request->button == "del-product") {
            $product = Product::find($request->id);
            $product->delete();
        }
/*

        if ($request->file("file-product")) {
            return $this->loadImage($request, "/dashboard/edit/" . $request->input("file-save"));
        }


        return redirect("/dashboard/edit/" . $request->input("file-save"));
*/

    }

    private function loadImage($request, $url, $name = "file-product")
    {
        if ($request->file($name)) {
            $path = $request->file($name)->store("images", "public");
            $path = preg_replace('/^images\//', "", $path);
            return redirect($url . "?image=" . $path);
        }
    }

    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->sub_name = $request->subName;
        $category->image = $request->image;
        $category->save();
        return [$category->id, $category->name, $category->sub_name];
    }

    public function updateCategory(Request $request)
    {

        function params($category,$request){
            $category->name = empty($request->name)?"":$request->name;
            $category->sub_name = empty($request->sub_name)?"":$request->sub_name;
            $category->image = empty($request->image)?"":$request->image;
            $category->save();
        }
        if($request->button == "edit-category" && !empty($request->id)){
            $category = Category::find($request->id);
            params($category,$request);
        }
        if($request->button == "add-category"){
            $category = new Category;
            params($category,$request);
        }
        if($request->button == "del-category" && !empty($request->id)){
            $category = Category::find($request->id);
            $category->delete();
            $category->product()->delete();
        }



    }

    public function deleteFile(Request $request){
        if($request->name){
            Storage::disk('public')->delete($request->name);
        }
    }

    public function loadingFile(Request $request){
            return $this->loadImage($request, "/dashboard/gallery/" . $request->input("file-save-gallery"),"file-gallery");
    }



    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
