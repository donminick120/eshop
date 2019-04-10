	<?php 

class Main_model extends CI_Model{
	

	public function create_post($upload_image)
	{
		$data = array(
		'title'=> $this->input->post('title'),
		'description'=>$this->input->post('description'),
		'quantity'=>$this->input->post('quantity'),
		'price'=>$this->input->post('price'),
		'category'=>$this->input->post('category'),
		'upload-photo'=>$upload_image
		);
		return $this->db->insert('products',$data);
	}
	public function get_post()
	{
		$this->db->order_by('id desc');
		$query = $this->db->get('products');
		return $query->result_array();
	}


	public function get_product($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('products.id','DESC');
			$this->db->join('categories', 'categories.id = product.category_id');
			$query = $this->db->get('products');
			return $query->result_array();
			}
		$query = $this->db->get_where('products', array('id' => $id));
		return $query->row_array();
		}


		public function can_login($username,$password){
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('users');
		//select * from users where username=$username and password=$password
		if ($query->num_rows()>0) {
			return true;
		} else {
			return false;
		}
		

	}
		public function register(){
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'address' => $this->input->post('address'),
			'fone'=> $this->input->post('number'),
			'type' => 'costumer'
		);
		return $this->db->insert('users',$data);
	
	}
		public function edit_function($id = FALSE){
			if($id === FALSE){
				$this->db->order_by('products.id','DESC');
			
				$query = $this->db->get('products');
				return $query->result_array();
			}
			$query = $this->db->get_where('products', array('id' => $id));
			return $query->row_array();
		}

	function validate($username, $password)
	{
		
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		return $query->result();	
	}
	/*Get Session values */
		
	function get_id($username, $password)
	{
		
		$this->db->where('password', $password);
		$this->db->where('username', $username);	
		return $this->db->get('users')->result();
				
	}


	public function update_product(){
		$product = url_title($this->input->post('title'));
			
			$data = array(
				'title' => $this->input->post('title'),
				'quantity' => $this->input->post('quantity'),
				'price' => $this->input->post('price'),
				'description'=> $this->input->post('description'),
				'id' => $this->input->post('id')

			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('products', $data);
		}

		public function delete_product($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('products');
			return true;
		}

		
			public function get_categories(){
			$this->db->order_by('id');
			$query = $this->db->get('categories');
			
			return $query->result_array();
		}





			public function add_cart()
	{
		$data = array(
		'product'=> $this->input->post('title'),
		'description'=>$this->input->post('description'),
		'username'=>$this->input->post('username'),
		'price'=>$this->input->post('price'),
		'upload_photo'=>$this->input->post('photo'),
		'quantity'=> $this->input->post('quantity'),
		'status'=>'1'

		);

		return $this->db->insert('cart',$data);
	}

		

		public function get_cart()
		{
		$username = $this->session->userdata('cos_name');

			$query = $this->db->get_where('cart', array('username' => $username));

			return $query->result_array();

		}

		public function get_pay()
		    {
	$status='1';		    	
	$username = $this->session->userdata('cos_name');
    $query = $this->db->select('price,product,SUM(price*quantity) as total', FALSE)
    ->from('cart')
    ->where('username',$username)

    ->get();
                                            
    return $query->row_array();

    }



    public function get_data(){

    	$username = $this->session->userdata('cos_name');
		$this->db->order_by('sale.id','DESC');
    	$query = $this->db->get_where('sale', array('session' => $username));
                                            
    return $query->row_array();
    }

    public function add_billing()
	{$username = $this->session->userdata('cos_name');	
		$data = array(
		

		'fullname'=> $this->input->post('fullname'),
		'email'=>$this->input->post('email'),
		'address'=>$this->input->post('address'),
		'city'=>$this->input->post('city'),
		'state'=>$this->input->post('state'),
		'zipcode'=>$this->input->post('zip'),
		'card_name'=>$this->input->post('cardname'),
		'credit_card'=>$this->input->post('cardnumber'),
		'exp_month'=>$this->input->post('expmonth'),
		'exp_year'=>$this->input->post('expyear'),
		'cvv'=>$this->input->post('cvv'),
		'session'=>$username
		);
		return $this->db->insert('billing',$data);
	}

	public function update_cart(){
		$username = $this->session->userdata('cos_name');
		 $number = $this->session->userdata('cos_number');

		$data = array(
			'product' => $this->input->post('product'),
			'price' => $this->input->post('total'),
			'session' => $username,
			'number' => $number
		);
		return $this->db->insert('sale',$data);

	}



	public function get_billing()
	{
		$username = $this->session->userdata('cos_name');	

		$query = $this->db->get_where('cart', array('username' => $username,'status' => '1'));

		return $query->result_array();

		


	}


	public function get_receipt()
	{
		$username = $this->session->userdata('cos_name');	

		$query = $this->db->get_where('cart', array('username' => $username,'status' => '0'));

		return $query->result_array();

		


	}
		public function delete_cart()
		{
			$username = $this->session->userdata('cos_name');	
			$this->db->where('username',$username);
			$this->db->delete('cart');
			return true;
		}
	
	 public function remove_cart($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('cart');
			return true;
		}

		public function get_category()
	{
			$this->db->order_by('id desc');
			$query = $this->db->get('categories');
			return $query->result_array();
	}

	public function view_category($name = FALSE){
			if($name === FALSE){
				$this->db->order_by('products.id','DESC');
				$query = $this->db->get('products');
				return $query->result_array();
			}
			$query = $this->db->get_where('products', array('category' => $name));
			return $query->result_array();
		}

		 public function add_category()
	{	
		$data = array(
		

		'name'=> $this->input->post('name'),
	
		);
		return $this->db->insert('categories',$data);
	}

	public function all_category()
	{
			$this->db->order_by('id desc');
			$query = $this->db->get('categories');
			return $query->result_array();
	}


	public function get_allsale()
	{
		$this->db->order_by('date_sale','DESC');
		$query = $this->db->get_where('sale', array('status' => '1'));			
		return $query->result_array();
	}

	public function get_allorder()
	{
		$this->db->order_by('date_sale','DESC');
    	$query = $this->db->get_where('sale', array('status' => ''));
			
		return $query->result_array();
	}




	

	public function get_allincome()
	{   	
	
    $query = $this->db->select('SUM(price) as total', FALSE)
    ->from('sale')
    ->where('status','1')
    ->get();
                                            
    return $query->row_array();

    }

    function get_live_items($search_data) {

        $this->db->select("title,description,price,upload-photo,id");

        $this->db->from('products');
        $this->db->group_start();
        $this->db->like('title', $search_data);
        $this->db->or_like('category', $search_data);
        $this->db->group_end();

        $this->db->limit(10);
        $this->db->order_by("id", 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    	public function get_titleproduct($id = FALSE){
			if($id === FALSE){
				$this->db->order_by('products.id','DESC');
				$query = $this->db->get('products');
				return $query->result_array();
			}
			$query = $this->db->get_where('products', array('id' => $id));
			return $query->result_array();
		}
		public function update_quantity(){

		
			
			$data = array(
				
				'quantity' => $this->input->post('quantity'),
				

			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('cart', $data);
		}


			public function get_sms($id = FALSE){
			if($id === FALSE){
				$this->db->order_by('sale.id','DESC');
				$query = $this->db->get('sale');
				return $query->result_array();
			}
			$query = $this->db->get_where('sale', array('id' => $id));
			return $query->row_array();
		}


		public function update_status(){

		
			
			$data = array(
				
				'status' => '1',
				

			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('sale', $data);
		}

}