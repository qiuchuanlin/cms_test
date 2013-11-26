<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	/**
	 * 自己添加的方法，用来改写$this->call方法
	 * @param  string $method 调用时使用的方法名
	 * @param  array $args   就是自己设定的多种方法的集合
	 * @return mix         包装后的方法
	 *
	 * 注意：测试无效！
	 */
	public function __call($method, $args)
	{
	    if (in_array($method, ['get', 'post', 'put', 'patch', 'delete']))
	    {
	        return $this->call($method, $args[0]);
	    }
	 
	    throw new BadMethodCallException;
	}

}
