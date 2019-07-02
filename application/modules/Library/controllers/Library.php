<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('Library_model','library');
		}
	
		// List all your books
		public function bookList( $offset = 0 )
		{
			$data['bookData'] = $this->library->bookList();
			$this->load->view('book_list', $data);
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
