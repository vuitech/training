<html>
	<body>
		<div style="width:100%;border:1px solid navy;">
			<?php
				$user_type='user';
				if($user_type == 'admin'){
			?>
				<div style="width:50%;border:1px solid red;">
					<p>This is my test content for the admins who want to manage this page. asdfjkl;a flasjdf asldfjklasdfj askljfdkl;
					fasjdf;kalfdjkla sdfjakslfdj lkas;fa;lksdfja sdfjlaskjfd kasljdfk;as df;alsdfj lk;asjdf lka;sjfd ;laskd flkasjdf 
					asdfasjdfkljflkaskdf asl;dfj aksldfj asldfj las;kdf asdfl;j al;sdfjaslk;df al;sfjd a;sdfjlkas;j
					L;jdslk;ajal;jfd;lka f;lajfd;alk </p>
				</div>
			<?php 
				}else{
			?>
				<div style="width:50%;border:1px solid green;">
					<p>This is my test content for the users who visit this page. asdfjkl;a flasjdf asldfjklasdfj askljfdkl;
					fasjdf;kalfdjkla sdfjakslfdj lkas;fa;lksdfja sdfjlaskjfd kasljdfk;as df;alsdfj lk;asjdf lka;sjfd ;laskd flkasjdf 
					asdfasjdfkljflkaskdf asl;dfj aksldfj asldfj las;kdf asdfl;j al;sdfjaslk;df al;sfjd a;sdfjlkas;j
					L;jdslk;ajal;jfd;lka f;lajfd;alk </p>
				</div>
			<?php
				}
			?>
		</div>
	</body>
</html>