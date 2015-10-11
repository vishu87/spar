<?php

class ServiceController extends BaseController {
    protected $layout = 'admin.layout';

    public function getIndex(){
        $this->layout->title = 'All Serives | Spar';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 7;
        $services = Service::get();
        $this->layout->main = View::make("admin.services.index",array("services"=>$services));
    }

    public function getadd(){
        $this->layout->title = 'Add | Service';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 7;
        $this->layout->main = View::make("admin.services.add");
    }

    public function postAdd(){
        $cre = [
        'service_name' => Input::get('service_name')   
        ];
        $rules = [
        'service_name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('service_image')){
                $destinationPath = "images/";
                $extension = Input::file('service_image')->getClientOriginalExtension();
                $image = str_replace(' ','-',Input::file('service_image')->getClientOriginalName());
                $count = 1;
                $image_ori = $image;
                while(File::exists($destinationPath.$image)){
                    $image = $count.'-'.$image_ori;
                    $count++;
                }
                Input::file('service_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("services")->insertGetID(array('service_name'=>Input::get("service_name"),'service_image'=>$image, "service_description"=>Input::get("service_description") ));               
            return Redirect::Back()->with('success', '<b>'.Input::get('service_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getService($service_id){
        $this->layout->title = 'Spar | Service';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 7;
        $service = DB::table('services')->where('id',$service_id)->first();
        $this->layout->main = View::make("admin.services.edit",array("service"=>$service));
    }

    
    

    public function getdelete($service_id){
        $id = DB::table("services")->where('id',$service_id)->delete();
        return Redirect::Back()->with('success', 'Service been successfully deleted');                    
    }

    public function putupdate($service_id){       
        $cre = [
        'service_name' => Input::get('service_name')
        ];
        $rules = [
        'service_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $service = Service::find($service_id);
            if($service->exists){
                if (Input::hasFile('service_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('service_image')->getClientOriginalExtension();
                    $image = Input::file('service_image')->getClientOriginalName();
                    Input::file('service_image')->move($destinationPath,$image);
                    $service->service_image = $image;
                }
                $service->service_name = Input::get('service_name');
                $service->service_description = Input::get('service_description');
                $service->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('service_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Service not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
