<?php

namespace Milwad\LaravelMedia\Enums;

enum MediaTypeEnum: string
{
    case TYPE_IMAGE     = 'image';
    case TYPE_VIDEO     = 'video';
    case TYPE_ZIP       = 'zip';
    case TYPE_AUDIO     = 'audio';
    case TYPE_DOCUMENT  = 'document';
}