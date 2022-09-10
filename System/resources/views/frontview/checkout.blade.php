<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('public')}}/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public')}}/style.css">
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="/register"><i class="fa fa-user"></i> Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="{{url('public')}}/img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="/cart">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/shop">Shop page</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">

            </nav><!-- End .breadcrumb-nav -->

        <div class="checkout">
        <div class="page-content">
                <div class="checkout">
                    <div class="container">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <br>
                                    <h2 class="checkout-title">Isi Alamat Pengiriman</h2><br>

                                    <label>Alamat Rumah *</label>
                                    <input type="text" class="form-control" placeholder="Nama Jalan" required>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Provinsi</label>
                                            <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($list_provinsi as $provinsi)
                                                <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        

                                    
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Kabupaten/Kota</label>
                                            <select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                                <option value="">Pilih Provinsi terlebih dahulu</option>
                                            </select><br>
                                        </div>


                                        <br>
                                        <div class=" col-md-6">
                                            <label for="" class="control-label">Kecamatan</label>
                                            <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                                <option value="">Pilih Kabupaten terlebih dahulu</option>
                                            </select><br>
                                        </div>

                        

                                        <br>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Desa</label>
                                            <select name="" class="form-control" id="desa">
                                                <option value="">Pilih Kecamatan terlebih dahulu</option>
                                            </select>
                                        </div>
                                    </div><!-- End .row -->

                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>KodePos*</label>
                                            <input type="text" class="form-control" required>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <br>
                                    <a href="{{url('index')}}"><fa class="btn btn-primary float-right">Selesai</a>
                                </div><!-- End .col-lg-9 -->
                            </div><!-- End .row -->
                        </form>
                    </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        </div>
    </div>
    <br>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/{{url('public')}}/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="{{url('public')}}/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="{{url('public')}}/js/main.js"></script>

    <script>
        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }
        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }
        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
  </body>
</html>