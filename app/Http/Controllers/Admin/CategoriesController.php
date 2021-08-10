<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
   public $result = [];
   // public $request;

   // public function __construct(Request $rt)
   // {
   //    $this->request=$rt;
   //    return "hi";
   // }
  
   
   public function getCategories($id = null)
   {
      
      try {
         if (isset($id)) {

            $db = DB::select('select * from product_categories where id = ?', [$id]);
            $result=["status"=>"success","data"=>$db];
         } else {
            $db = DB::select('select * from product_categories where 1');
            $result=["status"=>"success","data"=>$db];
         }

         return response()->json($result);
      } catch (\Throwable $th) {
         return $th->getMessage();
      }
   }
   
   public function addCategories(Request $request,$id =null)
   {
      
      try {
         $data = [
            "categories"=>$request->input('name'),
         ];
       
         //update data
         if (isset($id)) {
            // $db =DB::select("UPDATE `product_categories` SET `name`= ? WHERE id = ?",[$request->input('name'),$id]);
            $db = Db::table('product_categories')->where('id', $id)->update(['categories' => $request->input('name')]);
            $result=["status"=>"successfully update","sqlQuery"=>$db];
         } else {
            $db = DB::table('product_categories')->insert($data);
            $result=["success"=>"successfully update","sqlQuery"=>$db];
         }
         
         return response()->json($result);
      } catch (\Throwable $th) {
         
         return $th->getMessage();
      }

   }
   
    public function getSubCategories($id = null)
   {
      try {
         if (isset($id)) {

            $db = DB::select('select * from sub_categories_01 where pd_categories_id = ?', [$id]);
            $result=["status"=>"success","data"=>$db];
         } else {
            $db = DB::select('select * from sub_categories_01 where 1');
            $result=["status"=>"success","data"=>$db];
         }
        
         return response()->json($result);
      } catch (\Throwable $th) {
         return $th->getMessage();
      }
   }
   
   public function addSubCategories(Request $request, $id=null)
   {
      try {
         $data = [
           'sub_categories_name'=>$request->input('name'),
           'pd_categories_id'=>$request->input('categories_id'),
         ];

         //update data
         if (isset($id)) {
            // $db =DB::select("UPDATE `product_categories` SET `name`= ? WHERE id = ?",[$request->input('name'),$id]);
            $db = Db::table('sub_categories_01')->where('id', $id)->update(['name' => $request->input('name')]);
            $result=["success"=>"successfully update","sqlQuery"=>$db];
         } else {
            $db = DB::table('sub_categories_01')->insert($data);
            $result=["success"=>"successfully update","sqlQuery"=>$db];
           
         }

         return response()->json($result);
      } catch (\Throwable $th) {
         
         return $th->getMessage();
      }

   }
   /* public function getSubcategories($id = null)
   {
      try {
         if (isset($id)) {
            $db = DB::table('product_subcategories')->where('id', $id)->get();
         } else {
            $db = DB::table('product_subcategories')->get();
         }
         $result = ["status" => "success", "data" => $db];
         return response()->json($result);
      } catch (\Throwable $th) {
         return $th->getMessage();
      }
   }
   public function addElectronicsCategories(Request $request, $id = null)
   {
      try {
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
         } else {
            $result = ["image" => "please upload file"];
         }


         $data = [
            'subcategories' => $request->input('subcategories'),
            'image' => $image_name,
            'categories_id' => 1
         ];
         if (isset($id)) {
            $db = DB::table('product_subcategories')->where('id', $id)->update($data);
            $result = ["status" => 'successfully update data'];
         } else {
            $db = DB::table('product_subcategories')->insert($data);
            $result = ["status" => 'successfully insert data'];
         }
         $image->storeAs('/public/subcategory', $image_name);
         return response()->json($result);
      } catch (\Throwable $th) {
         return $th->getMessage();
      }
   } */
}
