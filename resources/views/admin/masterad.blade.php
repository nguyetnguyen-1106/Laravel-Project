<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Mumcal Hotel</title>
    <link rel="shortcut icon" type="image/png" href="Img/favicon.ico">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="/./Css/admin/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="/./Css/admin/ready.css">
    <link rel="stylesheet" href="/./Css/admin/demo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
    <div class="wrapper">
        @include('admin.header');
        <div class="main-panel">
            @yield('contentAdmin')
        </div>
        <!-- @include('admin.footer') -->
        @include('admin.script')
    </div>
</body>
</html>
