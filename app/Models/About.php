<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class About extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    //protected $table = 'abouts';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['title1', 'title2', 'title3', 'content1', 'content2', 'content3', 'image'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
      'image' => 'array'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function setPhotosAttribute($value)
    {
        $attribute_name = "image";
        $disk = "uploads";
        $destination_path = "user_files/about";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    // public function setImageAttribute($value)
    // {
    //     $attribute_name = "image";
    //     $disk = "uploads";
    //     $destination_path = "user_files/about";
    //
    //     // if the image was erased
    //     if ($value==null) {
    //         // delete the image from disk
    //         \Storage::disk($disk)->delete($this->image);
    //
    //         // set null in the database column
    //         $this->attributes[$attribute_name] = null;
    //     }
    //
    //     // if a base64 was sent, store it in the db
    //     if (starts_with($value, 'data:image'))
    //     {
    //         // 0. Make the image
    //         $image = \Image::make($value);
    //         // 1. Generate a filename.
    //         $filename = md5($value.time()).'.jpg';
    //         // 2. Store the image on disk.
    //         \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
    //         // 3. Save the path to the database
    //         $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
    //     }
    // }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
