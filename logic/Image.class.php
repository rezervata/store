<?php

class Image
{
    private $iw = 640;
    private $ih = 480;
    private $mw = 200;
    private $mh = 180;
    private $tw = 120;
    private $th = 120;
    private $thumbs = 'img';
    private $images = 'img';
    
    public function __construct($iw = false, $ih = false, $tw = false, $th = false)
    {
        if ($iw) {
            $this->iw = $iw;
        }
        
        if ($ih) {
            $this->ih = $ih;
        }
        
        if ($tw) {
            $this->tw = $tw;
        }
        
        if ($th) {
            $this->th = $th;
        }
        
        //	if(!file_exists($this->thumbs) && !is_dir($this->thumbs)) mkdir($this->thumbs);
        //	if(!file_exists($this->images) && !is_dir($this->images)) mkdir($this->images);
    }
    
    public function setPaths($thumbs, $images)
    {
        $this->thumbs = str_replace('/', '', $thumbs);
        $this->images = str_replace('/', '', $images);
    }
    
    public function setThDim($width, $height)
    {
        if (is_numeric($width) && $width > 20 && is_numeric($height) && $height > 20) {
            $this->tw = $width;
            $this->th = $height;
        } else {
            return false;
        }
        
        return true;
    }
    
    public function resample($image, $type = 'image')
    {
        $img_width = imagesx($image);
        $img_height = imagesy($image);
        
        if (!$img_width || !$img_height) {
            return false;
        }
        
        if ($type == 'image') {
            $set_width = $this->iw;
            $set_height = $this->ih;
        } elseif ($type == 'middle') {
            $set_width = $this->mw;
            $set_height = $this->mh;
        } else {
            $set_width = $this->tw;
            $set_height = $this->th;
        }
        
        if ($img_width > $set_width || $img_height > $set_height) {
            if ($img_width > $img_height) {
                $new_width = $set_width;
                $new_height = $img_height * $new_width / $img_width;
            } else {
                $new_height = $set_height;
                $new_width = $img_width * $new_height / $img_height;
            }
        } else {
            $new_width = $img_width;
            $new_height = $img_height;
        }
        
        $rimage = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($rimage, $image, 0, 0, 0, 0, $new_width, $new_height, $img_width, $img_height);
        return $rimage;
        //	return array('nw'=>$new_width, 'nh'=>$new_height, 'iw'=>$img_width, 'ih'=>$img_height);
    }
    
    
    public function process($img, $name)
    {
        if ($image_info = getimagesize($img)) {
            if ($image_info[2] == IMAGETYPE_JPEG){
                $image = imagecreatefromjpeg($img);
            } elseif ($image_info[2] == IMAGETYPE_PNG) {
                $image = imagecreatefrompng($img);
            } elseif ($image_info[2] == IMAGETYPE_GIF) {
                $image = imagecreatefromgif($img);
            } else {
                return 'IMG_TYPE_NOT_SUPPORTED';
            }
            
            if (!$image) {
                return 'IMAGE_CREATION_ERR';
            }
            
            $IMG = $this->resample($image);
            $MID = $this->resample($image, 'middle');
            $TMB = $this->resample($image, 'thumb');
            
            if (!$IMG || !$MID || !$TMB) {
                return 'IMAGE_RESAMPLE_ERR';
            }
            
            imagejpeg($IMG, $this->images . '/' . $name . '.jpg', 72);
            imagejpeg($MID, $this->images . '/m' . $name . '.jpg', 72);
            imagejpeg($TMB, $this->thumbs . '/t' . $name . '.jpg', 96);
            imagedestroy($IMG);
            imagedestroy($MID);
            imagedestroy($TMB);
            return 'OK';
        }
    }
} // class