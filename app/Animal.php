<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    public function budgeringar(){
        return $this->hasmany(budgeringar::class);
    }

    public function chimpanze(){
        return $this->hasmany(chimpanze::class);
    }

    public function hyena(){
        return $this->hasmany(hyena::class);
    }

    public function ibex(){
        return $this->hasmany(ibex::class);
    }

    public function marten(){
        return $this->hasmany( marten::class);
    }

    public function wolverine(){
        return $this->hasmany(wolverine::class);
    }





}
