<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable =[
        "image",
        "titre",
        "jour",
        "mois",
        "annee",
        "text",
        "description",
        "user_id",
        "tag_id",
        "category_id",
        "verification_id"

    ];
    protected $table = "articles";

   public function users(){
       return $this->belongsTo(User::class, "user_id", "id");
   }

   public function tags(){
       return $this->belongsToMany(Tag::class);
   }

   public function categories(){
       
    return $this->belongsToMany(Category::class);
   }

   public function commentaires(){
       
       return $this->hasMany(Commentaire::class);
   }

   public  function  verifications()
    {
        return  $this->belongsTo(Verification::class, "verification_id", "id");
    }
}
