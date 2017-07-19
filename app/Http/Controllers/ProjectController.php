<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function arr($num){
        $arr1=[
            Project_Name,Type,Status,Start_Date,Target_End_Date,Actual_End_Date,
            Target_Budget,Project_Url,Priority,Progress,Maneger
        ];
        $arr2=[
            'Project_Name','Type','Status','Start_Date','Target_End_Date','Actual_End_Date',
            'Target_Budget','Project_Url','Priority','Progress','Maneger'
        ];
        $arr3=[
            'id','Project_Name','Start_Date','Target_End_Date','Actual_End_Date',
            'Target_Budget','Progress','Status','Maneger','created_at','updated_at'
        ];

        if($num==1){
            return $arr1;
        }
        if($num==2){
            return $arr2;
        }
        if($num==3){
            return $arr3;
        }
    }
    public function index()
    {
        $projects = \App\Project::paginate(15);
        return view('/admin/project/index',compact('projects'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $project=project();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $project->$arr1[$i]=$request->get($arr2[$i]);
        }

        $project->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $project=project()->find($request->get('id'));
        return $project->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $project=project()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $project->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $project->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $project=project()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($project);
    }
}
