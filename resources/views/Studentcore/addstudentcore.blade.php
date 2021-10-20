<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/logo3.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="student-index.html" class="logo">
					<img src="/assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<p class="card-title" style="font-size: 20px;"><b><font color='#685DA7'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font></b></p>
							<label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับนักเรียน)</small></label>
					</div>

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fas fa-school"></i>
                            </a>
                        </li>
                    </ul>
				</div>
			</nav>
			<!-- End Navbar -->

		</div>
		<!-- // End main-header -->

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">

					<!-- เริ่มโปรไฟล์ -->
					<div class="user">
						<div class="info">

							<label><b>ชื่อ-นามสกุล :</b> สวัสดี มีเมตตา</label>
							<label><b>เลขประจำตัวนักเรียน :</b> 50190</label>
							<label><b>ชั้นมัธยมศึกษาปีที่ :</b> 5 <b>ห้อง:</b> 2</label>
							<label><b>ภาคเรียนที่ :</b> 1/2565</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="student-index.html">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-file-alt"></i>
								<p>ระบบบันทึกข้อมูลพื้นฐาน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="student-info-add-1.html">
											<span class="sub-item">เพิ่มข้อมูล</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">แก้ไขข้อมูล</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">ตรวจสอบข้อมูล</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a href="#">
								<i class="fas fa-book-open"></i>
								<p>คู่มือการใช้งาน</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="#">
								<i class="fas fa-comments"></i>
								<p>ติดต่อเรา</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>ต้นฉบับ</p>
								<span class="badge badge-success">4</span>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- สิ้นสุดเมนู -->

		<!-- เริ่มเนื้อหา-->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header " style="background-color: #4C3F54;">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h3 class="text-white pb-2 fw-bold"></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล</div>
									</div>
								</div>

								<!-- ข้อมูลเบื้องต้น -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>

									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลเบื้องต้น</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-5">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวนักเรียน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>แผนการเรียน</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ระดับชั้น</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ลำดับห้อง</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>เด็กชาย</option>
													<option>เด็กหญิง</option>
													<option>นาย</option>
													<option>นางสาว</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>Mr.</option>
													<option>Mrs.</option>
													<option>Miss</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อ(ภาษาอังกฤษ)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุล(ภาษาอังกฤษ)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>วัน/เดือน/ปีเกิด ที่ปรากฏในบัตรประชาชน</small></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ปี พุทธศักราช:</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>2563</option>
													<option>2562</option>
													<option>2561</option>
													<option>2560</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>เดือน:</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>มกราคม</option>
													<option>กุมภาพันธ์</option>
													<option>มีนาคม</option>
													<option>เมษายน</option>
												</select>
											</div>
                                        </div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>วัน:</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อเล่น</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>เพศสภาพ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>ชาย</option>
													<option>หญิง</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>หมู่เลือด</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>A</option>
													<option>B</option>
												</select>
											</div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ศาสนา</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>เชื้อชาติ</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>สัญชาติ</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>อีเมล์ (name@example.com)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>



								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; ด้านล่าง</p>
									<a href="student-info-add-2.html" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a>
								</div><br>

                                <!-- ข้อมูลที่อยู่ตามทะเบียนบ้าน -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ข้อมูลที่อยู่ปัจจุบัน -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">
											<div class="form-check">
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">ที่อยู่ตามทะเบียนบ้าน</span>
												</label>
												<label class="form-radio-label ml-1">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">ที่อยู่อื่น (โปรดระบุ)*</span>
												</label>
											</div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>



								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                    <a href="student-info-add-3.html" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a> &nbsp;&nbsp;
                                    <a href="student-info-add-1.html" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
								</div><br>

                                <!-- ความสามารถ -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ด้านความสามารถ</b></p>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>สำเร็จการศึกษา จากโรงเรียน</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อโรงเรียนเดิม</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>จบชั้น</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ผลการเรียนเฉลี่ย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>วิชาที่ชอบ</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>1)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>2)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>3)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>4)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>วิชาที่ไม่ถนัด</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>1)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>2)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>3)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>4)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>เป้าหมายของชีวิตในอนาคต</small></label>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>อยากประกอบอาชีพอะไร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>เพราะอะไร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ความสามารถพิเศษ</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-6">
											<label style="margin-bottom: 5px;"><small>การอ่านเขียน (เลือก 1 หัวข้อ)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="value" value="1" class="selectgroup-input">
														<span class="selectgroup-button">อ่านเขียนคล่อง</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="2" class="selectgroup-input">
														<span class="selectgroup-button">อ่านเขียนไม่คล่อง</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="3" class="selectgroup-input">
														<span class="selectgroup-button">อ่านเขียนพอได้</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="value" value="4" class="selectgroup-input">
														<span class="selectgroup-button">อ่านเขียนไม่ได้</span>
													</label>
												</div>
											</div>
                                        </div>
										<div class="col-sm-6 col-md-6">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนไม่เข้าใจบทเรียนทุกวิชา (เลือก 1 หัวข้อ)</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="understand" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="understand" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>

								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                    <a href="student-info-add-4.html" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a> &nbsp;&nbsp;
                                    <a href="student-info-add-2.html" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
								</div><br>

                                <!-- ความสามารถ -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
                                    </div>
									<div class="row">
                                        <div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>การเดินทางมาโรงเรียน</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ระยะเวลาเดินทาง (นาที)</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-6">
											<label style="margin-bottom: 5px;"><small>อุปกรณ์ที่มี (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-pills">
													<label class="selectgroup-item">
														<input type="checkbox" name="tool" value="1" class="selectgroup-input">
														<span class="selectgroup-button">มือถือ/สมาร์ทโฟน</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="tool" value="2" class="selectgroup-input">
														<span class="selectgroup-button">แท็บเล็ต</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="tool" value="3" class="selectgroup-input">
														<span class="selectgroup-button">โน๊ตบุ๊ค</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="tool" value="4" class="selectgroup-input">
														<span class="selectgroup-button">คอมพิวเตอร์แบบตั้งโต๊ะ</span>
													</label>
												</div>
											</div>
                                        </div>
										<div class="col-sm-6 col-md-6">
                                            <label style="margin-bottom: 5px;"><small>อินเตอร์เน็ตที่ใช้ (เลือก 1 หัวข้อ)</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="net" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">อินเตอร์เน็ตไร้สาย</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="net" value="no" class="selectgroup-input">
														<span class="selectgroup-button">อินเตอร์เน็ตสาย</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลด้านอื่นๆ</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-6">
											<div class="form-group form-group-default">
												<label>ความพิการ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-6">
											<div class="form-group form-group-default">
												<label>ความด้อยโอกาส</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;"><small>ความขาดแคลน (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-pills">
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="1" class="selectgroup-input">
														<span class="selectgroup-button">ขาดแคลนแบบเรียน</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="2" class="selectgroup-input">
														<span class="selectgroup-button">ขาดแคลนเครื่องเขียน</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="3" class="selectgroup-input">
														<span class="selectgroup-button">ขาดแคลนอาหารกลางวัน</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="4" class="selectgroup-input">
														<span class="selectgroup-button">ขาดแคลนเครื่องแบบ</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="lack" value="5" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ขาดแคลน</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="1" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="1" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="2" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="2" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="3" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="3" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="4" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="4" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนชอบเที่ยวกลางคืน</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="5" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="5" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนเคยถูกล่วงละเมิดทางเพศ</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="6" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="6" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าโลกนี้ (เลือก 1 หัวข้อ)</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="world" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">น่าอยู่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="world" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่น่าอยู่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าตัวเอง (เลือก 1 หัวข้อ)</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="heart" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">มีค่า</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="heart" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่มีค่า</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;"><small>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้ (เลือกได้มากกว่า 1 อย่าง)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-pills">
													<label class="selectgroup-item">
														<input type="checkbox" name="issue" value="1" class="selectgroup-input">
														<span class="selectgroup-button">ครอบครัว</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="issue" value="2" class="selectgroup-input">
														<span class="selectgroup-button">การเรียน</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="issue" value="3" class="selectgroup-input">
														<span class="selectgroup-button">สุขภาพ</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="issue" value="4" class="selectgroup-input">
														<span class="selectgroup-button">เศรษฐกิจ</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="5" class="selectgroup-input">
														<span class="selectgroup-button">การคบเพื่อน</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="6" class="selectgroup-input">
														<span class="selectgroup-button">การวางตัวในสังคม</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="7" class="selectgroup-input">
														<span class="selectgroup-button">การใช้เวลาว่าง</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="8" class="selectgroup-input">
														<span class="selectgroup-button">การเลือกอาชีพ</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="9" class="selectgroup-input">
														<span class="selectgroup-button">การเลือกศึกษาต่อ</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="issue" value="10" class="selectgroup-input">
														<span class="selectgroup-button">การปรับตัวเข้ากับครู-อาจารย์ในโรงเรียน</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;"><small>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร (เลือกได้มากกว่า 1 อย่าง)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-pills">
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="1" class="selectgroup-input">
														<span class="selectgroup-button">บิดา</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="2" class="selectgroup-input">
														<span class="selectgroup-button">มารดา</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="3" class="selectgroup-input">
														<span class="selectgroup-button">ครูแนะแนว</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="lack" value="4" class="selectgroup-input">
														<span class="selectgroup-button">ครูที่ปรึกษา</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="lack" value="5" class="selectgroup-input">
														<span class="selectgroup-button">เพื่อน</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="lack" value="5" class="selectgroup-input">
														<span class="selectgroup-button">อื่นๆ</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>

								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                    <a href="student-info-add-5.html" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a> &nbsp;&nbsp;
                                    <a href="student-info-add-3.html" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
								</div><br>

                                <!-- สุขภาพ -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
                                    </div>

                                    <div class="row">
										<div class="col-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>น้ำหนัก</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>ส่วนสูง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>โรคประจำตัว</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ยาที่แพ้</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ยาที่ต้องรับประทานประจำ</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>วิธีแก้ไขเมื่อเกิดอาการ</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;"><small>นักเรียนมีภาวะทางสายตา (เลือกได้มากกว่า 1 อย่าง เช่น สายตาสั้น-เอียง)</small></label>
                                            <div class="form-group">
												<div class="selectgroup selectgroup-pills">
													<label class="selectgroup-item">
														<input type="checkbox" name="eye" value="1" class="selectgroup-input">
														<span class="selectgroup-button">ปกติ</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="eye" value="2" class="selectgroup-input">
														<span class="selectgroup-button">สายตาสั้น</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="eye" value="3" class="selectgroup-input">
														<span class="selectgroup-button">สายตายาว</span>
													</label>
													<label class="selectgroup-item">
														<input type="checkbox" name="eye" value="4" class="selectgroup-input">
														<span class="selectgroup-button">สายตาเอียง</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="eye" value="5" class="selectgroup-input">
														<span class="selectgroup-button">ตาบอดสี</span>
													</label>
                                                    <label class="selectgroup-item">
														<input type="checkbox" name="eye" value="6" class="selectgroup-input">
														<span class="selectgroup-button">อื่นๆ</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-3">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนสวมแว่นตา</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="1" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="1" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="2" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="2" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางการได้ยิน</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="3" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="3" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางร่างกาย</small></label>
											<div class="form-group">
												<div class="selectgroup selectgroup-secondary selectgroup-pills">
													<label class="selectgroup-item">
														<input type="radio" name="4" value="yes" class="selectgroup-input">
														<span class="selectgroup-button">ใช่</span>
													</label>
													<label class="selectgroup-item">
														<input type="radio" name="4" value="no" class="selectgroup-input">
														<span class="selectgroup-button">ไม่ใช่</span>
													</label>
												</div>
											</div>
                                        </div>
                                    </div>


								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                    <a href="student-info-add-6.html" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a> &nbsp;&nbsp;
                                    <a href="student-info-add-4.html" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
								</div><br>

                                <!-- ครอบครัว -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนในการใช้ขอทุน หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
                                    </div>

                                    <div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>นาย</option>
													<option>นางสาว</option>
                                                    <option>นาง</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชนิดของบัตร</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>อายุ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>หมู่เลือด</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>A</option>
													<option>B</option>
													<option>O</option>
													<option>AB</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-6">
											<div class="form-group form-group-default">
												<label>การประกอบอาชีพ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>รายได้ต่อเดือน (บาท)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input id="Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลมารดา</b></p>
                                    </div>

                                    <div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>นาย</option>
													<option>นางสาว</option>
                                                    <option>นาง</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชนิดของบัตร</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>อายุ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>หมู่เลือด</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>A</option>
													<option>B</option>
													<option>O</option>
													<option>AB</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-6">
											<div class="form-group form-group-default">
												<label>การประกอบอาชีพ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>รายได้ต่อเดือน (บาท)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input id="Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-12">

											<div class="form-check">
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">บิดา</span>
												</label>
												<label class="form-radio-label ml-1">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">มารดา</span>
												</label>
												<label class="form-radio-label ml-1">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">บุคคลอื่น</span>
												</label>
											</div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>นาย</option>
													<option>นางสาว</option>
                                                    <option>นาง</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อกลาง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>นามสกุลภาษาไทย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="form-group form-group-default">
                                                <label>เลขประจำตัวประชาชน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชนิดของบัตร</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>อายุ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
											<div class="form-group form-group-default">
												<label>ความสัมพันธ์ผู้ปกครอง</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>พี่ชาย</option>
													<option>พี่สาว</option>
													<option>ลุง</option>
													<option>ป้า</option>
													<option>น้า</option>
													<option>อา</option>
													<option>ปู่</option>
													<option>ย่า</option>
													<option>ตา</option>
													<option>ยาย</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-6">
											<div class="form-group form-group-default">
												<label>การประกอบอาชีพ</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>รายได้ต่อเดือน (บาท)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                <input id="Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>บ้านเลขที่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>หมู่</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ชื่อหมู่บ้าน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-2">
                                            <div class="form-group form-group-default">
                                                <label>ซอย</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ถนน</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>ตำบล/แขวง</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>อำเภอ/เขต</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>จังหวัด</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-6 col-md-3">
                                            <div class="form-group form-group-default">
                                                <label>รหัสไปรษณีย์</label>
                                                <input id="Name" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัวเบื้องต้น</b></p>
                                    </div>

                                    <div class="row">
										<div class="col-6 col-md-8">
											<div class="form-group form-group-default">
												<label>สถานภาพสมรสของบิดามารดา</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>สถานะผู้ปกครองนักเรียน</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>จำนวนพี่ชาย</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>จำนวนน้องชาย</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>จำนวนพี่สาว</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>จำนวนน้องสาว</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>นักเรียนเป็นบุตรคนที่</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
											<div class="form-group form-group-default">
												<label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
											<div class="form-group form-group-default">
												<label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
											<div class="form-group form-group-default">
												<label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-9">
                                            <div class="form-group form-group-default">
                                                <label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
                                                <input id="Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
											<div class="form-group form-group-default">
												<label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
											</div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
                                                <input id="Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>เกี่ยวข้องเป็น</label>
												<select class="form-control" id="formGroupDefaultSelect">
													<option>เลือก</option>
													<option>พี่ชาย</option>
													<option>พี่สาว</option>
													<option>ลุง</option>
													<option>ป้า</option>
													<option>น้า</option>
													<option>อา</option>
													<option>ปู่</option>
													<option>ย่า</option>
													<option>ตา</option>
													<option>ยาย</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-sm-6 col-md-12">
                                            <label style="margin-bottom: 5px;"><small>การหารายได้ด้วยตนเอง</small></label>
											<div class="form-check">
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">ไม่มี</span>
												</label><br><br>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">มี</span>
												</label>
												<div class="form-group form-group-default">
													<label>โปรดระบุ (หารายได้จากอะไร)</label>
													<input id="Name" type="text" class="form-control">
												</div>
                                                <div class="form-group form-group-default">
                                                    <label>รายได้เฉลี่ยวันละ (บาท)</label>
                                                    <select class="form-control" id="formGroupDefaultSelect">
                                                        <option>เลือก</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                </div>
											</div>
										</div>
									</div>

								</div>
								<div class="card-footer" align="center">
									<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
										เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ถัดไป&quot;</b>&nbsp; หากต้องการกลับไปหน้าก่อนให้กดปุ่ม &nbsp;<b>&quot;ย้อนกลับ&quot;</b>&nbsp; ด้านล่าง</p>
                                    <a href="#" type="button" class="btn btn-primary"><strong>ถัดไป</strong></a> &nbsp;&nbsp;
                                    <a href="student-info-add-5.html" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
								</div><br>

							</div>
						</div>
					</div>
				</div>
				<!-- สิ้นสุดเนื้อหา -->
			<!-- เริ่ม Footer -->
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">

							<li class="nav-item">
								<a class="nav-link" target="_blank">&copy; 2021 Phrao wittayakom School. | พัฒนาโดย PWK40 & CSMJU23</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Theme by <a href="https://www.themekita.com" target="_blank">ThemeKita</a>
					</div>
				</div>
			</footer>
		</div>
		<!-- สิ้นสุด Footter -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script src="../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>
