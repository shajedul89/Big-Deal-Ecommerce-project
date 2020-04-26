<!DOCTYPE html>
<html lang="en" class="app">
<!-- Mirrored from flatfull.com/themes/scale/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:13:57 GMT -->

<head>
   @include('admin.layout.header')
</head>

<body class="">
    <section class="vbox">
        

@include('admin.layout.page-header')


        <section>
            <section class="hbox stretch">
                <!-- .aside -->
              

              @include('admin.layout.menu')

                <!-- /.aside -->

                @section('page-content')
                @show
                
            </section>
        </section>
    </section>
    <!-- Bootstrap -->
    <!-- App -->
    @include('admin.layout.footer')
</body>
<!-- Mirrored from flatfull.com/themes/scale/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:14:15 GMT -->

</html>