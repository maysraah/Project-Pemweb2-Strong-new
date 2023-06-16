<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HalMateriController extends Controller
{
    //
    public function index()
    {
        $data = Materi::all();
        return view('halMateri', ['materi' => $data]);
    }

    public function show($id)
    {
           
        $materi=\App\Models\Materi::find($id);

        $data=['materi'=>$materi];
        return view('intiMateri')->with($data);

        }

    public function execute(Request $request)
        {
            $code = $request->input('code');
    
            $filename = tempnam(sys_get_temp_dir(), 'python');
            $file = fopen($filename, 'w');
            fwrite($file, $code);
            fclose($file);
    
            // Execute the Python code
            $output = shell_exec("python " . $filename);
    
            // Clean up the temporary file
            unlink($filename);
    
            // Return the output
            return $output;
        }
}
