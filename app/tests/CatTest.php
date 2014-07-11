<?php
	class CatTest extends TestCase{
		/**
		 * 测试
		 * @var [type]
		 */
		public function testIndex(){
			$response=$this->call('GET', 'test');
			  
		     	$this->assertViewHas('posts');
		  
		     	// getData() returns all vars attached to the response.
		  	  $posts = $response->original->getData()['posts'];
		  
		   	 $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $posts);
		}

		/**
		 * 测试两个方法看行不行
		 * @return [type] [description]
		 */
		/*public function testaa(){
			$this->call('GET','gg');
		}*/
	}