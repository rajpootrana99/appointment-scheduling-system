<?php

namespace App\Http\Traits;

trait GeneralTraits{
    public function imagePath($fileName, $folderName, $data){
        if(request()->hasFile($fileName)){
            return request()->file($fileName)->store($folderName,'public');
        }
        elseif (isset($data->$fileName)){
            return $data->$fileName;
        }
        else {
            return null;
        }
    }
}
