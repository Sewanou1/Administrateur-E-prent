<?php

namespace App\Http\Controllers\font;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Validation\Validator;
use League\CommonMark\Node\Block\Document;

class DocumentController extends Controller
{
    //
    public function upload(Request $request){
            // try{
            //     if($request->hasFile('img')){
            //         $file = $request->file('img');
            //         $file_name = time().'.' . $file->getClientOriginalName();
            //         $file->move(public_path('assets'), $file_name);
            //         return response()->json([
            //             'message'=>'Files upload successfully'
            //         ],200);
            //     }
            // }catch(\Exception $e) {
            //     return response()->json([
            //         'message'=>$e->getMessage()
            //     ]);
            // }
         /*$validator = Validator::make($request->all(),[
             'file'=>'required|mimes:pdf,PDF|max:2305',]);

         if($validator->fails()){
             return response()->json(['error'=>$validator->errors()],401);
         }
         if($file=$request->file('file')) {
             $name = $file->getClientOriginalName();
             Cloudder::upload($request->file('file'));
             $cloundary_upload = Cloudder::getResult();
             $path = $cloundary_upload['url'];
             // store your file in your directory and db
             $document = new Document();
             $document->name = $name;
             $document->url= $path;
             $document->save();
             return response()->json([
                "success"=>true,
                "message"=>"File successfully uploaded",
                "file"=> $document
             ]);

        }*/

    if($request->hasFile('file')){
        $file= $request->file('file');
        $fileName = $file->getClientOriginalName();
        // $path="storage/".$fileName;
        // $file->move($path,file_get_contents($file));
        $file->storeAs('Files',$fileName);
        return response()->json("Upload successfully.");

    }
        return response()->json("File not found");
    }
}
