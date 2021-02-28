<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'path'
    ];

    public function resume() {
        return $this->belongsTo('App\Models\Resume');
    }

    private static function messages()
    {
        return [
            'file.required' => 'O arquivo é obrigatório',
            'file.max' => 'O arquivo deve possuir no máximo 1 Megabyte',
            'file.mimes' => 'O arquivo deve ser do tipo: doc, docx, pdf.'
        ];
    }

    public static function uploadFile($request) {
        $validatedData = $request->validate([
            'file' => 'file|required|mimes:doc,docx,pdf|max:1000',
        ], File::messages());

        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        return [
            "name"=>$name,
            "path"=>$path
        ];
    }
}
