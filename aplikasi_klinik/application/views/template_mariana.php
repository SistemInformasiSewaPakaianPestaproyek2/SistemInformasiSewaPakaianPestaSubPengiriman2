<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/reset.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-5.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/calendar.css');?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>

    <title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>
</head>

<body id="<?php echo isset($modul) ? $modul : ''; ?>">

    <div id="masthead">
        <?php $this->load->view('masthead'); ?>
    </div>

    <div id="navigation">
        <?php $this->load->view('navigation_mariana'); ?>
    </div>

    <div id="main">
        <?php $this->load->view($main_view); ?>
    </div>

    <div id="footer">
        <?php $this->load->view('footer'); ?>
    </div>

</body>
</html>