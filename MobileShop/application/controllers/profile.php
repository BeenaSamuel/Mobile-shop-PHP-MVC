<?php 

class profile extends framework {

    public function __construct()
    {
      if(!$this->getSession('userId')){

        $this->redirect("accountController/loginForm");

      }
       $this->helper("link");
       $this->profileModel = $this->model("profileModel"); 
    }
    public function index(){
     $userId = $this->getSession('userId');
      $data = $this->profileModel->getData($userId);
 
      $this->view("profile", $data);

    }

    public function mobileForm(){
      $this->view("addMobile");
    }

    public function mobileStore(){
      
      $mobileData = [

       'brand'           => $this->input('brand'),
       'model'          => $this->input('model'),
       'processor'        => $this->input('processor'),
       'optradio'         => $this->input('optradio'),
       'pur_date'        => $this->input('pur_date'),
       'price'          => $this->input('price'),
       'brandError'      => '',
       'modelError'     => '',
       'processorError'   => '',
       'radioerror' => '',
       'pur_dateError'     => '',
       'priceError'     => ''
       

      ];

      if(empty($mobileData['brand'])){
        $mobileData['brandError'] = "brand is required";
      }
      if(empty($mobileData['model'])){
        $mobileData['modelError'] = "model is required";
      }
      if(empty($mobileData['processor'])){
        $mobileData['processorError'] = "processor is required";
      }
      if(empty($mobileData['optradio'])){
        $mobileData['radioError'] = "RAM is required";
      }
      if(empty($mobileData['pur_date'])){
        $mobileData['pur_dateError'] = "Date of purchase is required";
      }
      if(empty($mobileData['price'])){
        $mobileData['priceError'] = "Price is required";
      }
     
     

      if(empty($mobileData['brandError'])  && empty($mobileData['modelError'])   && empty($mobileData['processorError']) && empty($mobileData['pur_dateError'])&& empty($mobileData['radioError']) && empty($mobileData['priceError'])){

        $data = [$mobileData['brand'], $mobileData['model'],$mobileData['processor'], $mobileData['optradio'], $mobileData['pur_date'], $mobileData['price'], $this->getSESSION('userId')];
         if($this->profileModel->addMobile($data)){
                $this->setFlash("MobileAdded", "Your mobile has been added successfuly");
                $this->redirect("profile/index");
         }


      } else {
        $this->view("addMobile", $mobileData);
      }

    }

    public function edit_mobile($id){
      
      $userId = $this->getSession('userId');
      $mobileEdit = $this->profileModel->edit_data($id, $userId);
      $data = [

        'data'    => $mobileEdit,
        'brandError' => '',
        'modelError' => '',
        'processorError' => '',
        'radioerror' => '',
        'priceError' => ''

      ];
      $this->view("edit_mobile", $data);

    }

    public function updateMobile(){

      $id = $this->input('hiddenId');
      $userId = $this->getSession('userId');
      $mobileEdit = $this->profileModel->edit_data($id, $userId);
      $mobileData = [

        'brand'           => $this->input('brand'),
        'model'        => $this->input('model'),
        'processor'        => $this->input('processor'),
        'optradio'         => $this->input('optradio'),
        'price'          => $this->input('price'),
        
        'data'           => $mobileEdit,
        'hiddenId'       => $this->input('hiddenId'),
        'brandError'      => '', 
        'modelError'   => '',
        'processorError'   => '',
        'radioerror' => '',
        'priceError'     => ''
       
        
 
       ];
 
       if(empty($mobileData['brand'])){
         $mobileData['brandError'] = "brand is required";
       } 
       if(empty($mobileData['model'])){
        $mobileData['modelError'] = "model is required";
      }   
      if(empty($mobileData['processor'])){
        $mobileData['processorError'] = "processor is required";
      }
      if(empty($mobileData['optradio'])){
        $mobileData['radioError'] = "RAM is required";
      }
       if(empty($mobileData['price'])){
         $mobileData['priceError'] = "Price is required";
       }
      
    

       if(empty($mobileData['brandError']) && empty($mobileData['modelError']) &&  empty($mobileData['processorError']) && empty($mobileData['radioError'])&& empty($mobileData['priceError']) ){
       
        $updateData = [$mobileData['brand'], $mobileData['model'], $mobileData['processor'],$mobileData['optradio'],$mobileData['price'],  $mobileData['hiddenId'], $userId];

        if($this->profileModel->updateMobile($updateData)){

          $this->setFlash('MobileUpdated', 'Your mobile record has been updated successfully');
          $this->redirect("profile/index");

        }

       } else {
        $this->view("edit_mobile", $mobileData);
       }

    }

    public function delete($id){

      $userId = $this->getSession('userId');
      if($this->profileModel->deletemobile($id, $userId)){
        $this->setFlash('deleted', 'Your mobile has been deleted successfully');
        $this->redirect('profile/index');
      }

    }



    public function logout(){

        $this->destroy();
        $this->redirect("accountController/loginForm");

    }

}


?>