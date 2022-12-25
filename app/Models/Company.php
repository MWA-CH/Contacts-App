<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = ["name","address","email","website"];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    /*
    Company::all()
    Company::take(3)->get()
    Company::first()
    Company::find(1)
    Company::find([1,2,3])
    Company::where('website','kreiger.net')->first()
    Company::whereWebsite('kreiger.net')->first()

    # Create

    $data = [
        "name"=>"Company name ex",
        "address"=>"Company address exp",
        "email"=>"Company email exp",
        "webiste"=>"https://companywebexp.com",
        "contact"=>"company contact exp"
    ];
    Company::create($data)

    ## update
    $company = Company::first()
    $company->update($data)
    */
}
