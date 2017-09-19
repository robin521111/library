<?php

namespace Library\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Library\BookModel;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
    	return view('album.index');
    }

    public function uploadPic(Request $request)
    {
    $directories = Storage::directories($directory);
    dd($directories);

    if (!$request->hasFile('photo')) {
            exit('上传文件为空！');
            // return response()->json([], 500, '无法获取上传文件');
        }
        $file = $request->file('photo');
        if(!$file->isValid()){
                exit('文件上传出错！');
            }
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            $destPath = realpath(public_path('storage'));
            // 上传文件
            $filename = date('Ymd/His');
            // 使用我们新建的uploads本地存储空间（目录）
            $path = $file->store($filename, 'storage');
            return response()->json([
                'status_code' => 200,
                'message' => 'success',
                'photo' => $path,
                'name' => $originalName,
            ]);

        } else {
            return response()->json([], 500, '文件未通过验证');
        }

   }

    
}
