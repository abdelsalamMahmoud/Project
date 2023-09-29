<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InterestsRequest;
use App\Models\Interest;

class InterestsController extends Controller
{
    public function index(){
        $interests = Interest::selection()->paginate(PAGINATION_COUNT);
        return view('admin.interests.index',compact('interests'));
    }

    public function create(){
        return view('admin.interests.create');
    }

    public function store(InterestsRequest $request){
        try{
            Interest::create($request->except(['_token']));
            return redirect()->route('admin.interests')->with(['success'=>'تم اضافة المعلومات بنجاح']);
        }catch (\Exception $exception){
            return redirect()->route('admin.interests')->with(['error'=>'لم يتم اضافة المعلومات برجاء المحاولة مجددا']);
        }
    }

    public function edit($id){
        $interest = Interest::selection()->find($id);
        if(! $interest){
            return redirect()->route('admin.interests')->with(['error'=>'هذه المعلومات غير موجودة']);
        }
        return view('admin.interests.edit',compact('interest'));
    }

    public function update($id,InterestsRequest $request){
        try{
            $interest = Interest::find($id);
            if(! $interest){
                return redirect()->route('admin.interests.edit',$id)->with(['error'=>'هذه المعلومات غير موجودة']);
            }

            //update in db
            $interest->update($request->except(['_token']));
            return redirect()->route('admin.interests')->with(['success'=>'تم تحديث المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.interests')->with(['error'=>'لم يتم تحديث المعلومات برجاء المحاولة مجددا']);
        }

    }

    public function destroy($id){
        try{
            $interest = Interest::find($id);
            if(! $interest){
                return redirect()->route('admin.interests')->with(['error'=>'هذه المعلومات غير موجودة']);
            }
            //delete in db
            $interest->delete();
            return redirect()->route('admin.interests')->with(['success'=>'تم حذف المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.interests')->with(['error'=>'لم يتم حذف المعلومات برجاء المحاولة مجددا']);
        }

    }
}
