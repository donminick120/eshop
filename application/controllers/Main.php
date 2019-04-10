<?php

	class Main extends CI_Controller{
		public function view($page = 'index'){//function controller for viewing first page
			if(!file_exists(APPPATH.'views/main/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$data['products']= $this->main_model->get_post();
			$data['category'] = $this->main_model->get_category();
			$this->load->view('header/headerv1');
			$this->load->view('header/sidebar');
			$this->load->view('header/search');
			$this->load->view('main/'.$page, $data);
			$this->load->view('header/footer');
		
		}


		
		public function createpost(){//function controller to post product

			$data['title']='Create Post' ;
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('description','Description','required');
			$this->form_validation->set_rules('quantity','Quantity','required');
			$this->form_validation->set_rules('price','Price','required');
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headerv1');
			$this->load->view('main/createpost', $data);
			$this->load->view('header/footer');
			}
			else
			{
			$config['upload_path']='./assets/image/upload';
			$config['allowed_types']='.gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '1000';
			$config['max_height'] = '1000';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$upload_image = 'noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$upload_image = $_FILES['userfile']['name'];

			}

			$this->main_model->create_post($upload_image);
			redirect('product');
			}
		}


		public function createpostv1(){//-error

			$data['title']='Create Post' ;
			$data['category'] = $this->main_model->get_categories();
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('description','Description','required');
			$this->form_validation->set_rules('quantity','Quantity','required');
			$this->form_validation->set_rules('price','Price','required');
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headeradmin');
			$this->load->view('main/createpost', $data);
			$this->load->view('header/footer');
			}
			else
			{
			$config['upload_path']='./assets/image/upload';
			$config['allowed_types']='.gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '1000';
			$config['max_height'] = '1000';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$upload_image = 'noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$upload_image = $_FILES['userfile']['name'];

			}

			$this->main_model->create_post($upload_image);
			redirect('product');
			}
		}
		public function  getproduct($id= NULL){//fetch product controller

			$data ['product']= $this->main_model->get_product($id);
		
			
			if(empty($data['product'])){
				show_404();
			}
			$data['title'] = $data['product']['title'];
			$this->load->view('header/header');
			$this->load->view('main/product',$data);
			$this->load->view('header/footer');

		}



		public function login(){ // login page controller

			$data['title']='Log in';

			
			$this->load->view('main/login',$data);
			$this->load->view('header/footer');
		}


	public function login_validation(){  // log in validation controller
    
       
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $is_valid = $this->main_model->validate($username, $password);
        
         if($is_valid)/*If valid username and password set */
         {
             $get_id = $this->main_model->get_id($username, $password);                
					
            foreach($get_id as $val)
                { 
                     $id=$val->id;
                     $name = $val->username;                  
                     $password = $val->password;                 
                     $type=$val->type;
                     $number=$val->fone;
                     if($type=='admin')
                     {
                        $data = array(
                        'admin_name' =>$name, 
                        'admin_password' => $password,
                        'admin_type'=>$type,
                        'admin_id'=>$id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); 
                          redirect(base_url().'main/enter1');
                     }
                    if($type=='costumer')
                     {
                        
                        $data = array(
                        'cos_name' =>$name, 
                        'cos_password' =>$password,
                        'cos_type'=>$type,
                        'cos_id'=>$id,
                        'cos_number'=>$number,	
                        'cos_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); 
                          redirect(base_url().'main/enter');
                     }
                   
                    
            }       
         
        }
        else // incorrect username or password
        {
          
            $this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            redirect('login');
        }
   
    }
	



		public function enter(){//direction of login validation level
			if ($this->session->userdata('cos_name')!='' and $this->session->userdata('cos_number')!='')
			{
				$data['products']= $this->main_model->get_post();
				$data['category'] = $this->main_model->get_category();
				$this->load->view('header/headerv1');
				$this->load->view('header/sidebar');
				$this->load->view('header/search');
				$this->load->view('main/index',$data);
				$this->load->view('header/footer');
				

			}
			else
			{
				redirect(base_url().'main/login');
			}
		}

			public function enter1(){//option 2
			if ($this->session->userdata('admin_name')!='')
			{
				$data['products']= $this->main_model->get_post();
				$data['category'] = $this->main_model->get_category();
				$this->load->view('header/headeradmin');
				$this->load->view('main/allproducts',$data);
				$this->load->view('header/footer');
				//echo "<h2>welcome- ".$this->session->userdata('username').'</h2>' ;
				//echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';

			}
			else
			{
				redirect(base_url().'main/login');
			}
		}

			public function signup(){//signup controller

			$data['title'] = 'Signup';

			$this->form_validation->set_rules('username','Username','required');

			if($this->form_validation->run()===FALSE){
			

		}
			else{

			$this->main_model->register();
			redirect('login');

		}
		}

			public function products(){//all product controller

			$data['products']= $this->main_model->get_post();
			$this->load->view('header/headeradmin');
			$this->load->view('main/allproducts',$data);
			$this->load->view('header/footer');


			}


			public function edit($id = NULL)//edit controller
		{
			$data['product'] = $this->main_model->edit_function($id);
			$data['category'] = $this->main_model->get_categories();
			if(empty($data['product'])){
				show_404();

			}
			$data['title'] = $data['product']['title'];
			$this->load->view('header/headeradmin');
			$this->load->view('main/edit', $data);
			$this->load->view('header/footer');




		}
		    public function admin_logout()//logout
    {
           
				$array_items = array(
				'admin_name', 
				'admin_password',
				'admin_type',
				'admin_id',
				'is_logged_in',
				);
        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Admin Signed Out Now!');
            redirect('login');
       
    }
    public function costumer_logout()//logout
    {
            $array_items = array(   
		
                        'cos_name',
                        'cos_password' ,
                        'cos_type',
                        'cos_id',
                        'cos_is_logged_in'
                        );
        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'costumer Signed Out Now!');
            redirect('login');
       
    }

    public function update(){//updat product controller


		$this->main_model->update_product();

		redirect('product');
	}


		public function delete($id)//delete product
		{
			$this->main_model->delete_product($id);
			redirect('product');
		}

		


			public function addcart(){//add cart controller

			$data['title']='Create Post' ;
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('description','Description','required');
			
			$this->form_validation->set_rules('price','Price','required');
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headerv1');
			$this->load->view('main/product', $data);
			$this->load->view('header/footer');
			}
			else{

			$this->main_model->add_cart();

			redirect('index');
			}
		}
			public function cart(){// fetch cart controller

			$data['product']= $this->main_model->get_cart();
			$this->load->view('header/headerv1');
			$this->load->view('main/cart', $data);
			$this->load->view('header/footer');
		
		}

		public function pay(){//total payment controller


				$data['product'] = $this->main_model->get_pay();
				$data['cart'] = $this->main_model->get_cart();

        
	 			$this->load->view('header/headerv1');
	 			$this->load->view('header/paytemplate');
    			$this->load->view('main/pay', $data);
    			$this->load->view('header/footer');
    
    }


    	public function billing(){//bill receipt

			$data['title']='Billing' ;

			$this->form_validation->set_rules('fullname','fullname','required');
			
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headerv1');
			$this->load->view('header/paytemplate');
			$this->load->view('main/pay', $data);
			$this->load->view('header/footer');
			}
			else{
		
			$this->main_model->add_billing();
			$this->main_model->update_cart();
			$this->main_model->delete_cart();
			 redirect('receipt');
			}
		}
			
		public function receipt(){//receipt form controller


			$data['receipt'] = $this->main_model->get_data();
	

			$this->load->view('header/headerv1');
			$this->load->view('header/paytemplate');
			$this->load->view('main/receipt',$data);
			$this->load->view('header/footer');




		}



		public function delete_cart()
		{
			
		
				
		
			redirect('index');
		}

		public function removecart($id)//remove cartproduct
		{
			$this->main_model->remove_cart($id);
			redirect('cart');
		}
	
	

		public function viewcategory($name= NULL){ //view by category

			$data['cat'] = $this->main_model->view_category($name);
			$data['category'] = $this->main_model->get_category();
		
			if(empty($data['cat'])){

				redirect('index');

	
			}
			
			$this->load->view('header/headerv1');
			$this->load->view('header/sidebar');
			$this->load->view('main/category', $data);
			$this->load->view('header/footer');
			

		}
		public function addcategory(){//Add category 

			$data['title']='Billing' ;
			$this->form_validation->set_rules('name','Name','required');
			
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headeradmin');
			$this->load->view('main/addcategory', $data);
			$this->load->view('header/footer');
			}
			else{
			$this->main_model->add_category();
			
			redirect('categories');
			}
		}
		public function allcategory(){// fetch all category controller

			$data['category']=$this->main_model->all_category();

			$this->load->view('header/headeradmin');
			$this->load->view('main/allcategories',$data);
			$this->load->view('header/footer');
		}

		public function addsale(){// insert sale controller

			$data['title']='Add sales' ;
			$this->form_validation->set_rules('product','Product','required');
			
			if($this->form_validation->run()===FALSE)
			{
			$this->load->view('header/headerv1');
			$this->load->view('main/receipt', $data);
			$this->load->view('header/footer');
			}
			else{
			$this->main_model->add_sales();
			
			redirect('index');
			}
		}

		public function allorder(){//all product controller

			$data['sale']= $this->main_model->get_allorder();
			$this->load->view('header/headeradmin');
			$this->load->view('main/allsale',$data);
			$this->load->view('header/footer');


			}


			public function sale(){//all product controller

			$data['sale']= $this->main_model->get_allsale();
			$data['total'] = $this->main_model->get_allincome();
			$this->load->view('header/headeradmin');
			$this->load->view('main/sale',$data);
			$this->load->view('header/footer');


			}



			public function search() { 

        $search_data = $_POST['search_data'];

        $query = $this->main_model->get_live_items($search_data);

        foreach ($query as $row):



            echo "<li><a href='http://localhost/Eshop/search/$row->id'>" . $row->title . "</a></li>";
            

        endforeach;
    
}
   
    	public function search_product($id = NULL){

    		$data['product'] = $this->main_model->get_titleproduct($id);
    		$data['category'] = $this->main_model->get_category();	

    	if (empty($data['product'])) {
    	show_404();
    	} else {

    			$this->load->view('header/headerv1');
				$this->load->view('header/sidebar');
				$this->load->view('header/search');
				$this->load->view('main/search',$data);
				$this->load->view('header/footer');
    	}
    }

    public function updatequantity(){//updat product controller


		$this->main_model->update_quantity();

		redirect('cart');
	}


	public function getsms($id = NULL){//get data for sms

    		$data['sms'] = $this->main_model->get_sms($id);

    	if (empty($data['sms'])) {
    	show_404();
    	} else {

    			$this->load->view('header/headeradmin');
			
				$this->load->view('main/sms',$data);
				$this->load->view('header/footer');
    	}


	}

	public function itextmoaction(){

		$this->load->view('main/itextmo');

	

	$number=$_POST['number'];
	$message=$_POST['message'];




	$send = itext();
	$send->sendMsg($number,$message,'TR-MONIC851230_P5X52');

	$this->main_model->update_status();	
	redirect('order');
	}










		
}