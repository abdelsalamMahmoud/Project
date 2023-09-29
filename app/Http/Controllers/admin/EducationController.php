<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Education;

class EducationController extends Controller
{
    public function index(){
        $educations = Education::selection()->paginate(PAGINATION_COUNT);
        return view('admin.education.index',compact('educations'));
    }

    public function create(){
        return view('admin.education.create');
    }

    public function store(EducationRequest $request){
        try{
            Education::create($request->except(['_token']));
            return redirect()->route('admin.education')->with(['success'=>'تم اضافة المعلومات بنجاح']);
        }catch (\Exception $exception){
            return redirect()->route('admin.education')->with(['error'=>'لم يتم اضافة المعلومات برجاء المحاولة مجددا']);
        }
    }

    public function edit($id){
        $education = Education::selection()->find($id);
        if(! $education){
            return redirect()->route('admin.education')->with(['error'=>'هذه المعلومات غير موجودة']);
        }
        return view('admin.education.edit',compact('education'));
    }

    public function update($id,EducationRequest $request){
        try{
            $education = Education::find($id);
            if(! $education){
                return redirect()->route('admin.education.edit',$id)->with(['error'=>'هذه المعلومات غير موجودة']);
            }

            //update in db
            $education->update($request->except(['_token']));
            return redirect()->route('admin.education')->with(['success'=>'تم تحديث المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.education')->with(['error'=>'لم يتم تحديث المعلومات برجاء المحاولة مجددا']);
        }

    }

    public function destroy($id){
        try{
            $education = Education::find($id);
            if(! $education){
                return redirect()->route('admin.education')->with(['error'=>'هذه المعلومات غير موجودة']);
            }
            //delete in db
            $education->delete();
            return redirect()->route('admin.education')->with(['success'=>'تم حذف المعلومات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.education')->with(['error'=>'لم يتم حذف المعلومات برجاء المحاولة مجددا']);
        }

    }
}
