<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

use App\Models\News;

class NewsController extends Controller
{
    //
    const COUNT_DASH = 10;

    public function dashboard()
    {
        return view('news.dashboard',['news' => News::latest()->simplePaginate(self::COUNT_DASH)]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (empty($data['image'])) {
            $filename="";
        } else {
            $filename    = uniqid();

            //Сохраняем оригинальную картинку
            $data['image']->move("storage/posts/", $filename);

            //Создаем миниатюру изображения и сохраняем ее
            $thumbnail = Image::make("storage/posts/".$filename);
            $thumbnail->fit(100, 100);
            $thumbnail->save("storage/posts/th_".$filename);

            $resize = Image::make("storage/posts/".$filename)->widen(800);
            $resize->save("storage/posts/".$filename);



        }
        //Сохраняем новость в БД
        $data['image'] = $filename;
        News::create($data);

        return to_route('news.dashboard');
    }

    public function edit(Request $request, $id)
    {
        if (empty($id)) return to_route('news.dashboard');

        return view('news.edit', ['data' => News::find($id)]);

    }

    public function update(Request $request)
    {

        $data = $request->all();
        $filename = isset($data['image_del']) ? $data['image_del'] : "";
        if (!empty($data['image'])) {
            
            if (isset($data['image_del'])) {
                File::delete('storage/posts/'.$data['image_del']);
                File::delete('storage/posts/th_'.$data['image_del']);
            }

            $filename    = uniqid();

            //Сохраняем оригинальную картинку
            $data['image']->move('storage/posts/',$filename);

            //Создаем миниатюру изображения и сохраняем ее
            $thumbnail = Image::make('storage/posts/'.$filename);
            $thumbnail->fit(100, 100);
            $thumbnail->save('storage/posts/th_'.$filename);

            $resize = Image::make('storage/posts/'.$filename)->widen(800);
            $resize->save('storage/posts/'.$filename);
        }



        $data['image'] = $filename;

        News::find($request->id)->update($data);

        return to_route('news.dashboard');

    }

    public function delete(Request $request, $id)
    {
        if (empty($id)) return to_route('news.dashboard');

        $data =News::find($id);
        return view('news.delete', ['data' => $data]);

    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $filename = isset($data['image_del'])? $data['image_del'] : "";
        if (!empty($filename)) {
           $path_file = 'storage/posts/'.$filename;
           File::delete($path_file);
           $path_file = 'storage/posts/th_'.$filename;
           File::delete($path_file);
        }

        News::find($data['id'])->delete();

        return to_route('news.dashboard');        
    }


}
