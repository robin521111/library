var data2 ={"空间":34,"微博":30,"指导":29,"小明":28 , "图书馆": 27 , "PHP":26 , "项目" :25 ,"健康":24 , "JS" :23 ,'html' :22,'各镇': 22 ,'勋章' :21 ,'信息':20,'开发':19 , '设计':18 , '开幕式' :17 , '浏览器' :16 ,'身份':15,'图片': 14 , '中国' :13 , '伟大' :12 ,'地方':11 ,'噩梦' :10 ,'回复' :9 ,'空间' :8 , '请问' : 7 , '类库' : 6 , '激活' : 5 ,'规范' :4 ,'微软' :3 , '分割': 2 , '不错' :1 , '多个' :1, '斯蒂芬' :1, '分割' :1, '回过头' :1, '慈悲' :1, 'svg' :1, '三个' :1, '十多个' :1, '语句' :1, '写错' :1, '别冲动' :1, '请问' :1, '细长的' :1, '风光' :1, '梵蒂冈' :1, '成办' :1, '这些' :1, '是的' :1, '风格化' :1, '儿童歌' :1, '所得税' :1, '阿斯顿' :1, '斯蒂芬' :1, '电饭锅' :1, '很规范' :1, '车秩序' :1, '上网' :1, '过负荷' :1, '放到' :1, '电饭锅' :1, '东方红' :1, '风格化' :1, '请问' :1, '人头' :1, '让他' :1, '分隔' :1, '大概' :1, '福利' :1, '激活' :1, '断食' :1, '风格' :1, '瓦尔特' :1, '对方' :1,  '请问' :1, '而' :1, '人头' :1, '统一' :1, '一份' :1, '放到' :1, '放到' :1, '放到' :1, '放到' :1, '上网' :1, '我是' :1, '的' :1, '耳朵' :1, '发热' :1, '乳房' :1, '跟他' :1, '通过' :1, '还好用' :1, '雅黑' :1, '聚聚' :1, '看过' :1, '似的' :1, '独' :1, '明年' :1, '手头紧' :1, '换个' :1, '数据' :1, '导入' :1, '回归' :1};
			//var data2 = {"name111":"34" ,"name2222":36 ,"DOTA":"13","小狗":"15"};
			var drawImg = {
				canvasDom: null ,
				data:[], //数据
				ctx: null, //花边
				finImgData : null , //最终图片
				finImgMsg: null, //存放是否已写信息
				colorArr : [ //颜色选择
					'#3C6B15',
					'#6b4b38',
					'#eb9a2f',
					'#12acab',
					'#eb9a2f',
				],
				
				ready : function( data ,  containerId ){
					this.data = data;
					this.canvasDom = document.createElement("canvas");
					this.canvasDom.setAttribute("width", 600);
					this.canvasDom.setAttribute("height", 400);
					this.canvasDom.style.backgroundColor  = 'white';
					var containerDom = document.getElementById(containerId);
					containerDom.appendChild(this.canvasDom);
					
					this.ctx = this.canvasDom.getContext('2d');
					this.finImgData = this.ctx.createImageData(600 , 400);
					this.finImgMsg = [];
					
					for(var i=0 ; i<600 ; i++){
						this.finImgMsg[i] = [];
						for(var j=0 ; j<400 ; j++){
							this.finImgMsg[i][j] = 0;
						}
					}
					
					this.cavulateData();
					//log(this.data)
					this.draw();
				},
				/**
				 * 计算标签大小
				 */
				cavulateData : function(){
					var dataArr = [];
					var obj ;
					for(var name in this.data ){
						dataArr.push( {name:name , count : this.data[name]}) 
					}
					dataArr.sort(function(x , y){
						if(Math.floor(x.count) == Math.floor(y.count)){
							return 0;
						}
						if( Math.floor(x.count) > Math.floor(y.count)){
							return -1;
						}else{
							return 1;
						}
					})
					var shift=-6;
					for(var i =0 ; i< dataArr.length ; i++){
						if(i==0){
							dataArr[0].count = 68;
							continue;
						}
						if(shift < 0){
							shift ++
						}
						dataArr[i] .count =Math.floor(dataArr[i-1].count  * 99/ 100)+shift;
						if(dataArr[i] .count < 13){
							dataArr[i] .count = 17;
						}
					}
					
					
					this.data = dataArr;
					
				},
				/**
				 * 开始画
				 */
				draw : function(){
					for(var i = 0 ; i< this.data.length ; i++){
						this.drawWord(this.data[i].name , this.data[i].count);
					}
						
					
					this.ctx.putImageData(this.finImgData ,0,0);
				},
				/**
				 * 单一一个标签画
				 */
				drawWord: function(word , size){
			
					var fillStyle = this.colorArr[ random(this.colorArr.length-1)];
					this.ctx.fillStyle = fillStyle;
					this.ctx.font = "900 " + size + "px   微软雅黑";
					var w =this.ctx.measureText(word).width;
					this.ctx.textBaseline = "top";
					this.ctx.fillText(word ,0 ,0 );
					var wordImgData = this.ctx.getImageData( 0 , 0 , w , size +10 );
					wordImgData = this.randomRotateImgeData(wordImgData)
					this.ctx.clearRect(0 ,0 , 600 ,400 );
					//初始化查找点
					
					var centerPoint = this.getCenterPoint();
					var i = 0;
					while (i<1000){
						if(centerPoint.isFullRound()){
							centerPoint.clearRound();
							
						}
						var pos = centerPoint.getCenterPos(wordImgData .width , wordImgData.height);
						pos.x = 600 /2 +pos.x;
						pos.y = 400 /2 +pos.y;
						
						if(this.isAbleDraw(wordImgData  , pos.x , pos.y)){
							for(var i = 0 ; i < wordImgData.width  ; i++){
								for(var j=0 ; j < wordImgData.height ; j++){
									var  point= getXY(wordImgData , i  ,j );
									if( point[3]!=0 ){
										setXY(this.finImgData ,pos.x+i,pos.y+j,point);
										this.finImgMsg[pos.x+i-1][pos.y+j-1] = 1
									}
								}
							}
							break;
						}
						i++;
						centerPoint = this.getCenterPoint( centerPoint);
					}
				},
				
				/**
				 * 是否可以画
				 */
				isAbleDraw : function ( wordImg, x , y){
					var w = wordImg.width;
					var h = wordImg.height;
					
					for(var i = 0 ; i <  w ; i++){
						for(var j = 0 ; j < h ; j++){
							var wordPoint = getXY(wordImg , i ,j);
							//检测文字图片上该点是否有痕迹，不全为白为有痕迹
							if(wordPoint[3]!=0 ){
								var finx = x+ i -1;
								var finy = y + j - 1;
								if(finx <0 || finx >= 600 ||finy <0 || finy >=400){
									return false;
								}
								
								if(this.finImgMsg[finx][finy] == 1){
									return false;
								}
							}
						}
					}
					
					
					
					return true;
				},
				/**
				 * 随机旋转
				 */
				randomRotateImgeData : function(imgData){
					var newImageData = this.ctx.createImageData(imgData.height , imgData.width);
					if(random(9)>6){
						for(var i = 0 ; i < imgData.height ; i++){
							for(var j = 0 ; j < imgData.width ; j++){
								var point = getXY(imgData , j , i);
								setXY(newImageData , imgData.height - i -1 ,j ,point );
							} 
						}
						imgData = newImageData;
					}
				
					return imgData;
				},
				
				/**
				 * 用于标签的位置选择
				 */
				getCenterPoint : function(centerPoint){
					
					//没有传入centerPoint,默认初始化
					if( typeof centerPoint != 'object'){
						//centerPoint对象，用于存储以往已经选择的点的信息
						var centerPoint = {
							round : 1, //第几圈
							choose : [], //已选择的点
							nowChoose : null,
							revert : 0,
							/**
							 * 随机选择点
							 */
							randPoint : function (){
								var chooseCount  = this.round == 1 ?  1 : this.round * 2 + (this.round - 2) * 2; //总共可以选择的点
								//所有情况已经遍历了，增加一环 ,重置
								if(this.choose.length == chooseCount ){
									this.round++;
									this.choose = [];
									this.revert = 0;
									return this.randPoint(); 
								}
								
								while(true){
									this.nowChoose = random(chooseCount-1);
									if(!inArray(this.nowChoose , this.choose)){
										this.choose.push(this.nowChoose);
										
										break;
									}
								} 
								
								return this.nowChoose;
							},
							getCenterPos:function(w , h){
								var shift = 0.5; //偏移率
								var shiftw = random(1) ? random( w*shift) : -random( w*shift); 
								var shifth = random(1) ? random( h*shift) : -random( h*shift); 
								var pos = {
									x : 0,
									y : 0
								}
								
								if(this.nowChoose === null){
									return false;
								}
							
								if(this.round != 1){
									var quadrant = Math.floor((this.nowChoose) / (this.round-1)); //第几象限
									var distance =  (this.nowChoose+1) % this.round;//象限的偏移
									
									//log(quadrant)
									
									switch(quadrant){
										case 0 :
											pos.x = w / 2  *  distance  ;
											pos.y = h / 2 *  (this.round -distance) ;
											break;
										case 1 :
											pos.x = w / 2  *  (this.round -distance);
											pos.y = h / 2 *  (-distance) ;
											break;
										case 2 :
											pos.x = w / 2  *  (-distance);
											pos.y = h / 2 *  -(this.round - distance) ;
											break;
										case 3 :
											pos.x = w / 2  * -(this.round - distance) ;
											pos.y = h / 2 * distance;;
											break;
									}
								}
								
							
								pos.x +=  shiftw;
								pos.y +=  shifth;
								
								pos.x = Math.floor(pos.x - w/2)
								pos.y = Math.floor(pos.y - h/2)
								return pos;
								
							},
							isFullRound: function(){
								if(this.revert) return false;
								var chooseCount  = this.round == 1 ?  1 : this.round * 2 + (this.round - 2) * 2; //总共可以选择的点
								return this.choose.length == chooseCount;
							},
							clearRound:function(){
								this.choose = [];
								this.revert = 1;
							}
						};
					
					}
					
					centerPoint.randPoint();
					return  centerPoint;
				}
				
			}
			

	
			window.onload = function(){
				drawImg.ready(data2 , 'img');
			}
			
			
			
			function random(num){
				return Math.floor(Math.random() *( num+1));
			}
			function log(str){
				console.log(str);
			}
			
			/**
			 * imgData根据坐标获取
			 */
			function getXY(imgData ,x, y){
				var res = []; 
				var w = imgData.width;
				var h = imgData.height;
				
				var pos = ( y * w + x) * 4;
				
				res[0] =  imgData.data[pos];
				res[1] =  imgData.data[pos+1];
				res[2] =  imgData.data[pos+2];
				res[3] =  imgData.data[pos+3];
				return res;
			}
			/**
			 * imgData根据坐标修改
			 */
			function setXY(imgData ,x, y,res){
				var w = imgData.width;
				var h = imgData.height;
				
				var pos = ( y * w + x) * 4;
				
				imgData.data[pos] = res[0] ;
				imgData.data[pos+1] = res[1] ;
				imgData.data[pos+2] = res[2] ;
				imgData.data[pos+3] = res[3] ;
			}
			
			/**
			 *将重心坐标改成边缘坐标
			 * 适用于x和y轴
			 */
			function center2abs(center , w , pos ){
				return center - Math.floor(w/2)+pos;
			}
			
			function inArray(son , arr){
				for(var i = 0 ; i < arr.length ; i++){
					if(arr[i] == son){
						return true;
					}
				}
				return false;
			}
			
			function changeImg(){
				var containerDom = document.getElementById("img");
				containerDom.innerHTML = '';
					
				drawImg.ready(data2 , "img");
			}




$(document).ready(function(){
	animate();
  $(".play").click(animate).mouseover(function(){
  	$(".play").css({"background-color":"#A55"});
  }).mouseout(function(){
  	$(".play").css({"background-color":"#060"});
  });
});
function animate(){
	  $('div>div>div').each(function(id){
    $(this).css({
      position: 'relative',
      top: '-200px',
      opacity: 0
    });
    var wait = Math.floor((Math.random()*3000)+1);
    $(this).delay(wait).animate({
      top: '0px',
      opacity: 1
    },1000);
  });
}