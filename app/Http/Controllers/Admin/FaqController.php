<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq; 
use Debugbar;

class FaqController extends Controller
{
    protected $faq;

    function __construct(Faq $faq)
    {        
        $this->faq = $faq;
    }

    public function index()
    {
        $view = View::make('admin.pages.faqs')
        ->with('faq', $this->faq)
        ->with('faqs', $this->faq->orderBy('created_at', 'desc')->get());
    
        if(request()->ajax()) {
            
             $sections = $view->renderSections(); 
    
             return response()->json([
                 'table' => $sections['table'],
                 'form' => $sections['form'],
             ]); 
        }

        return $view;
    }

    public function create()
    {
        $view = View::make('admin.faqs.index')
        ->with('faq', $this->faq)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(Request $request)
    {            
                
        $faq = $this->faq->updateOrCreate([
            'id' => request('id')],[
            'nombre' => request('name'),
            'titulo' => request('title'),
            'cuestion' => request('question'),
            'respuesta' => request('answer'),
        ]);

        $view = View::make('admin.faqs.index')
        ->with('faqs', $this->faq->orderBy('created_at', 'desc'))
        ->with('faq', $this->faq)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
        ]);
    }

    public function edit(Faq $faq)
    {

        $view = View::make('admin.faqs.index')
        ->with('faq', $faq)
        ->with('faqs', $this->faq->orderBy('created_at', 'desc'));        
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Faq $faq){

        $view = View::make('admin.faqs.index')
        ->with('faq', $faq)
        ->with('faqs', $this->faq->orderBy('created_at', 'desc'))
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
        ]);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        $view = View::make('admin.faqs.index')
        ->with('faq', $this->faq)
        ->with('faqs', $this->faq->orderBy('created_at', 'desc'))
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'message' => $message
        ]);
    }
}