<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function arr($num){
        $arr1=[
            Status,Type,Question,Answer
        ];
        $arr2=[
            'Status','Type','Question','Answer'
        ];
        $arr3=[
            'id','Question','Type','created_at','updated_at'
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

    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $faq=faq();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $faq->$arr1[$i]=$request->get($arr2[$i]);
        }

        $faq->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $faq=faq()->find($request->get('id'));
        return $faq->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $faq=faq()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $faq->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $faq->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $faq=faq()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($faq);
    }
}
