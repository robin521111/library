<?php

namespace Library\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Library\BookModel;

class BookController extends Controller
{


    public function BookPre()
    {
        // $books = DB::table('books')->where('idbooks','>',0);
        $books['preview'] = DB::table('books')->where('id','>',0)
                                    ->take(100)
                                    ->get();
        $books['data'] = array('success','error','warning','info');
        
        return view('books.preview',['books'=>$books['preview']],['data'=>$books['data']]);
    }

    public function borrowBook()
    {
        $books = BookModel::all();

        return view('books.borrow',['bookModel'=>$books]);
    }

    public function getBookJson()
    {
        return BookModel::all() ->toJson();
    }

    public function borrowBookById(Request $request, $id)
    {
        $book = DB::table('books')->where('id','=',$id)
                                ->first();
        return view('books.borrow',['book'=>$book]);
    }

    public function edit(Request $request, $id)
    {

        $book = DB::table('books')->where('id','=',$id)
                                    ->first();
                                    
        return view('books.edit',['book'=>$book]);

        // $preview['book'] = DB::table('books')->where('id','=',$id)
        //                             ->first();
        // $preview['workshop']=view('workshops.schedule');
        // $data =['success','error','warning','info'];
        // return view('books.edit',['preview'=>$preview],['data'=>$data]);

    }

    public function delete(Request $request,$id)
    {
        BookModel::destroy($id);

        return redirect('portal');
    }

    public function update(Request $request,$id)
    {
        $book = new BookModel();
        $book->title = $request->title;
        $book->tech_field = $request->tech_field;
        $book->imgs = $request->imgs;
        $book->introduction=$request->introduction;
        $book->status=$request->status;
        BookModel::where('id',$id)
                    ->update(['title'=>$book->title,'tech_field'=>$book->tech_field,'imgs'=>$book->imgs,'introduction'=>$book->introduction,'status'=>$book->status]);

        return redirect('portal');
    }
    
}