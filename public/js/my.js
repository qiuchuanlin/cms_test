$(function(){
	/**
	 *－－－－－－－－－－－－－－－－－－－－－－－－－－－－
	 *后台模板公用部分(包括左边和上边的导航，按钮等)，js效果
	 *－－－－－－－－－－－－－－－－－－－－－－－－－－－－
	 */
     
	 /**
	  * 作用：点击替换主内容区iframe的内容
	  * 说明：
	  * 	这里用了一个对象，将所有需要切换页面的li的id，当成属性装起来
	  * 	那么只要点击li,而id符合的，就去对应的页面
	  * 	以此来简化代码
	  */
	 $("li").click(function(){
	 	var obj={
	 			//后台首页	
	 			'mainPage':"index-content",
	 			//编辑个人资料页面
	 			'pro':'profile',
	 			//添加后台管理员页面
	 			'addAdmin':	'users/create',
	 			//后台管理员列表
	 			'showAdmin':'users/1',
	 			//前台用户列表
	 			'showUser':'users/2',
	 			//添加前台用户
	 			'addUser':'adduser',
	 			//管理顶级分类
	 			'addTopCategory':'category/add-top-category',
	 			//前台导航栏项添加url页面[注意,这个li跟上面这些li不一样,上面的都是二级li,这个一级li]
	 			'navigator_url':'front/nav-url'
	 		};
	 	//得出当前li的id	
	 	var id=$(this).attr("id")?$(this).attr("id"):'';

	 	//此处为内容管理的所有页面(特殊情况:这些也都是通向一个控制器方法，页面是相同的，输出的数据不同，由后台来管理)
	 	if(id.substring(0,7)=='content'){
	 		//取出作为标识的类id
	 		var parameter=id.substring(7);
	 		//更改iframe的src让内容管理页面显示出来
	 		$("#content iframe").attr("src","http://cms/admin/content/index/"+parameter);	
	 	}

	 	//更改iframe的src为对应页面(一般情况)
	 	if(id in obj){
	     	$("#content iframe").attr("src","http://cms/admin/"+obj[id]);
	 	}
	 });
	 
	/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
	 /**
	  * 作用：   ＊添加二级分类，控制表单显示和隐藏＊
	  */
	 $("a.addCategory").click(function(){
	 		//得到放在li上的标记
	 		var pid=$(this).parent().attr('tableId');
	 		//显示对应的表单
	 		//从这里来看对应的添加二级分类的div早就随着外面的li一起循环生成了,只不过是隐藏的.所以它本身就是固定了对应.
	 		//两者的联系就是一个私有属性,tableId,在循环的时候应该是分类id,给li放一个,给form放一个.
	 		//然后现在只要找相同的tableId显示出来就好了.
	 		var form=$("form[tableId="+pid+"]");
	 		form.slideToggle("normal");
			 
			 /**
			  * 添加分类ajax到服务器
			  * 	注意:这里用了on来写,
			  * 		这整个添加子类的div是隐藏的,本来是普通的click写法,也能生效的.
			  * 		因为隐藏也还是在页面上,是跟随所有html一起生成的.并不是算后生成的.
			  * 		但是时隔多日,再使用时,发现已经点击没有效果了.改成on则可以.
			  *
			  * 		现在已经明白原因:
			  * 			整个form套在div里面,然后是循环输出的.
			  * 			而在form的提交按钮以及文本输入框都是写的id,
			  * 			这里的代码一开始找元素时,也是用的id.
			  * 			但是可以想到.因为是循环,会出现多个同样的id,多个同样的button和input.
			  * 			这样这个id失去了唯一性.如果用id去找的话,可以找到一大堆button和input,而不仅是一个.
			  * 			所以那样的话,直接用$("#id").click,根本不知道你要的是哪个,很可能是选择第一个返回给你.
			  * 			如果点击的不是第一个,那么就没有反应.
			  *    	
			  * 	   		而on的话,是利用冒泡原理来激活事件的.也就是说,你点的并不是实际上给出来的.
			  * 	   		但是它冒泡到了对应的button位置.所以这样绑定,点击有反应
			  * 	   		但是根据上面的结论,它是冒泡到第一个位置时,就是对应位置时,激活了.
			  * 	   		但这个激活的可并不一定是你真正点击的那个.
			  * 	   		所以再往下取form表单上填写的内容时,会发现对不上.因为它找的可能根本不是你点的那个.
			  * 	   	
			  * 	   	解决办法:
			  * 	   		所有id改成class,然后通过对应的form来找对应的button产生click事件.
			  * 	   		通过上面代码找出来的form是唯一的,它的button也是唯一的.这样就能够对应了.
			  *
			  * 		------------------------------------
			  * 		＊这个问题解决用了将近两小时,应该意识到严重性.
			  * 		所有需要循环的元素,一律用class,别用id.＊
			  * 		--------------------------------------
			  *
			  * 		之所以以前测试可以,应该是当时只用了一个类来测试.也就是说只循环出一个.那么可以对应.
			  */	
			 // $("body").on("click","#catSub",function(){
			 form.find(".catSub").click(function(){
			 		//得到该类的id
			 		var id=$(this).parent().attr("tableId");
			 		//表单填写内容
			 		var name=form.find(".catName").val();			//类名
			 		var nav=$("input[name=nav]").val();				//是否添加到导航
			 		var final=$("input[name=final]").val()			//是否最终分类
			 		if(!name){
			 			alert('类名不能为空！');
			 		}else{
				 		$.ajax({
				 			type:"post",
				 			url:'http://cms/admin/category/add-category',
				 			data:'&id='+id+'&category_name='+name+'&final='+final+'&nav='+nav,
				 			success:function(response){
				 				if(response==1){
				 					alert('添加成功,刷新页面可见');
				 				}else{
					 				alert(response+'aaaaa');	
				 				}
				 			}
				 		});
				 	}
			 });
	 });

		 
	/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

	/**
	 * 列表中＊添加子类＊
	 * 
	 * [复习]:  往往再次回来看代码,总有些常见问题,又引起注意,比如事件函数如果带参数,
	 * 			那么第一个参数必定是事件对象,不管它是写成event还是这里的e,都一样.
	 * 			形参名字没意义,它所代表的东西是固定的,就是事件对象.
	 */
	$("body").on("click","button.addc",function(e){
		//获得当前分类id
		var id=$(this).attr("categoryId");
		//获得当前坐标：
		var y=e.pageY;
		//滑动显示表单
		$("#addChild").animate({top:+y,left:923},1000);
		
		/**
		 * ajax传送后台
		 */
		$("#addChildSubmit").click(function(){
			var category_name=$("#listadd").val();
			var nav=$("#addChild input[name=nav]:checked").val();
			// var final=$("input[name=final]").is(":checked")?1:0;
			// 注意这里最后将容器写进去,确保找到的input是唯一的,我估计上面还有name=final的input
			// 因为不写容器限定的话,始终下面判断返回1.
			if($("#addChild input[name=final]").is(":checked")!=false){
				var final=1;
			}else{
				var final=0;
			}

			if(!category_name){
				alert("类名不能为空！");
			}else{
				$.ajax({
					type:'post',
					url:'http://cms/admin/category/add-child-category',
					data:'&id='+id+'&category_name='+category_name+'&nav='+nav+'&final='+final,
					success:function(response){
						if(response==1){
							alert("添加成功");
							//这里打算添加完成后刷新页面,让新数据显示出来.
							//1,主内容是iframe里面的,所以应该改iframe的src,而不是刷新顶级窗口.
							//但是本身在iframe中是操作不到那个iframe的.所以要用parent去找
							$(parent.document).find("#content iframe").attr("src","http://cms/admin/category/add-top-category");
						}else{
							alert(response);
						}
					}
				});
			}
		});
	});

	/**
	 * 滑动回去
	 */
	$("body").on("click","#cancle",function(){
		$("#addChild").animate({left:1264},1000);
	});
	/***************************************************************************/
	
	/**
	 * 2014/6/27列表中修改分类的滑动框
	 * 			－－－－－－－－－－－
	 */
	 	//点击'修改'按钮时,让该框显示出来.
	 	$("body").on("click","button.editbtn",function(event){
	 		//有种特殊情况,有可能对方点击了一个更改按钮,然后没有操作,又点击另外一个更改按钮.
	 		//			------------------------------------------------------
	 		//这时候内容应该是不同的.因为前一个可能有子类,后一个没有.
	 		// 这种情况,应该判断,是否是多次点击.为函数设定一个属性.
	 		// -------------------------------------------
	 		// 这个属性上面放的是当前第几个按钮被点击.
	 		// --------------------------------
	 		// 同一个按钮没关系,数据都是一样的.
	 		// ---------------------------
	 		

	 		//定义一些需要多次使用的元素变量:
	 		var startChange=$("#startChange");		//更改分类复选框
	 		var mself=$("#moveSelf");				//移动自身项那个div
	 		var ifFinal=$("div.ifFinal");			//子类操作那个div
	 		var	doChild=$("input[name=doChild]");	//子类操作里面的radio
	 		var childCategory=$("#childCategory");	//子类移动select
	 		self_id=$(this).attr("data-id");		//获得当前按钮对应数据id,以备移动之用

	 		//当前点击的是第几个button 
	 		order=$("button.editbtn").index($(this));	

	 		//匹配属性里面的order,看是否同一个
	 		if(arguments.callee.order && order!=arguments.callee.order){
	 			//这是不同的,表示点击了其他的按钮.那么整个滑动框内的数据要初始化.
	 			//该隐藏的要隐藏:
	 			mself.hide();
	 			ifFinal.hide();
	 			$("#relationTable").hide();
	 			//复选框要取消选中
	 			startChange.attr("checked",false);
	 			//有可能选中了某些隐藏项,也得清掉.
	 			doChild.attr("checked",false);		//radio取消选中
	 			childCategory.val(0);				//select复原
	 			$("#selfCategory").val(0);
	 			$("#relationTable").val("default");
	 		}

	 		//获得对应按钮的类名,给input选框填上
	 		categoryName=$(this).attr("data-name");
	 		$("#cname").val(categoryName);	

	 		//滑动到当前按钮的下面,以点击位置来算
	 		var x=event.pageX;				//视口横坐标
	 		var y=event.pageY;				//视口纵坐标

	 		//-----------------------------------------------------
	 		//这个展示了如何从视口坐标取到绝对文档坐标.
	 		//但对于现在的效果不怎么好.因为是以鼠标点击来确定位置,那么可以直接用这个坐标做基准来调整
	 		//其实是有一个误解,jquery的pageX和pageY直接就是文档坐标.而不是js的clientX,clientY
	 		//-----------------------------------------------------------------------
	 		//
	 		//注意这里,因为内容是放在iframe中的,找滚动条却是主窗口的
	 		//所以得找到主窗口的window,即parent.
	 		// var ox=$(parent.document).scrollLeft();	//横向滚动条距离
	 		// var oy=parent.pageYOffset;				//纵向滚动条距离

	 		//视口坐标+滚动条坐标=文档坐标.用这个文档坐标来定义整个滑动框的position
	 		//具体什么位置,还得实际调整.
	 		// var realx=x+ox-150+'px';	
	 		// var realy=y+oy-110+'px';	
	 		//-------------------------------------------------------

	 		//然后调整滑动框的position,用animate产生滑动效果
	 		$("#editCotegory").show();
	 		$("#editCotegory").animate({"left":x-150,"top":y},1000);

	 		//标识,看是否多次点击.
	 		arguments.callee.order=order;
	 		
	 		/**
	 		 * 点击改变分类checkbox,激活该js代码
	 		 * 注意:这里其实是一个闭包.如果是alert或者return一个值出去的话,事实上外面函数执行了几次,
	 		 * 这里也会执行几次,也就是说可能alert多个值.不过对于现在效果的实现没有多大影响.
	 		 * 这里不返回值,所以就写在闭包里算了.
	 		 * 也可以写在click函数外面,那样的话就没有闭包的影响.只要click函数的变量改成全局的就行了.
	 		 * 闭包的话,还是很麻烦,还是写到外面好了...$("#startChange").change(function()
	 		 */
			
	 	});
		
		//点击改变分类checkbox,激活该js代码,因为要用到上面函数的变量.
		//所以上面有些变量要改成全局的.
 		$("#startChange").change(function(){
 			//判断是选中还是取消.
 			if($(this).is("input:checked")){
 				//选中,让改自身分类的div显示出来
 				$("#moveSelf").show();
 				//判断是否有子类,这个有私有属性在'修改'按钮上.
 				if($("button.editbtn").eq(order).attr("data-final")==1){
 					//表明有子类,显示出移动子类的选项
 					$("div.ifFinal").show();
 				}
 			}else{
 				//取消checkbox选框的选中状态,则再次隐藏.
 				$("#moveSelf").hide();
 				$("div.ifFinal").hide();
 				$("#relationTable").hide();
 				//有可能选中了某些隐藏项,也得清掉.
 				$("input[name=doChild]").attr("checked",false);		//radio取消选中
 				$("#childCategory").val(0);							//select复原
 				$("#selfCategory").val(0);
 				$("#relationSel").val("default");
 			}
 		});

 		/**
 		 * 当选择自身类移动为顶级分类时,让选择内容表的select显示出来
 		 */
 		$("#selfCategory").change(function(){
 			if($(this).val()=="top"){
 				$("#relationTable").show();
 			}else{
 				//否则隐藏,并清空数据
 				$("#relationTable").hide();
 				$("#relationSel").val("default");
 			}
 		});
		
		/**
		 * ajax提交数据
		 */
		$("#chcategory").click(function(){
			//验证数据:
			//1,有子类时的操作只能三个选一个.如果选了radio中的值,又去选下拉框,要提醒
			//	下拉框的默认选项值是0
			//	注意,这里$("#childCategory").val()在下面赋值之后,再次点击的时候,虽然值明确是0,
			//	但是居然判断条件会成立.所以只能用!=false来判断.
			//	测试表明js的select.val()即使是0用bool的方式判断也是正值.
			if($("input[name=doChild]").is("input:checked") && $("#childCategory").val()!=false){
				alert("子类操作只能选一个");
				//将radio的选中状态取消
				$("input[name=doChild]").attr("checked",false);
				//下拉框也回复初始状态
				$("#childCategory").val(0);
				//结束代码
				return;
				
			//2,另外有个与父类一起移动的选项,如果这个选中了,而父类却没有选移动到哪.就不符合逻辑
			}else if($("#selfCategory").val()==false && $("input[name=doChild]").filter(":checked").val()==2){
				alert("自身没有选择移动到哪!");
				//清空数据
				//将radio的选中状态取消
				$("input[name=doChild]").attr("checked",false);
				//下拉框也回复初始状态
				$("#childCategory").val(0);
				//结束代码
				return;

			//3,＊＊＊＊＊当选择自身成为顶级分类时,却没有选择对应的内容表时,得提醒
			}else if($("#selfCategory").val()!=false && $("#relationSel").is(":visible") && $("#relationSel").val()=='default'){
				alert("顶级分类需要选择对应的内容表!");
				return;	

			}else{
				//分类名虽然这边给设定写上了原名,但有可能出现删除了input框的内容,却没有再写上的情况
				if(!$("#cname").val()){
					alert("分类名不能为空!");
					return;
				}
			}



			//获得其他数据
			var category_name=$("#cname").val();		//类名
			//准备一个变量拼接数据,根据laravel传参数的特点拼接成path_info的格式,而不是常见的query_stirng格式
			//而且控制器的参数是固定的.所以这里即使没有值,但有可能有值的,都得给个字符来占位.随便用一个字符串'noValue'.
			//		上面所说的是原来的构想.但实际要传的参数超过了5个laravel的controller方法就会出错,显示method not found
			//		所以,将所有数据拼接成一个字符串,用&来连接

			var str="";									//定义连接字符串
			
			if(category_name!=categoryName){			//新类名
				str="category_name&"+category_name+'&';	//判断下类名是否有改动,没改的话就不需要传入后台
			}

			str+="self_id&"+self_id;					//自身类的id

			var	self_move=$("#selfCategory").val();		//自身的目标类
			if(self_move!=false){
				str=str+"&self_move&"+self_move;
			}

			var relation=$("#relationSel").val();		//自身转成顶级分类后对应的内容表
			if(relation!='default'){
				str+="&relation&"+relation;
			}	

			var child_move=$("#childCategory").val();	//子类移动的目标类
			if(child_move!=false){
				str+="&child_move&"+child_move;
			}
			
			var child_other=$("input[name=doChild]:checked").val();	//子类其他操作,如删除,随父类一起移动等
			if(child_other){
				str+="&child_other&"+child_other;
			}	
			//ajax传输,这里用JQUERY.post()来做
			$.post("http://cms/admin/category/edit-category/"+str,function(response,status,xml){
				if(response==1){
					//移动成功的标志
					alert('修改成功,刷新可见!');
					//刷新页面,把效果显示出来
					$(parent.document).find("#content iframe").attr("src","http://cms/admin/category/add-top-category");
				}else{
					//错误信息
					alert(response);
				}
			});
		});



		/**
		 * 点取消按钮时,将滑动框给关了
		 */
		$("#canclechange").click(function(){
			//滑动回去,并隐藏
			$("#editCotegory").animate({"left":"1264px"},1000).hide("slow");
			//初始化数据
			//该隐藏的要隐藏:
			$("#moveSelf").hide();
			$("div.ifFinal").hide();
			$("#relationTable").hide();
			//复选框要取消选中
			$("#startChange").attr("checked",false);
			//有可能选中了某些隐藏项,也得清掉.
			$("input[name=doChild]").attr("checked",false);		//radio取消选中
			$("#childCategory").val(0);							//select复原
			$("#selfCategory").val(0);
			$("#relationSel").val("default");
		})		
	

	/*－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－**/

	/**
	 * 2014/6/29 ＊删除分类＊,当有子类时,弹出这个滑动框
	 */

	 //点击删除按钮开始运作
	 $("#list .delbtn").click(function(event){
	 	//先把多次要用的数据提取出来
	 	var category_id=$(this).attr("data-id");		//分类id
	 	var box=$("#deleteCategory");					//滑动框

	 	//如果要删除的话,子类移动的目标当中就不该还有当前类,所以下拉框必须去掉当前类
	 	//下拉框的option的value是与分类id对应的.
	 	//那么找到对应的option清除掉.
	 	$("#childmov option[value="+category_id+"]").remove();

	 	//当有一个box正在显示的时候,也就是已经点了一个删除的时候,没有提交,box一直在显示.
	 	//此时又再去点击其他的删除按钮的时候,不要再显示另一个box,强制必须一个一个处理
	 	if(box.is(":visible")){
	 		return false;
	 	}
	 	
	 	//判断是否有子类,没有子类的话,直接把类id传到后台删除就行了,有子类才要选择
	 	if($(this).attr("data-final")!=0){
	 		//这是有子类的情况.让滑动框显示出来
	 		//先取出当前鼠标点击的位置,以这个位置来决定滑动框出现的位置
	 		var x=event.pageX;							//鼠标横坐标
	 		var y=event.pageY;							//鼠标纵坐标
	 		//改动box到这个坐标,滑动出来
	 		box.show();
	 		box.animate({left:x-200,top:y},1000);


	 		//ajax上传数据了
	 		$("#submitDelete").click(function(){
	 			//验证数据
	 			//子类操作有两个,如果两个都没选,就得提醒.
	 			if($("input[name=childdel]").is(":not(':checked')") && $("#childmov").val()==0){
	 				alert("没有选择子类操作!");
	 				return;
	 			}

	 			//还有一种情况,是两种都选
	 			if($("input[name=childdel]").is(":checked") && $("#childmov").val()!=false){
	 				alert("子类操作只能选一个!");
	 				//清空数据
	 				$("input[name=childdel]").attr("checked",false);	//取消选中
	 				$("#childmov").val(0);								//select还原选择
	 				return;
	 			}

	 			//拼接数据
	 			var str="&category_id="+category_id;					//当前分类id
	 			if($("input[name=childdel]").is(":checked")){
	 				//这个是选择删除子类
	 				str+="&action=remove";			
	 				//[后加] 当需要删除子类的时候,也是需要删除内容的,不过这里既然有当前分类的id,那么子类的内容表也是一样的
	 				//		就不需要再传一个relation内容表数据过去了.
	 			}
	 			if($("#childmov").val()!=0){
	 				//这个是移动子类,需要有目标类id
	 				var target_id=$("#childmov").val();
	 				str+="&target_id="+target_id;
	 			}

	 			//上传
	 			$.post("http://cms/admin/category/delete-category",str,function(response){
	 				//判断后台是否操作成功,成功后台是会给出数字1
	 				if(response==1){
	 					alert('删除成功!');
	 					//删除成功后,将box关掉,以便下次使用.直接刷新页面就好了,所有数据都刷新了
	 					$(parent.document).find("#content iframe").attr("src","http://cms/admin/category/add-top-category");
	 				}else{
	 					//错误信息
	 					alert(response);
	 				}
	 			});
	 				
	 		});

	 	//没有子类的情况,没有box滑动框,直接传送category_id回去就行了.
	 	//[后加] 这里其实忽略了一个情况,没有子类也就是最终类.它是有可能已经有内容在数据库的.
	 	//如果删除了该分类,数据库属于该类的内容也得删除,因为没有了类关联,不好输出.
	 	//所以应该弹窗给提醒一下,让对方确认是否删除.这个用confirm来弹窗,根据选择进行还是取消.
	 	}else{
	 		var answer=confirm("该类下可能有内容关联,确定要删除?");
	 			//然后这里判断返回是true还是false就知道对方的回应了
	 		if(answer){
	 			//肯定回答,那么去删除
		 		$.post('http://cms/admin/category/delete-category','&category_id='+category_id,function(response){
		 			//处理返回信息
		 			if(response==1){
		 				alert("删除成功!");
		 				//刷新,显示页面效果
		 				$(parent.document).find("#content iframe").attr("src","http://cms/admin/category/add-top-category");
		 			}else{
		 				//错误信息
		 				alert(response);
		 			}
		 		});
		 	}else{
		 		//如果取消了,那么,就是不删除,直接结束这段js代码就好了
		 		return;
		 	}
	 	}

	 	//点取消按钮的时候,关闭box
	 	$("#cancleDelete").click(function(){
	 		//滑动回去,并隐藏
	 		box.animate({left:1264,top:-23}).hide("slow");
	 		//清空数据
	 		$("input[name=childdel]").attr("checked",false);		//取消选中
	 		$("#childmov").val(0);									//还原select
	 	});
	 });


	/*－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－*/ 

	/**
	 * 2014/6-31	＊内容列表排序＊
	 */
	
	//改变下拉框时,将select的value传回后台,重新排序输出数据
	$("#timeorder").change(function(){
		//获得option的value值
		var timeOrder=$(this).val();
		//获得顶级分类id.因为显示页面这个方法一开始就设定了这个参数,所以调用这个方法时,还得传回去.
		//一个原因,是需要用到这个参数,另一个原因,这里ajax传的数据不当方法参数,而是直接input::get()来接收.
		//这样的话,如果没有参数,调用方法,就参数不符了.
		//该参数写在select的私有属性上.
		var id=$(this).attr("data-id");	

		//尝试下改分页行不行,没用的,等回来时,已经刷新了模板,又重新生成了原来的分页结构.
		//也就是说还是那个$content->links().
		//应该在后台回来的时候带一个标识过来,表示现在是某一个条件下的分页.
		// $("#pageList").html("{{$content->apends(array('timeOrder'=>"+timeorder+"))->links()}}");

		//这个value有2个值:1代表按时间排序,最新的在前面,2代表最早的在前面.将数据传入后台
		//＊其实这里不应该用ajax,因为是要刷新页面,ajax的话,return回来的新页面不是刷新模板,而是返回到ajax.这样处理就很麻烦.
		//直接改变iframe的src刷新更简便.只是得把新的数据传到方法中.
		$(parent.document).find("#content iframe").attr("src","http://cms/admin/content/index/"+id+"?timeOrder="+timeOrder);
		
	});

	/**
	 * 2014/7-1 	＊单独显示一个子类的内容＊
	 */
	
	//其实思路和上面一样,改变select选择时,将新的数据传入显示内容的方法.以改变显示.
	//取得数据
	$("#chooseCategory").change(function(){
		var cid=$(this).val();
		//为了取值方便,同样在它上面放了一个要回传的顶级分类id
		var id=$(this).attr("data-id");

		//将参数重新带入iframe的src,实现刷新,显示新内容.
		//[后加]	有个特殊情况,后加一个选项,重新选择全部子类来输出.
		//那这种情况就和默认的显示内容是一样的了,在控制器里面是没有cid的情况就是那样,
		//所以src对应的url是不同的,需要判断下
		if(cid!="all"){
			//单独显示一类
			$(parent.document).find("#content iframe").attr("src","http://cms/admin/content/index/"+id+"?cid="+cid);
		}else{
			//显示全部,其实两段代码唯一的不同就是src,其实如果要写得更简洁,可以把src单独拿出来用个变量设置.
			$(parent.document).find("#content iframe").attr("src","http://cms/admin/content/index/"+id);
		}
	});


	/*－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－*/
	/**
	 *2014/7/2 ＊显示编辑内容页面＊ 
	 *
	 * 具体思路就是点击"修改"按钮时,弹出一个新的窗口,用于显示编辑页面.
	 * 但是考虑到以后会有很多种版块需要编辑内容--'版块'就是如有新闻的,有商城的,记住这个概念,以后不重复解释了
	 * 那么,也可以参照主页面内容区的做法,将版块与它的url,用一个对象来形成映射,这样都调用同一个方法,只是对应的url不同了.这样来减少代码
	 * ---------------------------------------------------------------------------------------------------------
	 * 判断的标准就是后台传到内容列表的relation变量,那在数据库中对应的是表名.
	 * ----------------------------------------------------------
	 * 在点击按钮时应该取到这个值,那么按钮就要有个私有属性来存放这个变量.
	 * ------------------------------------------------------
	 */	
	$("#contentTable .editContent").click(function(){
		//1,创建上面所说的映射对象,
		//注意:编辑都需要url上拼接一个内容表id,作为方法参数,那么这个变量就不要写在对象上了,也没法写,通用的部分写在对象上.
		//--------------------------------------------------------------------------------------------
		//id到后面来拼接上去.
		var relation_url={"news":"http://cms/admin/content/edit/"};

		//2,获取放到这个button私有属性上的数据,一个是对应的内容id,一个是对应的内容表relation.
		var id=$(this).attr("data-id");
		var relation=$(this).attr("data-relation");

		//3,判断这个版块,是否在上面的对象里.其实该对象是自己建立的,基本不会错.
		if(relation in relation_url){
			//4,弹出窗口显示编辑内容页面.这里因为调用控制器显示方法时,已经需要将id当参数传进去.所以id直接拼接到url上就行了
			//至于第二个参数的id,传不传无关紧要了.因为经过控制器方法后,需要的话就由控制器来给模板传参数了.
			window.showModalDialog(relation_url[relation]+id,[id],"dialogWidth:1000;dialogHeight:500");
			
			//不知道是laravel还是这个后台模板的原因,form里面的button,即使没有写type="submit",
			//也会当成submit来用.所以这个修改按钮点击时,会触发submit事件.
			//这里修改并不通过form.但是同一个内容列表页面后来添加了一个form表单,而这个form表单是将列表table包含在内.
			//也就是说此时修改按钮也是在form里面.所以点击修改按钮,不仅仅进来这个js方法,而且还会触发form表单提交.
			//当这个showModalDialog弹出页面被关掉,没有进行什么操作时,此时js运行结束,返回到模板,它就会去form action指定的url那里.
			//这显然和预期效果不一样.那个form按设计是由另一个submit来提交的.修改就是修改,而不是另个submit所进行的头条操作.
			//为了避免这样的结果,这里用了return false,来取消submit这个默认行为.
			
			return false;
		}else{
			//报个错
			alert("找不到页面.");
			return false;
		}
	});

	/**
	 *2014/7/2 ＊删除内容＊ 
	 *
	 * 这个可以仿效上面的方法,同样有很多版块的删除,用对象的relation映射对应的url.
	 * 不同的是,删除并不需要页面,直接到后台操作方法里去就行了.
	 */
	$("#home .deleteContent").click(function(event){
	//[后加] 上面修改那里已经解释过,同样的button按钮,可能是这个后台模板的原因,又或者是laravel的原因
	//		普通button也会被当成submit.所以在这个删除操作的时候,同样会被当作点击了一个form的提交按钮.
	//		这个form是用来做添加头条或者推荐的.那么,当点击删除内容按钮,除了去删除方法外,js返回之后,
	//		它还会去添加头条的方法.这是不符合期望的.
	//		上面修改操作是直接用return false来取消submit默认行为.
	//		这里也可以同样用一个return false.但是注意,不要写在if条件内,而应该写在整个事件函数的末尾.
	//		另外也可以用专门的取消事件行为的函数,如下:
		event.preventDefault();

	//1,创建映射对象:
		var relation_url={"news":"http://cms/admin/content/delete/"};
	
	//2,获得button上保存的数据	
	//	[需要什么数据，可以根据总结出来的流程变量原则来考虑,最后删除完刷新页面,那么就要getIndex方法,它是需要顶级分类id这个参数的]
	//	
		var id=$(this).attr("data-id");									//当前这条内容id
		var relation=$(this).attr("data-relation");						//顶级分类对应的内容表,可以用来判断是哪个版块的删除操作.
		var topId=$(this).attr("data-parentId");						//当前所有内容对应的顶级分类.这个用于回传到内容显示页面的方法,使其刷新页面,把删除效果显示出来

	//3,匹配对象属性名,如果对应,调用ajax传输数据.id参数同样拼接在url上面,
		//$.post的第二个参数本来就是传递数据的,不过已经拼接到url上的话,这个参数就可以省略了.
		//----------------------------------------------------------------------
		if(relation in relation_url){
			$.post(relation_url[relation]+id,function(response){
				if(response==1){
					//这个是删除成功,这个弹窗多了容易烦,真正项目考虑下去掉这个.
					alert("删除成功!");

					//应该刷新一下内容显示页面使更改表现出来.通过iframe来做.
					//内容首页的方法需要一个分类id参数,所以还得在button上放上那个东西再取一次.
					$(parent.document).find("#content iframe").attr("src","http://cms/admin/content/index/"+topId);
				}else{
					//报告错误信息
					alert(response);
				}	
			});
		}
		
		return false;
	});

	/**
	 * ＊2014/7/5 新闻内容列表头条/推荐,确定要哪一个操作＊
	 *
	 * 说明: 在内容列表这个table上每一行都加了一个复选框,
	 * 		通过选中复选框然后提交头条和推荐,可以将该条新闻设置为头条或者推荐.
	 * 		本来想用两个form来分别执行,但是因为复选框整个table都有.
	 * 		所以要取到复选框的值,必须要form包含整个table.
	 * 		一个form可以,两个form的话又不能嵌套.所以只好给出两个button.
	 * 		两个button都是submit.但是同一form.利用js来看点击的是哪个button,
	 * 		然后给个标识传到后台,让后台明白是进行哪项操作.
	 */
	$("button.btn1").click(function(){
		//[后加] 操作方法完成之后还得回显示方法,显示方法需要一个分类id参数
		//		所以放一个私有方法到button上,这里要获取到带回去.
		var id=$(this).attr("data-id");

		//两个button都有btn这个class,但还有另一个不同的class,那就是判断标准
		if($(this).hasClass("toutiaoBtn")){
			//头条操作.这里只要给后台一个标识就行了,同样挂到form的action后面,还是让它回去form提交
			//这里用action=toutiao这个参数表明是头条操作.
			$("#postToutiao").attr("action","http://cms/admin/content/news-toutiao/"+id+"?action=toutiao");
			//然后返回,让它去提交
			return;
		}else if($(this).hasClass("tuijianBtn")){
			//推荐操作:action=tuijian
			$("#postToutiao").attr("action","http://cms/admin/content/news-toutiao/"+id+"?action=tuijian");
			return;
		}
			
	});


	/**
	 * ＊2014/7/6 取消头条/推荐＊
	 */
	$("#toutui span").click(function(){
		//点击头条那个span,就获取放在它上面的内容id,然后去后台删除就好了.
		//不过删除之后要重新刷新页面,所以,直接改变iframe的src来做.
		//另外从整个流程想一下,可以知道,最后还得回到总的内容列表这个显示页面,
		//看一下它的方法需要的是顶级分类id.那么这个东西需要获得.以便等下回去调用那个方法需要传进去.
		
	//1,获得内容id
		var id=$(this).attr("data-id");
		var top=$(this).attr("data-top");		//顶级分类id
		//因为删除头条/推荐准备在一个方法里做,所以给个标识,表明是哪个操作.
		var type=$(this).attr("data-type");		//操作类型

	//2,准备直接更改iframe的src为删除头条方法的url,然后在删除方法进行完之后,它再redirect到显示方法,
		//也就是说iframe得到的内容应该是转向后的显示方法.这和以前做的直接去显示方法请求内容多了一步,
		//测试是否有用.
		//注意,参数都放在方法参数,所以直接拼接到url..
		
		/*事实证明这样用iframe请求操作方法,由操作方法redirect到显示方法,最终iframe是可以获得显示方法的内容的
			只是要注意,iframe只能是get请求,所以方法也得写成get的
		*/ 
		$(parent.document).find("#content iframe").attr("src","http://cms/admin/content/delete-news-toutiao/"+id+"/"+top+"/"+type);

	});

	/*－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－*/

	/**
	 * 返回首页，hover显示ul
	 */
	$("#homePage").hover(
		function(){
			$("#backToHome").slideDown();
		},
		function(){
			setTimeout(function(){
				$("#backToHome").slideUp();
			},1500);
		}
	);


	 /**
	  * 工具
	  */
	 //切换工具－缩放图片这个表单的显示
	 $("#mkresizer").click(function(e){
	 		//获得当前纵坐标，以改变这个工具表单的显示位置
	 		var y=e.pageY;
	 		$("#resizer").css("top",y-20);
	 		$("#resizer").toggle();	
	 });

	 //该表单的ajax提交数据
	 $("toolSub").click(function(){
	 		//拼接表单数据
	 		/*var 
			$.ajax({
				type:post,
				url:
			});	*/	 	
	 });



	 /**********************************************************************************************/

 /**
  * －－－－－－
  * 前台js
  * －－－－－
  */
	 

	 /**
	  * 首页:
	  */
	 
	 /**
	  * 注册框
	  */
	 //切换注册框与遮罩层显示隐藏
	 $("#regester").click(function(){
	 	$("#regesterBox").show();
	 	$("#cover").show();
	 	//刷新验证码，因为session在验证码类赋值，这样能够保持两者一致
	 	//---------
	 	//在多个验证码在同一个页面的情况下，这能找到当前的对应session
	 	$("#verifyImage").attr("src",'http://cms/verify/?r='+Math.random());
	 });

	 //关闭按钮
	 $("#close").click(function(){
		$("#regesterBox").hide();
	 	$("#cover").hide();

		//隐藏的时候顺便把数据清空,刷新验证码
		//-----------------------------
		$("#regesterBox #name").val('');
		$("#regesterBox #password").val('');
		$("#regesterBox #email").val('');
		$("#regesterBox #verify").val('');
		$("#verifyImage").attr("src",'http://cms/verify/?r='+Math.random());
	 });

	 //ajax提交注册表单
	 $("#regsub").click(function(){
	 	//检查数据
	 	var name=$("#regesterBox #name").val();
	 	var password=$("#regesterBox #password").val();
	 	var email=$("#regesterBox #email").val();
	 	var veristr=$("#regesterBox #verify").val();
	 	var _token=$("input[name='_token']").val();			//这个是用作后台csrf验证的

 		if(!name || !password || !veristr || !email){
 			alert('填写的数据不完整！');
 		}else{
 			$.ajax({
 				type:"post",
 				url:'http://cms/register',
 				data:'&name='+name+'&password='+password+'&veristr='+veristr+'&email='+email+'&_token='+_token,
 				success:function(response){
 					if(response==1){
 						alert('注册成功!');
 						//刷新页面使得放入session的用户信息激活
 						//通常自己做,不用框架的时候,用户登陆信息都是放在session里面.而session是要刷新后才生效的.
 						//---------------------------------------------------------------------------
 						//js来控制的话页面没有变化,所以得手动去刷新.而laravel的用户登陆信息应该也是在session里面的
 						//-----------------------------------------------------------------------------
 						setTimeout(function(){
 							location=location;
 						},1000);
					}else{
						//报错
						alert(response);
					}
				}
 			});

 		}
	 });

	

	/**
	  * 登陆框
	  */
	 //切换登录框与遮罩层显示隐藏
	 $("#frontLogin").click(function(){
	 	$("#loginBox").show();
	 	$("#cover").show();
	 	//刷新验证码，因为session在验证码类赋值，这样能够保持两者一致
	 	//在多个验证码在同一个页面的情况下，这能找到当前的对应session
	 	$("#logverifyImage").attr("src",'http://cms/verify/?r='+Math.random());
	 });

	 //关闭按钮
	 $("#close2").click(function(){
		$("#loginBox").hide();
	 	$("#cover").hide();

		//隐藏的时候顺便把数据清空,刷新验证码
		$("#loginBox #name").val('');
		$("#loginBox #password").val('');
		$("#loginBox #verify").val('');
		$("#loginBox #remember").val('');
		$("#logverifyImage").attr("src",'http://cms/verify/?r='+Math.random());
	 });

	 //ajax提交注册表单
	 $("#logsub").click(function(){
	 	//检查数据
	 	var name=$("#loginBox #name").val();
	 	var password=$("#loginBox #password").val();
	 	var veristr=$("#loginBox #verify").val();
		var remember=$("#loginBox #remember").val();
 		if(!name || !password || !veristr || !email){
 			alert('填写的数据不完整！');
 		}else{
 			$.ajax({
 				type:"post",
 				url:'http://cms/login',
 				data:'&name='+name+'&password='+password+'&veristr='+veristr+'&remember='+remember,
 				success:function(response){
 					if(response==1){
 						alert('登录成功!');
 						//刷新页面使得放入session的用户信息激活
 						setTimeout(function(){
 							location=location;
 						},400);
					}else{
						//报错
						alert(response);
					}
				}
 			});

 		}
	 });

/*新闻*/

	 //--->新闻首页
	 
	 /**
	  *＊2014/7/4 搜索框的li隐藏/显示＊
	  */
	 // 第一个li的点击,表明用户要切换搜索范围,那么将隐藏的li显示出来
	 // $("#searchArea li:eq(0)").click(function(){
	 // 	//1,先把需要重复使用的数据赋予变量,简化代码
	 // 	var li=$("#searchArea li");				//这个就是所有搜索框涉及的li了.

	 // 	//2,让隐藏的li显示出来,这里可以直接让所有li显示.
	 // 	$(this).siblings().toggle();


	 // });
	 
	/**
	 * 这个功能的代码有点乱,不过为了保留思路,上面注释掉的内容不删掉.
	 * 原本上面和下面两段代码一起来实现这个功能.但是后来发现用下面这一段代码就行了.
	 * 都是li的点击,然后判断它点的是哪一个,
	 * 如果点的是第一个,那么它就负责显示和隐藏它的兄弟li,对于用户来说这就是选择项
	 * 如果点的不是第一个,那么就将它的位置移动到第一个的位置,表示这个选项是选中了的.然后隐藏多余的选项,
	 */
		
		$("#searchArea li").click(function(){
			//这里应该判断一下哪个li是第一个.
			//因为要考虑到多次点击,如果只是一次点击的话,那么就是默认的第一个li.
			//但是换位之后,排在第一个的li就不同了.
			//取第一个li可以用这里的get(),也同样可以用eq()来做,
			//get返回的是dom对象,要包装成jquery对象,
			//而eq直接就是jquery对象.
			var first=$("#searchArea li").get(0);					//计算下当前排第一的li

			//这里得判断下,点击的是否是已经排第一的li,好像已经是排第一的li再用before,自己before自己,这个li会消失
			//但是判断,不能用两个对象来判断,如:$(first)!=$(this),因为js中的对象是全等比较.也就是说两个对象要是一样的才会相等.
			//		------------------------------------------------------------
			//这里两个对象显然不是一样的条件下创建出来的,所以两个对象始终不等.
			//但是从内容上看,他们其实一样的,都是代表一个li元素.所以可以用他们的属性如包含的文本来判断是否是同一个li.
			//------------------------------------------------------------------
			if($(first).text()!=$(this).text()){
				//点击的不是第一个li的情况
				
				//A:把点击的li换到第一个位置
				$(first).before($(this));
				//B:排在第一个的li有个箭头图标,所以这个li转成第一个的时候,将图标也换了
				$(this).css("background","url(../images/jiantou.png) no-repeat 62px -338px");
				//而原来那个第一的li就要去掉这个背景图案
				$(first).css("background","#fff");
				//C:剩下的li隐藏掉
				$(this).siblings().hide();
			}else{
				//如果点击的就是第一个,那么就不需要移动位置了,直接把多余的li隐藏
				//但是有个特殊情况,就是对方是第一次点击.此时就不能隐藏,隐藏就没的选了.
				//--------------------------------------------------------
				//所以,这里不能用hide(),而是用toggle(),
				//-------------------------------
				//如果当前其他项已经显示出来了,就不是第一次点击,让它们隐藏.
				//如果当前没有显示其他的li,说明是第一次点击,那么让其他li显示出来,供用户选择.
				$(this).siblings().toggle();				
			}
		});

	
	/**
	 * ＊2014/7/4　搜索框提交查询＊
	 */
	//form提交时进行操作
	$("#mysearch").submit(function(){
		//1,首先验证数据,至少搜索框得有内容.如果没有内容不理会就是了,弹窗容易烦
		var searchText=$("#searchText").val();		//文本框内容
		if(!searchText){
			return;
		}
		//2,有内容时,得知道它是在什么版块搜索,比如新闻还是商城.这个数据放在前面的li的私有属性上
		//注意是取第一个.不要用:visible去取,有可能下拉的li还在显示,对方就提交了.那么取出来会是多个.
		//---------------------------------------------------------------------------
		var table=$("#searchArea li:eq(0)").attr("data-table");

		//3,ajax提交数据,因为现在还没有决定搜索的页面怎么显示,所以先测试搜索框本身正不正常.
		//其实这是请求页面,用ajax的话,请求的页面是返回ajax,然后要ajax来安排显示页面,这是很冗长的流程.
		//------------------------------------------------------------------------------
		//显示页面是return页面出来,所以通常去显示页面,要避免使用ajax,而用其他的url,操作方法时可以用ajax
		//-------------------------------------------------------------------------------
		//因为当前就是form提交,它唯一缺的就是写在li上面的数据.
		//尝试看能不能改form的action,将这个数据挂上去.然后还是form提交,这样后台返回直接就可以到页面上,而不是再回来ajax这.
		//			-------------------------------------------------------------------------------------
		//测试表明上面所说的功能是可以实现的,直接改form的action,然后将其他数据也带过去,就好了.
		//但是注意,query string,或者习惯叫get传参,它前面是不要斜杠的,直接连到url后面加个?,
		//如果有斜杠的话,laravel找不到控制器,也就是url不对应.
		$(this).attr({"action":"http://cms/search?table="+table,"method":"post"});
		return;
	});

})