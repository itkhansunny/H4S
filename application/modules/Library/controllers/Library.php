<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('Library_model','library');
			$this->load->model('Home/Home_model','home');
		}
	
		// List all your books
		public function bookList( $offset = 0 )
		{
			$data['bookData'] = $this->library->bookList();
			$this->load->view('book_list', $data);
		}

		// Add book
		public function addBook()
		{
			$data['categoriesData'] = $this->library->getCategoryList();
			$data['authorsData'] = $this->library->getAuthorList();
			$this->load->view('book_add', $data);
			
		}

		// Store book
		public function storeBook()
		{
			$this->form_validation->set_rules('name','Book Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('category','Category Name','trim|required');
			$this->form_validation->set_rules('author','Author Name','trim|required');
			$this->form_validation->set_rules('tbook','Total number of book','trim|required');
			$this->form_validation->set_rules('bookid','Book ID','trim|required');
			$this->form_validation->set_rules('isbn','Book ISBN','trim');
			
			if ($this->form_validation->run()==FALSE) {
				$data['categoriesData'] = $this->library->getCategoryList();
				$data['authorsData'] = $this->library->getAuthorList();
				$this->load->view('book_add',$data);
			}
			else {
					if ($this->library->bookSave()){
					#Image Upload
					$id = $this->db->insert_id();
					$bid= $this->input->post('bookid');
					if(!is_dir("assets/upload/books/$bid")){
						if(mkdir("assets/upload/books/$bid",0775)){
							$config['upload_path'] 	= './assets/upload/books/'.$bid;
							$config['allowed_types']= 'jpg';
							$config['max_size']	= '500';
							$new_name = date('dmY').time();
							$config['file_name'] = $new_name;
							if($this->input->post('bookImage')==null){
								$config['file_name'] = "";
							}
							$this->load->library('upload', $config);
								if (!$this->upload->do_upload('bookImage')):
									$data['msg_error'] = $this->upload->display_errors();
									$this->load->view('book_add', $data);
								endif;
								$upload_data = $this->upload->data();
								$file_name = $upload_data['file_name'];
								if($this->library->setPhotoPath($id,$file_name)){
									redirect('library/bookList');
								}else{
									$data['msg_error'] = 'Unable to upload and update book\'s image' ;
									$this->load->view('book_add',$data);
								}
							}else{
								$data['msg_error'] = 'Unable to create folder to store book\'s image' ;
								$this->load->view('book_add',$data);
							}
					}else{
						$config['upload_path'] 	= './assets/upload/books/'.$bid;
						$config['allowed_types']= 'jpg';
						$config['max_size']	= '500';
						$new_name = date('dmY').time();
						$config['file_name'] = $new_name;
						if($this->input->post('bookImage')==null){
							$config['file_name'] = "";
						}
						$this->load->library('upload', $config);
							if (!$this->upload->do_upload('bookImage')):
								$data['msg_error'] = $this->upload->display_errors();
								$this->load->view('book_add', $data);
							endif;
							$upload_data = $this->upload->data();
							$file_name = $upload_data['file_name'];
							if($this->library->setPhotoPath($id,$file_name)){
								redirect('library/bookList');
							}else{
								$data['msg_error'] = 'Unable to upload and update book\'s image' ;
								$this->load->view('book_add',$data);
							}
							
					}
				}
				else{
					#insert error
					$data['msg_error'] = 'Something may wrong';
					$this->load->view('book_add',$data);
				}				
			}
		}
	
		// Create category
		public function category()
		{
			$data['categoriesData'] = $this->library->getCategoryList();
			$this->load->view('categories_add', $data);
			
		}

		// Store Category
		public function storeCategory()
		{
			$this->form_validation->set_rules('name','Category Name','trim|required|min_length[3]');

			if ($this->form_validation->run()==FALSE) {
				$data['categoriesData'] = $this->library->getCategoryList();
				$this->load->view('categories_add',$data);
			}
			else {
				if ($this->library->saveCategoryData()){
					redirect('library/category');
				}else{
					$data['msg_error'] = 'Unable to save new category' ;
					$data['categoriesData'] = $this->library->getCategoryList();
					$this->load->view('categories_add',$data);
				}
			}
		}
	
		// Update Category
		public function updateCategory( $id = NULL )
		{
			$data['categoryData'] = $this->library->getCategoryData($id);
			$this->load->view('categories_update',$data);
		}

		// Update category store 
		public function updateCategoryStore()
		{
			$id = $this->uri->segment(3);
			$this->form_validation->set_rules('name','Category Name','trim|required|min_length[3]');
			if ($this->form_validation->run()==FALSE) {
				$data['categoryData'] = $this->library->getCategoryData($id);
				$this->load->view('categories_update',$data);
			}
			else {
				$data = array(
					'name'			=>$this->input->post('name'),
					'udate'			=> time(),
				);
				if($this->library->updateCategoryStore($id,$data)){
					redirect('library/category');
				}else{
					$data['categoriesData'] = $this->library->getCategoryList();
					$this->load->view('categories_add',$data);
				}
			}
		}
	
		// Delete category
		public function deleteCategory( $id = NULL )
		{
			if($this->library->deleteCategory($id))
			{
				$this->session->set_flashdata('msg_success', 'Category delete successful');
				redirect('library/category');
			}else{
				$this->session->set_flashdata('msg_success', 'Unable to delete category');
				redirect('library/category');
			}
		}
		
		// Create author
		public function author()
		{
			$data['authorsData'] = $this->library->getAuthorList();
			$this->load->view('authors', $data);
			
		}

		// Store author
		public function storeAuthor()
		{
			$this->form_validation->set_rules('name','Author Name','trim|required|min_length[3]');

			if ($this->form_validation->run()==FALSE) {
				$data['authorsData'] = $this->library->getAuthorList();
				$this->load->view('authors',$data);
			}
			else {
				if ($this->library->saveAuthorData()){
					redirect('library/author');
				}else{
					$data['msg_error'] = 'Unable to save new author' ;
					$data['authorsData'] = $this->library->getAuthorList();
					$this->load->view('authors',$data);
				}
			}
		}
	
		// Update author
		public function updateAuthor( $id = NULL )
		{
			$data['authorData'] = $this->library->getAuthorData($id);
			$this->load->view('author_update',$data);
		}

		// Update author store 
		public function updateAuthorStore()
		{
			$id = $this->uri->segment(3);
			$this->form_validation->set_rules('name','Author Name','trim|required|min_length[3]');
			if ($this->form_validation->run()==FALSE) {
				$data['authorData'] = $this->library->getAuthorData($id);
				$this->load->view('author_update',$data);
			}
			else {
				$data = array(
					'name'			=>$this->input->post('name'),
					'udate'			=> time(),
				);
				if($this->library->updateAuthorStore($id,$data)){
					redirect('library/author');
				}else{
					$data['authorsData'] = $this->library->getAuthorList();
					$this->load->view('authors',$data);
				}
			}
		}
	
		// Delete author
		public function deleteAuthor( $id = NULL )
		{
			if($this->library->deleteAuthor($id))
			{
				$this->session->set_flashdata('msg_success', 'Author delete successful');
				redirect('library/author');
			}else{
				$this->session->set_flashdata('msg_success', 'Unable to delete Author');
				redirect('library/author');
			}
		}
		
		
}
