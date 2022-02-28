<?php


namespace App\Service;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesService
{

    public function all(){
        $images = DB::table('image')->select('*')->get();
        return $images->all();
    }

    public function getOne($id){
        $image = DB::table('image')->select('*')->where('id', $id)->first();
        return $image;
    }

    public function add($image){
        $filename = $image->store('uploads');

        DB::table('image')->insert(
            ['image' => $filename]
        );
    }

    public function update($id,$newImage){
        $image = $this->getOne($id);
        Storage::delete($image->image);

        $filename = $newImage->store('uploads');

        DB::table('image')
            ->where('id', $id)
            ->update(['image' => $filename]);
    }

    public function delete($id){
        $image = $this->getOne($id);
        Storage::delete($image->image);

        DB::table('image')->where('id', $id)->delete();
    }
}
