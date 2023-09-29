<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AwardsRequest;
use App\Models\Award;

class AwardsController extends Controller
{
    public function index(){
        $awards = Award::selection()->paginate(PAGINATION_COUNT);
        return view('admin.awards.index',compact('awards'));
    }

    public function create(){
        return view('admin.awards.create');
    }

    public function store(AwardsRequest $request){
        try{
            Award::create($request->except(['_token']));
            return redirect()->route('admin.awards')->with(['success'=>'تم اضافة المعلومات بنجاح']);
        }catch (\Exception $exception){
            return redirect()->route('admin.awards')->with(['error'=>'لم يتم اضافة المعلومات برجاء المحاولة مجددا']);
        }
    }

    public function edit($id){
        $award = Award::selection()->find($id);
        if(! $award){
            return redirect()->route('admin.awards')->with(['error'=>'هذه المعلومات غير موجودة']);
        }
        return view('admin.awards.edit',compact('award'));
    }

    public function update($id,AwardsRequest $request){
        try{
            $award = Award::find($id);
            if(! $award){
                return redirect()->route('admin.awards.edit',$id)->with(['error'=>'هذه المعلومات غير موجودة']);
            }

            //update in db
            $award->update($request->except(['_token']));
            return redirect()->route('admin.awards')->with(['success'=>'تم تحديث المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.awards')->with(['error'=>'لم يتم تحديث المعلومات برجاء المحاولة مجددا']);
        }

    }

    public function destroy($id){
        try{
            $award = Award::find($id);
            if(! $award){
                return redirect()->route('admin.awards')->with(['error'=>'هذه المعلومات غير موجودة']);
            }
            //delete in db
            $award->delete();
            return redirect()->route('admin.awards')->with(['success'=>'تم حذف المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.awards')->with(['error'=>'لم يتم حذف المعلومات برجاء المحاولة مجددا']);
        }

    }
}
