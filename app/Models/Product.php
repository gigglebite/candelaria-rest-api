<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'currency',
        'price',
        'brand',
        'category',
        'image'
    ];

    public function getId(){
        return $this->id;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImage(){
        return $this->image;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCurrency(){
        return $this->currency;
    }

    public function getBrand(){
        return $this->brand;
    }


}
