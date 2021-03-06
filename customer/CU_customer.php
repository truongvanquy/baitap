﻿<!DOCTYPE html>
<html>
<head>
    <title>Quan ly khach hang</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/animations.css" rel="stylesheet" />
    <link href="Content/styles.css" rel="stylesheet" />
</head>
<body>

    <header class="navbar navbar-inner navbar-fixed-top">
        <nav class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="Content/images/people.png" alt="logo" />
                    <span class="appTitle">Khach Hang</span>
                </a>
            </div>
            <div class="nav-container" data-collapse="vm.isCollapsed">
                <ul class="nav navbar-nav nav-pills navBarPadding"
                    menu-highlighter highlight-class-name="active">
                       <li><a href="Index.php">Danh sách</a></li>
                    <li><a href="order.php">Đơn hàng</a></li>
                    <li><a href="#">Liên hệ </a></li>
                    <li>
                        <a href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="slide-animation-container">
        <div class="customers view indent">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
        </header>
   <div class="view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-edit"></span> Add Customer</h3>
        </header>
        <form name="editForm" novalidate action="xlcustomer/themcustomer.php" method="post">
            <div class="customerEdit">
                <div class="row">
                    <div class="col-md-12">
                        <h4><span></span></h4>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        First Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="firstName" class="form-control"  required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Last Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="lastName" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Gender:
                    </div>
                    <div class="col-md-10">
                        <div class="radio">
                            <label class="radio">
                                <input type="radio" name="gender" value="male"/>
                                Male
                            </label>
                        </div>
                        <div class="radio">
                            <label class="radio">
                                <input type="radio" name="gender" value="female"/>
                                Female
                                <br />
                            </label>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Email:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="email" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Address:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        City:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="city" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        State:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="state" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Zip:
                    </div>
                    <div class="col-md-10">
                        <input type="number" name="zip" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" >
                            Save
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn btn-danger" >Back Customer</button>
                    </div>
                </div>
                <br />
                
            </div>
        </form>
    </div>
</div>

    <div id="footer">
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner footer">
                <div class="container">
                    <footer>
                        <div class="row">
                            <div class="col-md-12">
                                Created by <a href="http://itc.edu.vn" target="_blank">Trần Công Mua </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>