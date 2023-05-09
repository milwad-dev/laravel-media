<?php

namespace Milwad\LaravelMedia\Facades;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Facade;

/**
 * @method static upload(UploadedFile $file, bool $isPrivate = false)
 */
class ImageServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'image-service';
    }
}