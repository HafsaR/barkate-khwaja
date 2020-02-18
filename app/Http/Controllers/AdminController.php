<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Magazines;
use App\Section;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //

    public function index(){
        return view('backend.dashboard');
    }

    public function uploadBook(){
        return view('backend.uploadbook');
    }

    public function manageBook(){

        $books=Book::orderBy('created_at','desc')->paginate(10);

        $page_data['books']=$books;
        $page_data['page_name']='manageBook';
        $page_data['page_title']='Book Info';
        return view('backend.managebook',$page_data);
    }

    public function magazine(){
        return view('backend.addmagazine');
    }

    public function magazineInfo(){
        $magazines= Magazines::orderBy('created_at','desc')->paginate(10);

        $page_data['magazines']=$magazines;
        $page_data['page_name']='magazineinfo';
        $page_data['page_title']='Magazine Info';

        return view('backend.magazineinfo',$page_data);
    }



    public function insert_book(Request $request){
        //var_dump($req->input()); die;

         //handle file uploade
       if($request->hasFile('book_cover'))
       {
           //get file name with extension
           $file_name_ext =$request->file('book_cover')->getClientOriginalName();


           //get just file name
           $file_name =pathinfo($file_name_ext , PATHINFO_FILENAME);


           //get just extension

           $extension = $request->file('book_cover')->getClientOriginalExtension();


           //file name to store

           $file_name_to_store=$file_name.'_'.time().'.'.$extension;

           //upload image

           $path = $request->file('book_cover')->storeAs('public/book_cover' , $file_name_to_store);

        }
       else
       {
        $file_name_to_store ='noimg.png';
       }

        //handle pdf uploade
        if($request->hasFile('book_pdf'))
        {
            //get file name with extension
            $pdf_name_ext =$request->file('book_pdf')->getClientOriginalName();
 
 
            //get just file name
            $pdf_name =pathinfo($pdf_name_ext , PATHINFO_FILENAME);
 
 
            //get just extension
 
            $extension = $request->file('book_pdf')->getClientOriginalExtension();
 
 
            //file name to store
 
            $pdf_name_to_store=$pdf_name.'_'.time().'.'.$extension;
 
            //upload image
 
            $path = $request->file('book_pdf')->storeAs('public/book_pdf' , $pdf_name_to_store);
 
         }
        else
        {
         $pdf_name_to_store ='noimg.png';
        }
        
        $book=new Book();
       $book->book_cover=$file_name_to_store;
       $book->book_pdf=$pdf_name_to_store;
        $book->pages=$request->input('pages');
        $book->book_section=$request->input('book_section');
        $book->author=$request->input('author');
        $book->editor=$request->input('editor');
        $book->translator=$request->input('translator');
        $book->gujarati=$request->input('gujarati');
        $book->english=$request->input('english');
        $book->hindi=$request->input('hindi');
        $book->urdu=$request->input('urdu');
        $book->arabic=$request->input('arabic');
        $book->note=$request->input('note');
        
        $book->save();

        return redirect('/book');

    }


    public function insert_magazine(Request $request){
        // var_dump($request->hasfile('magazine_pdf')); die;
         
         //handle file uploade
       if($request->hasFile('magazine_cover'))
       {
           //get file name with extension
           $file_name_ext =$request->file('magazine_cover')->getClientOriginalName();


           //get just file name
           $file_name =pathinfo($file_name_ext , PATHINFO_FILENAME);


           //get just extension

           $extension = $request->file('magazine_cover')->getClientOriginalExtension();


           //file name to store

           $file_name_to_store=$file_name.'_'.time().'.'.$extension;

           //upload image

           $path = $request->file('magazine_cover')->storeAs('public/magazine_cover' , $file_name_to_store);

        }
       else
       {
        $file_name_to_store ='noimg.png';
       }

         //handle PDF uploade
         if($request->hasFile('magazine_pdf'))
         {
             //get file name with extension
             $pdf_name_ext =$request->file('magazine_pdf')->getClientOriginalName();
  
  
             //get just file name
             $pdf_name =pathinfo($pdf_name_ext , PATHINFO_FILENAME);
  
  
             //get just extension
  
             $extension = $request->file('magazine_pdf')->getClientOriginalExtension();
  
  
             //file name to store
  
             $pdf_name_to_store=$pdf_name.'_'.time().'.'.$extension;
  
             //upload image
  
             $path = $request->file('magazine_pdf')->storeAs('public/magazine_pdf' , $pdf_name_to_store);
  
          }
         else
         {
          $pdf_name_to_store ='noimg.png';
         }
  

        $magazines=new Magazines();
        $magazines->magazine_cover=$file_name_to_store;
        $magazines->magazine_pdf = $pdf_name_to_store;
        $magazines->year=$request->input('year');
        $magazines->month=$request->input('month');
        $magazines->save();

         return redirect('/magazine');

    }


    public function edit_magazine($id){
       
        $magazine=Magazines::find($id);
        
        $page_data['magazine']=$magazine;
        $page_data['title']='Edit Magazine';
        $page_data['page_name']='Edit_magazine';

        return view('backend.edit_magazine',$page_data);

    }

    public function update_magazine(Request $request, $id)
    {
           //handle file uploade
       if($request->hasFile('magazine_cover'))
       {
           //get file name with extension
           $file_name_ext =$request->file('magazine_cover')->getClientOriginalName();


           //get just file name
           $file_name =pathinfo($file_name_ext , PATHINFO_FILENAME);


           //get just extension

           $extension = $request->file('magazine_cover')->getClientOriginalExtension();


           //file name to store

           $file_name_to_store=$file_name.'_'.time().'.'.$extension;

           //upload image

           $path = $request->file('magazine_cover')->storeAs('public/magazine_cover' , $file_name_to_store);

        }
       else
       {
        $file_name_to_store ='noimg.png';
       }

         //handle PDF uploade
         if($request->hasFile('magazine_pdf'))
         {
             //get file name with extension
             $pdf_name_ext =$request->file('magazine_pdf')->getClientOriginalName();
  
  
             //get just file name
             $pdf_name =pathinfo($pdf_name_ext , PATHINFO_FILENAME);
  
  
             //get just extension
  
             $extension = $request->file('magazine_pdf')->getClientOriginalExtension();
  
  
             //file name to store
  
             $pdf_name_to_store=$pdf_name.'_'.time().'.'.$extension;
  
             //upload image
  
             $path = $request->file('magazine_pdf')->storeAs('public/magazine_pdf' , $pdf_name_to_store);
  
          }
         else
         {
          $pdf_name_to_store ='noimg.png';
         }
  

        $magazines=Magazines::find($id);
        $magazines->magazine_cover=$file_name_to_store;
        $magazines->magazine_pdf = $pdf_name_to_store;
        $magazines->year=$request->input('year');
        $magazines->month=$request->input('month');
        $magazines->save();

        return redirect('/magazine_information');

    }

    public function delete_book($id){
        $book=Book::find($id);
        if($book->book_cover != 'noimg.png')
        {
            //delete image
            Storage::delete('public/book_cover/' . $book->book_cover);
        }
        Storage::delete('public/book_pdf/' . $book->book_pdf);

        $book->delete();

        return redirect('/book_information')->with('success','Post Remove');


    }


    public function delete_magazine($id)
    {
        $magazine=Magazines::find($id);

        if($magazine->magazine_cover != 'noimg.png')
        {
            //delete image
            Storage::delete('public/magazine_cover/' . $magazine->magazine_cover);
        }
        Storage::delete('public/magazine_pdf/' . $magazine->magazine_pdf);

        $magazine->delete();

        return redirect('/magazine_information')->with('success','Post Remove');
    }



    //add section function
    public function add_section(Request $request){
        $section=new Section();
        $section->section_name=$request->input('section_name');
        $section->section_name_in_gujarati = $request->input('section_name_in_gujarati');
        $section->save();
        return redirect('/section');
    }

    public function section(){
        return view('backend.addSection');
    }
    public function sectioninfo(){
        $section= Section::orderBy('created_at','desc')->paginate(10);

        $page_data['section']=$section;
        $page_data['page_name']='sectioninfo';
        $page_data['page_title']='Section Info';

        return view('backend.sectioninfo',$page_data);
    }
    public function edit_section($id){
       
        $section=Section::find($id);
        
        $page_data['section']=$section;
        $page_data['title']='Edit Section';
        $page_data['page_name']='Edit_section';

        return view('backend.edit_section',$page_data);

    }
    public function update_section(Request $request, $id){
        $section=Section::find($id);
       
        $section->section_name=$request->input('section_name');
        $section->section_name_in_gujarati=$request->input('section_name_in_gujarati');
        $section->save();

        return redirect('/section_information');
    }
    public function delete_section($id)
    {
       
        //$section=Section::find($id);
        $section=Section::select('*')->where('section_id','=', $id)->first();
        $section->delete();

        return redirect('/section_information')->with('success','Post Remove');
    }


}
