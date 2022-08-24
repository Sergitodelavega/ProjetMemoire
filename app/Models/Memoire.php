<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memoire extends Model
{
    /**
     * MEMOIRE ATTRIBUTES
     * $this->attributes['id'] - int - contains the memoire primary key (id)
     * $this->attributes['theme'] - string - contains the memoire theme
     * $this->attributes['description'] - text - contains the memoire description
     * $this->attributes['pdf'] - string - contains the memoire pdf
     * $this->attributes['created_at'] - timestamp - contains the memoire creation date
     * $this->attributes['updated_at'] - timestamp - contains the memoire updated date
     */

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        return $this->attributes['id'] = $id;
    }

    public function getTheme(){
        return $this->attributes['theme'];
    }

    public function setTheme($theme){
        return $this->attributes['theme'] = $theme;
    }

    public function getDescription(){
        return $this->attributes['description'];
    }

    public function setDescription($description){
        return $this->attributes['description'] = $description;
    }

    public function getPdf(){
        return $this->attributes['pdf'];
    }

    public function setPdf($pdf){
        return $this->attributes['pdf'] = $pdf;
    }

    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt){
        return $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt(){
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt){
        return $this->attributes['updated_at'] = $updatedAt;
    }
}
