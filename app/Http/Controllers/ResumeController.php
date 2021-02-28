<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\File;
use App\Events\NotificationEvent;

class ResumeController extends Controller
{

    public function store(Request $request)
    {     

        $request->validate([
            'name'=>'required',
            'telephone'=>'required|min:11|max:11',
            'office'=>'required',
            'email'=>'required|email',
            'schooling'=>'required'
        ], Resume::messages());

        $infoFile = File::uploadFile($request);
        
        $url = $request->file('file')->getRealPath();

        $file = new File;
        $file->name = $infoFile['name'];
        $file->path = $infoFile['path'];
        

        $resume = Resume::registerResumeDB($request, $file);
        event(new NotificationEvent($resume, $request->file('file')));

        return redirect('confirm');
    }
}
