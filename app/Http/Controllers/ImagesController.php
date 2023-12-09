<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

use App\Models\Images;

class ImagesController extends Controller
{
    //
    const COUNT_INDEX = 20;
    const COUNT_DASH = 10;

    public function welcome()
    {
        return view('welcome.photo', ['photos' => Images::latest()->simplePaginate(self::COUNT_INDEX)]);
    }

    public function dashboard()
    {
        return view('images.dashboard',['images' => Images::latest()->simplePaginate(self::COUNT_DASH)]);
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        if (empty($data['image'])) return to_route('images.dashboard');

        if (empty($data['name'])) $data['name'] = '';
        $filename    = uniqid();

        //Сохраняем оригинальную картинку
        $data['image']->move("storage/images/", $filename);
        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make("storage/images/".$filename);
        $thumbnail->fit(200);
        $thumbnail->save("storage/images/th_".$filename);
        $resize = Image::make("storage/images/".$filename)->widen(800);
        $resize->save("storage/images/".$filename);

        //Сохраняем картинку в БД
        $data['image'] = $filename;
        Images::create($data);

        return to_route('images.dashboard');
    }

    public function edit(Request $request, $id)
    {
        if (empty($id)) return to_route('images.dashboard');

        return view('images.edit', ['data' => Images::find($id)]);

    }

    public function update(Request $request)
    {

        $data = $request->all();
        $filename = isset($data['image_del']) ? $data['image_del'] : "";
        if (!empty($data['image'])) {
            
            if (isset($data['image_del'])) {
                File::delete('storage/images/'.$data['image_del']);
                File::delete('storage/images/th_'.$data['image_del']);
            }

            $filename    = uniqid();

            //Сохраняем оригинальную картинку
            $data['image']->move('storage/images/',$filename);

            //Создаем миниатюру изображения и сохраняем ее
            $thumbnail = Image::make('storage/images/'.$filename);
            $thumbnail->fit(200);
            $thumbnail->save('storage/images/th_'.$filename);

            $resize = Image::make('storage/images/'.$filename)->widen(800);
            $resize->save('storage/images/'.$filename);
        }



        $data['image'] = $filename;
        $data['name'] = $data['name'] ?? '';

        if (empty($data['image'])&&empty($data['name'])) return to_route('images.dashboard');    

        Images::find($request->id)->update($data);

        return to_route('images.dashboard');

    }

    public function delete(Request $request, $id)
    {
        if (empty($id)) return to_route('images.dashboard');

        $data =Images::find($id);
        return view('images.delete', ['data' => $data]);

    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $filename = isset($data['image_del'])? $data['image_del'] : "";
        if (!empty($filename)) {
           $path_file = 'storage/images/'.$filename;
           File::delete($path_file);
           $path_file = 'storage/images/th_'.$filename;
           File::delete($path_file);
        }

        Images::find($data['id'])->delete();

        return to_route('images.dashboard');        
    }
    //
}
