<?php
namespace Admin\Controller;
class Captcha{
	public function makeImage(){
		$char_list='ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';//字符
		$list_length=strlen($char_list);//字符长度
		$code_length=4;
		//$code_length=4;//随机长度
		$code='';//字符
		for ($i=1; $i <=$code_length ; ++$i) { 
			$rand_index=mt_rand(0,$list_length-1);
			$code.=$char_list[$rand_index];
		}
		//echo $code;
		//存储于session
		@session_start();
		$_SESSION['code']=$code;
		$bg_file='./captcha/captcha_bg'.mt_rand(1,5).'.jpg';//背景图片
		$image=imagecreatefromjpeg($bg_file);//画布
		//颜色
		if(mt_rand(1,2)==1){
			$code_color=imagecolorallocate($image, 0, 0, 0);//黑
			 }
		else{
			$code_color=imagecolorallocate($image, 255, 255, 255);//白
		}
		//字体大小
		$font=18;
		//画布
		$image_w=imagesx($image);
		$image_h=imagesy($image);
		//字体
		$font_w=imagefontwidth($font);
		$font_h=imagefontheight($font);
		//字符串
		$code_w=$font_w*$code_length;
		$code_h=$font_h;
		//位置
		$str_x=($image_w-$code_w)/2;
		$str_y=($image_h-$code_h)/2;
		//画布上画字符
		imagestring($image, $font, $str_x, $str_y, $code, $code_color);
		header('Content-Type:image/jpg');
		imagejpeg($image);//保存图片
		imagedestroy($image);//销毁
	}

}
?>