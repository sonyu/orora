<html>
<head>      
	<?php $this->load->view('site/head')?>
</head>
<body>
	<?php // $this->load->view($temp,$this->data)?>
	<div class="container">
		<?php $this->load->view('site/header')?>		
		<div class ="content col-sm-12">
		<?php $this->load->view('site/left')?>
		<?php $this->load->view('site/customer/index')?>
		</div>
		<div class = "footer"></div>
	</div>

</body>
</html>