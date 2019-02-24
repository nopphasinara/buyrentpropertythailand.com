<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/demo/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <nav class="nav-top p-3">
        <div class="container-fluid d-flex align-items-center no-padding">
            <h2 class="logo">LOGO</h2>
            <ul class="d-flex list-unstyled list list-top">
                <li><a href="">About</a></li>
                <li><a href="">Clients</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul class="d-flex list-unstyled list ml-auto">
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
            </ul>
            <button class="toggle-menu ml-2 d-md-none" aria-label="Responsive Navigation Menu">
                <!--icon from https://iconmonstr.com-->
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/hamburger.svg" alt="">
            </button>
        </div>
    </nav>

    <div id="accordion" class="myaccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Undergraduate Studies
                        <span class="fa-stack fa-sm">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>Computer Science</li>
                        <li>Economics</li>
                        <li>Sociology</li>
                        <li>Nursing</li>
                        <li>English</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Postgraduate Studies
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>Informatics</li>
                        <li>Mathematics</li>
                        <li>Greek</li>
                        <li>Biostatistics</li>
                        <li>English</li>
                        <li>Nursing</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Research
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li>Astrophysics</li>
                        <li>Informatics</li>
                        <li>Criminology</li>
                        <li>Economics</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a vulputate ligula. Integer elementum finibus arcu, ac faucibus nulla commodo ac. Proin nunc mi, feugiat in rhoncus et, mattis quis enim. Duis metus nulla, cursus et urna eget, bibendum commodo magna. Donec placerat arcu leo, quis ultrices felis blandit sed. Vivamus vehicula urna pretium dapibus dignissim. Vestibulum nibh tellus, sodales ut eros sit amet, fringilla blandit eros. Donec volutpat metus non lorem sodales lobortis. Mauris tincidunt pharetra ultrices.</p>

                <p>ed varius nibh ut neque tincidunt, eu blandit libero hendrerit. Mauris eu diam eget risus vestibulum tincidunt. Integer volutpat, lorem a lobortis egestas, ligula nisl feugiat tortor, sed condimentum nulla ligula at justo. Praesent non est justo. Sed vitae rutrum est. In et risus id sem egestas iaculis nec vitae erat. Donec sed massa a lacus ultrices feugiat. Mauris scelerisque efficitur est, nec tincidunt neque interdum vitae. Donec convallis venenatis nisl eget ullamcorper. Mauris dapibus risus quis sapien varius, vel convallis justo mattis. Curabitur id condimentum turpis. Fusce vitae dui at nunc condimentum congue.</p>

                <p>Vivamus placerat dapibus enim, nec semper massa malesuada eu. Sed ultrices, ex sit amet facilisis faucibus, nunc enim imperdiet enim, eget eleifend nisi dui ut dolor. Integer quam quam, commodo ut elementum non, elementum sit amet tortor. Aliquam malesuada mi id vulputate consectetur. In velit eros, sodales et sem non, ullamcorper rutrum nunc. Praesent nec fermentum neque. Nam at arcu luctus nisl congue vehicula at et odio. Nullam posuere sit amet lacus et ornare. Cras vitae quam tempor diam condimentum ultricies vitae id risus. Nunc euismod porta nulla non consequat. Etiam euismod volutpat vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec scelerisque eu turpis et dictum.</p>

                <p>Suspendisse molestie mauris turpis, vel imperdiet libero tempus et. Vivamus nec erat porta elit suscipit laoreet ut eu nulla. Phasellus sagittis magna eu nisi accumsan, at molestie tellus pharetra. Sed at nibh at sem tristique maximus id vel magna. Sed quis vulputate nulla. Mauris rhoncus dolor et placerat finibus. Phasellus venenatis turpis ac ornare viverra.</p>

                <p>Donec porta turpis eget pharetra mattis. Nunc non finibus diam. Quisque enim erat, egestas id posuere quis, facilisis eget neque. Aenean ornare convallis neque eget pharetra. Suspendisse blandit pharetra elit, eget ultrices lorem porta auctor. Nullam malesuada lobortis massa, ac porttitor dui dapibus eget. Vestibulum tincidunt eros id ante consectetur, ut mollis enim posuere. Vivamus aliquet urna ante, et tempor risus facilisis in. Morbi sem tellus, dictum ultrices viverra ut, ornare gravida sapien.</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/demo/app.js') }}" crossorigin="anonymous"></script>
</body>
</html>
