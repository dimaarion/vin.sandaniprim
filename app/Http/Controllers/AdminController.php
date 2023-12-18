<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Pest\Laravel\get;

class AdminController extends Controller
{
    private $menu = [
        [
            'category' => ['icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
</svg>',
                'text' => "Пользователи", 'item' => [
                    [
                        'url' => "/profile",
                        'name' => "Мой профиль"
                    ],
                    [
                        'url' => "/dashboard/surliest",
                        'name' => "Список пользователей"
                    ]
                ]
            ],

        ],
        [
            'category' => ['icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg>', 'text' => "Продукты", 'item' => [
                [
                    'url' => "/dashboard/addproduct",
                    'name' => "Добавить продукцию"
                ],
                [
                    'url' => "/dashboard/product",
                    'name' => "Продукция"
                ]
            ]
            ],

        ],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard", ["menu" => $this->menu, "id" => "", 'users' => [], "role" => []]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get("category") == "removeUser") {
            $userRemove = User::find($request->get("userid"));
            $userRemove->delete();
            Role::where("user_id", $request->get("userid"))->delete();

        }
        if ($request->get("category") == "roleUser") {
            $role = new Role();
            $role->where("user_id", $request->get("roleId"))->update(["role" => $request->get("role")]);
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

        return view("dashboard", ["files"=>$files, "menu" => $this->menu, "id" => $id, "users" => $user, "role" => $role, "category" => $category, "product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name,$id)
    {
        $category = Category::all();
        $categoryId = Product::find($id)->category()->first();
        $product = Product::find($id);
        $files = Storage::disk('public')->allFiles();
        return view("editproduct",["files"=>$files, "menu" => $this->menu, "category" => $category, "product"=>$product, "categoryId"=>$categoryId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        if ($request->button == "add-product-save") {
            $product = new Product;
            $product->name = $request->nameProduct;
            $product->image = $request->image;
            $product->title = $request->titleProduct;
            $product->description = $request->descriptionProduct;
            $product->title_meta = $request->titlePageProduct;
            $product->description_meta = $request->descriptionPageProduct;
            $product->keywords = $request->keyWordProduct;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->category_id = $request->categoryId;
            $product->save();
            return  $request;
        }else if($request->file("file-product")){
           return $this->loadImage($request, "/dashboard/addproduct");
        }else{
            return redirect("/dashboard/addproduct");
        }
    }

    public function editProduct(Request $request){
        if ($request->editProductSave == "edit-product-save") {
           $product = Product::find($request->productId);
            $product->name = $request->editNameProduct;
            $product->image = $request->image;
            $product->title = $request->editTitleProduct;
            $product->description = $request->editDescriptionProduct;
            $product->title_meta = $request->editTitlePageProduct;
            $product->description_meta = $request->editDescriptionPageProduct;
            $product->keywords = $request->editKeywordProduct;
            $product->price = $request->editPriceProduct;
            $product->discount = $request->editDiscountProduct;
            $product->category_id = $request->categoryId;
            $product->save();
            $category = Category::find($request->categoryId);
            $category->name = $request->category;
            $category->sub_name = $request->subCategory;
            $category->save();
            return  $request;
        }
        if($request->delCategory){
            $category = Category::find($request->id);
            $category->delete();
        }
        if($request->deleteProduct){
            $product = Product::find($request->id);
            $product->delete();
        }
        if($request->file("file-product")){
            return $this->loadImage($request, "/dashboard/edit/".$request->input("file-save"));
        }
        return redirect("/dashboard/edit/".$request->input("file-save"));
    }

    private function loadImage($request, $url){
        $path =  $request->file("file-product")->store("images","public");
        $path = preg_replace('/^images\//',"",$path);
        return redirect($url."?image=".$path);
    }

    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->sub_name = $request->subName;
        $category->save();
        return $request;
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
