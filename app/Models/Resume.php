<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "telephone",
        "office",
        "email",
        "schooling",
        "comments"
    ];

    public static function registerResumeDB($request, $file) 
    {
        $resume = new Resume;

        $resume->name = $request->input('name');
        $resume->telephone = $request->input('telephone');
        $resume->office = $request->input('office');
        $resume->email = $request->input('email');
        $resume->schooling = $request->input('schooling');
        $resume->ip_address = $request->ip();
        $resume->files()->create([
            "name"=> $file->name,
            "path"=> $file->path
        ]);

        $resume->save();

        return $resume;
    }

    public function files() 
    {
        return $this->hasMany('App\Models\File');
    }

    public static function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'telephone.required' => 'O telefone é obrigatório',
            'telephone.min' => 'O telefone deve possuir no minímo 11 números',
            'telephone.max' => 'O telefone deve possuir no máximo 11 números',
            'office.required'=> 'O Cargo é obrigatório',
            'email.required'=> 'O email é obrigatório',
            'schooling.required'=> 'A escolaridade é obrigatório'
        ];
    }
}
