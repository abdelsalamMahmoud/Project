<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index(){
        $experiences = Experience::selection()->paginate(PAGINATION_COUNT);
        return view('admin.experience.index',compact('experiences'));
    }

    public function create(){
        return view('admin.experience.create');
    }

    public function store(ExperienceRequest $request){
        try{
            Experience::create($request->except(['_token']));
            return redirect()->route('admin.experience')->with(['success'=>'تم اضافة الخبرات بنجاح']);
        }catch (\Exception $exception){
            return redirect()->route('admin.experience')->with(['error'=>'لم يتم اضافة الخبرات برجاء المحاولة مجددا']);
        }
    }

    public function edit($id){
        $experience = Experience::selection()->find($id);
        if(! $experience){
            return redirect()->route('admin.experience')->with(['error'=>'هذه الخبرات غير موجودة']);
        }
        return view('admin.experience.edit',compact('experience'));
    }

    public function update($id,ExperienceRequest $request){
        try{
            $experience = Experience::find($id);
            if(! $experience){
                return redirect()->route('admin.experience.edit',$id)->with(['error'=>'هذه الخبرات غير موجودة']);
            }

            //update in db
            $experience->update($request->except(['_token']));
            return redirect()->route('admin.experience')->with(['success'=>'تم تحديث الخبرات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.experience')->with(['error'=>'لم يتم تحديث الخبرات برجاء المحاولة مجددا']);
        }

    }

    public function destroy($id){
        try{
            $info = Experience::find($id);
            if(! $info){
                return redirect()->route('admin.experience')->with(['error'=>'هذه الخبرات غير موجودة']);
            }
            //delete in db
            $info->delete();
            return redirect()->route('admin.experience')->with(['success'=>'تم حذف الخبرات بنجاح']);

        }catch (\Exception $exception){
            return redirect()->route('admin.experience')->with(['error'=>'لم يتم حذف الخبرات برجاء المحاولة مجددا']);
        }

    }
}
