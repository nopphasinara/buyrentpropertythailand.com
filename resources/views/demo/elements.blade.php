<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Hello, world!</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="{{ asset('/css/demo/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" crossorigin="anonymous">
    <body>
        <h1 class="animated infinite flash slow delay-1s">Example</h1>

        <section>
            <nav class="nav" role="navigation">
                <ul class="list-unstyled nav__list mt-0 mb-0 p-0 m-0">
                    <li class="mt-0 mb-0 p-0 m-0">
                        <input id="group-1" type="checkbox" hidden />
                        <label for="group-1"><span class="fa fa-angle-right"></span> First level</label>
                        <ul class="list-unstyled group-list mt-0 mb-0 p-0 m-0">
                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                            <li class="mt-0 mb-0 p-0 m-0">
                                <input id="sub-group-1" type="checkbox" hidden />
                                <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
                                <ul class="list-unstyled sub-group-list mt-0 mb-0 p-0 m-0">
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0">
                                        <input id="sub-sub-group-1" type="checkbox" hidden />
                                        <label for="sub-sub-group-1"><span class="fa fa-angle-right"></span> Third level</label>
                                        <ul class="list-unstyled sub-sub-group-list mt-0 mb-0 p-0 m-0">
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-0 mb-0 p-0 m-0">
                        <input id="group-2" type="checkbox" hidden />
                        <label for="group-2"><span class="fa fa-angle-right"></span> First level</label>
                        <ul class="list-unstyled group-list mt-0 mb-0 p-0 m-0">
                            <li class="mt-0 mb-0 p-0 m-0">
                                <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                                <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                                <input id="sub-group-2" type="checkbox" hidden />
                                <label for="sub-group-2"><span class="fa fa-angle-right"></span> Second level</label>
                                <ul class="list-unstyled sub-group-list mt-0 mb-0 p-0 m-0">
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0">
                                        <input id="sub-sub-group-2" type="checkbox" hidden />
                                        <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span> Third level</label>
                                        <ul class="list-unstyled sub-sub-group-list mt-0 mb-0 p-0 m-0">
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-0 mb-0 p-0 m-0">
                        <input id="group-3" type="checkbox" hidden />
                        <label for="group-3"><span class="fa fa-angle-right"></span> First level</label>
                        <ul class="list-unstyled group-list mt-0 mb-0 p-0 m-0">
                            <li class="mt-0 mb-0 p-0 m-0">
                                <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                                <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                                <input id="sub-group-3" type="checkbox" hidden />
                                <label for="sub-group-3"><span class="fa fa-angle-right"></span> Second level</label>
                                <ul class="list-unstyled sub-group-list mt-0 mb-0 p-0 m-0">
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0">
                                        <input id="sub-sub-group-3" type="checkbox" hidden />
                                        <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span> Third level</label>
                                        <ul class="list-unstyled sub-sub-group-list mt-0 mb-0 p-0 m-0">
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                            <li class="mt-0 mb-0 p-0 m-0"><a href="#">3rd level nav item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-0 mb-0 p-0 m-0">
                        <input id="group-4" type="checkbox" hidden />
                        <label for="group-4"><span class="fa fa-angle-right"></span> First level</label>
                        <ul class="list-unstyled group-list mt-0 mb-0 p-0 m-0">
                            <li class="mt-0 mb-0 p-0 m-0">
                                <li class="mt-0 mb-0 p-0 m-0"><a href="#">1st level item</a></li>
                                <input id="sub-group-4" type="checkbox" hidden />
                                <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
                                <ul class="list-unstyled sub-group-list mt-0 mb-0 p-0 m-0">
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                    <li class="mt-0 mb-0 p-0 m-0"><a href="#">2nd level nav item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </section>

        <section>
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>
        </section>

        <section>
            <a class="btn btn-social btn-facebook">
                <i class="fab fa-facebook-f"></i>
                Facebook
            </a>

            <a class="btn btn-social-icon btn-facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

            <form class="form-signin text-center ">
                <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <hr />
                <a href="#" class="btn btn-block btn-social btn-facebook">
                    <i class="fab fa-facebook-f"></i>
                    Login via Facebook
                </a>
                <a  href="#"class="btn btn-block btn-social btn-google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1024px-Google_%22G%22_Logo.svg.png">
                    Login via Google
                </a>
            </form>
        </section>

        <section>
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>
        </section>

        <section>
            <div class="row row-relative">
                <div class="col-sm-4">
                    <h2>Column 1</h2>
                    <p>Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-sm-4 col-border">
                    <div class="col-border-padding">
                        <h2>Column 2</h2>
                        <p>Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-border">
                    <div class="col-border-padding">
                        <h2>Column 3</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="container h-100">
          <div class="d-flex align-items-start flex-column h-100">
            <div class="w-100 m-auto py-5 text-center">

              <div class="custom-switch pl-0">
                <input class="custom-switch-input" id="example_01" type="checkbox">
                <label class="custom-switch-btn" for="example_01"></label>
              </div>

              <hr>

              <div class="custom-switch custom-switch-label-io pl-0">
                <input class="custom-switch-input" id="example_02" type="checkbox">
                <label class="custom-switch-btn" for="example_02"></label>
              </div>

              <hr>

              <div class="custom-switch custom-switch-label-onoff pl-0">
                <input class="custom-switch-input" id="example_03" type="checkbox">
                <label class="custom-switch-btn" for="example_03"></label>
              </div>

              <hr>

              <div class="custom-switch custom-switch-label-yesno pl-0">
                <input class="custom-switch-input" id="example_04" type="checkbox">
                <label class="custom-switch-btn" for="example_04"></label>
              </div>

              <hr>

              <div class="custom-switch custom-switch-label-status pl-0">
                <input class="custom-switch-input" id="example_05" type="checkbox">
                <label class="custom-switch-btn" for="example_05"></label>
              </div>

              <hr>

              <div class="custom-switch custom-switch-label-onoff custom-switch-sm pl-0">
                <input class="custom-switch-input" id="example_06" type="checkbox">
                <label class="custom-switch-btn" for="example_06"></label>
              </div>
              <p>I'm <code>sm</code></p>

              <hr>

              <div class="custom-switch custom-switch-label-onoff custom-switch-xs pl-0">
                <input class="custom-switch-input" id="example_07" type="checkbox">
                <label class="custom-switch-btn" for="example_07"></label>
              </div>
              <p>I'm <code>xs</code></p>

              <hr>

              <div class="custom-switch custom-switch-label-yesno pl-0">
                <input class="custom-switch-input" id="example_08" type="checkbox">
                <label class="custom-switch-btn" for="example_08"></label>
                <div class="custom-switch-content-checked">
                  <span class="text-success">I'm checked</span>
                </div>
                <div class="custom-switch-content-unchecked">
                  <span class="text-danger">I'm unchecked (click me!)</span>
                </div>
              </div>

              <hr>

              <div class="custom-switch pl-0">
                <input class="custom-switch-input" id="example_09" type="checkbox" required>
                <label class="custom-switch-btn" for="example_09"></label>
              </div>
              <p>I'm <code>required</code></p>

              <hr>

              <div class="custom-switch pl-0">
                <input class="custom-switch-input" id="example_10" type="checkbox" disabled>
                <label class="custom-switch-btn" for="example_10"></label>
              </div>
              <div class="custom-switch pl-0">
                <input class="custom-switch-input" id="example_11" type="checkbox" checked disabled>
                <label class="custom-switch-btn" for="example_11"></label>
              </div>
              <p>I'm <code>disabled</code></p>

              <hr>

              <div class="form-group">
                <div for="example_12">I'm a &lt;div&gt; form label:</div>
                <div class="custom-switch pl-0">
                  <input type="checkbox" class="custom-switch-input" id="example_12" checked>
                  <label class="custom-switch-btn text-hide" for="example_12">{value}</label>
                </div>
              </div>

              <hr>
              <legend>Validation</legend>
              <form class="was-validated">
                <div class="form-group is-invalid">
                  <div class="custom-switch pl-0">
                    <input class="custom-switch-input" id="example_13" type="checkbox">
                    <label class="custom-switch-btn" for="example_13"></label>
                  </div>
                </div>
              </form>
              <p>I'm <code>invalid</code></p>

            </div>
          </div>
        </div>



        <h2 id="icheck-bootstrap">Twitter Bootstrap colors</h2>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="icheck-primary">
                    <input type="checkbox" checked id="primary" />
                    <label for="primary">primary</label>
                </div>
                <div class="icheck-primary">
                    <input type="radio" id="primary1" name="primary" />
                    <label for="primary1">primary 1</label>
                </div>
                <div class="icheck-primary">
                    <input type="radio" checked id="primary2" name="primary" />
                    <label for="primary2">primary 2</label>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="icheck-default">
                    <input type="checkbox" checked id="default" />
                    <label for="default">default</label>
                </div>
                <div class="icheck-default">
                    <input type="radio" id="default1" name="default" />
                    <label for="default1">default 1</label>
                </div>
                <div class="icheck-default">
                    <input type="radio" checked id="default2" name="default" />
                    <label for="default2">default 2</label>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-success">
                    <input type="checkbox" checked id="success" />
                    <label for="success">success</label>
                </div>
                <div class="radio icheck-success">
                    <input type="radio" id="success1" name="success" />
                    <label for="success1">success 1</label>
                </div>
                <div class="radio icheck-success">
                    <input type="radio" checked id="success2" name="success" />
                    <label for="success2">success 2</label>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-info">
                    <input type="checkbox" checked id="info" />
                    <label for="info">info</label>
                </div>
                <div class="radio icheck-info">
                    <input type="radio" id="info1" name="info" />
                    <label for="info1">info 1</label>
                </div>
                <div class="radio icheck-info">
                    <input type="radio" checked id="info2" name="info" />
                    <label for="info2">info 2</label>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-warning">
                    <input type="checkbox" checked id="warning" />
                    <label for="warning">warning</label>
                </div>
                <div class="radio icheck-warning">
                    <input type="radio" id="warning1" name="warning" />
                    <label for="warning1">warning 1</label>
                </div>
                <div class="radio icheck-warning">
                    <input type="radio" checked id="warning2" name="warning" />
                    <label for="warning2">warning 2</label>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-danger">
                    <input type="checkbox" checked id="danger" />
                    <label for="danger">danger</label>
                </div>
                <div class="radio icheck-danger">
                    <input type="radio" id="danger1" name="danger" />
                    <label for="danger1">danger 1</label>
                </div>
                <div class="radio icheck-danger">
                    <input type="radio" checked id="danger2" name="danger" />
                    <label for="danger2">danger 2</label>
                </div>
            </div>
        </div>
        <h2 id="icheck-bootstrap">Flat UI colors</h2>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-turquoise">
                    <input type="checkbox" checked id="turquoise" />
                    <label for="turquoise">turquoise</label>
                </div>
                <div class="radio icheck-turquoise">
                    <input type="radio" id="turquoise1" name="turquoise" />
                    <label for="turquoise1">turquoise 1</label>
                </div>
                <div class="radio icheck-turquoise">
                    <input type="radio" checked id="turquoise2" name="turquoise" />
                    <label for="turquoise2">turquoise 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-emerland">
                    <input type="checkbox" checked id="emerland" />
                    <label for="emerland">emerland</label>
                </div>
                <div class="radio icheck-emerland">
                    <input type="radio" id="emerland1" name="emerland" />
                    <label for="emerland1">emerland 1</label>
                </div>
                <div class="radio icheck-emerland">
                    <input type="radio" checked id="emerland2" name="emerland" />
                    <label for="emerland2">emerland 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-peterriver">
                    <input type="checkbox" checked id="peterriver" />
                    <label for="peterriver">peterriver</label>
                </div>
                <div class="radio icheck-peterriver">
                    <input type="radio" id="peterriver1" name="peterriver" />
                    <label for="peterriver1">peterriver 1</label>
                </div>
                <div class="radio icheck-peterriver">
                    <input type="radio" checked id="peterriver2" name="peterriver" />
                    <label for="peterriver2">peterriver 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-amethyst">
                    <input type="checkbox" checked id="amethyst" />
                    <label for="amethyst">amethyst</label>
                </div>
                <div class="radio icheck-amethyst">
                    <input type="radio" id="amethyst1" name="amethyst" />
                    <label for="amethyst1">amethyst 1</label>
                </div>
                <div class="radio icheck-amethyst">
                    <input type="radio" checked id="amethyst2" name="amethyst" />
                    <label for="amethyst2">amethyst 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-wetasphalt">
                    <input type="checkbox" checked id="wetasphalt" />
                    <label for="wetasphalt">wetasphalt</label>
                </div>
                <div class="radio icheck-wetasphalt">
                    <input type="radio" id="wetasphalt1" name="wetasphalt" />
                    <label for="wetasphalt1">wetasphalt 1</label>
                </div>
                <div class="radio icheck-wetasphalt">
                    <input type="radio" checked id="wetasphalt2" name="wetasphalt" />
                    <label for="wetasphalt2">wetasphalt 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-greensea">
                    <input type="checkbox" checked id="greensea" />
                    <label for="greensea">greensea</label>
                </div>
                <div class="radio icheck-greensea">
                    <input type="radio" id="greensea1" name="greensea" />
                    <label for="greensea1">greensea 1</label>
                </div>
                <div class="radio icheck-greensea">
                    <input type="radio" checked id="greensea2" name="greensea" />
                    <label for="greensea2">greensea 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-nephritis">
                    <input type="checkbox" checked id="nephritis" />
                    <label for="nephritis">nephritis</label>
                </div>
                <div class="radio icheck-nephritis">
                    <input type="radio" id="nephritis1" name="nephritis" />
                    <label for="nephritis1">nephritis 1</label>
                </div>
                <div class="radio icheck-nephritis">
                    <input type="radio" checked id="nephritis2" name="nephritis" />
                    <label for="nephritis2">nephritis 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-belizehole">
                    <input type="checkbox" checked id="belizehole" />
                    <label for="belizehole">belizehole</label>
                </div>
                <div class="radio icheck-belizehole">
                    <input type="radio" id="belizehole1" name="belizehole" />
                    <label for="belizehole1">belizehole 1</label>
                </div>
                <div class="radio icheck-belizehole">
                    <input type="radio" checked id="belizehole2" name="belizehole" />
                    <label for="belizehole2">belizehole 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-wisteria">
                    <input type="checkbox" checked id="wisteria" />
                    <label for="wisteria">wisteria</label>
                </div>
                <div class="radio icheck-wisteria">
                    <input type="radio" id="wisteria1" name="wisteria" />
                    <label for="wisteria1">wisteria 1</label>
                </div>
                <div class="radio icheck-wisteria">
                    <input type="radio" checked id="wisteria2" name="wisteria" />
                    <label for="wisteria2">wisteria 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-midnightblue">
                    <input type="checkbox" checked id="midnightblue" />
                    <label for="midnightblue">midnightblue</label>
                </div>
                <div class="radio icheck-midnightblue">
                    <input type="radio" id="midnightblue1" name="midnightblue" />
                    <label for="midnightblue1">midnightblue 1</label>
                </div>
                <div class="radio icheck-midnightblue">
                    <input type="radio" checked id="midnightblue2" name="midnightblue" />
                    <label for="midnightblue2">midnightblue 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-sunflower">
                    <input type="checkbox" checked id="sunflower" />
                    <label for="sunflower">sunflower</label>
                </div>
                <div class="radio icheck-sunflower">
                    <input type="radio" id="sunflower1" name="sunflower" />
                    <label for="sunflower1">sunflower 1</label>
                </div>
                <div class="radio icheck-sunflower">
                    <input type="radio" checked id="sunflower2" name="sunflower" />
                    <label for="sunflower2">sunflower 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-carrot">
                    <input type="checkbox" checked id="carrot" />
                    <label for="carrot">carrot</label>
                </div>
                <div class="radio icheck-carrot">
                    <input type="radio" id="carrot1" name="carrot" />
                    <label for="carrot1">carrot 1</label>
                </div>
                <div class="radio icheck-carrot">
                    <input type="radio" checked id="carrot2" name="carrot" />
                    <label for="carrot2">carrot 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-alizarin">
                    <input type="checkbox" checked id="alizarin" />
                    <label for="alizarin">alizarin</label>
                </div>
                <div class="radio icheck-alizarin">
                    <input type="radio" id="alizarin1" name="alizarin" />
                    <label for="alizarin1">alizarin 1</label>
                </div>
                <div class="radio icheck-alizarin">
                    <input type="radio" checked id="alizarin2" name="alizarin" />
                    <label for="alizarin2">alizarin 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-clouds">
                    <input type="checkbox" checked id="clouds" />
                    <label for="clouds">clouds</label>
                </div>
                <div class="radio icheck-clouds">
                    <input type="radio" id="clouds1" name="clouds" />
                    <label for="clouds1">clouds 1</label>
                </div>
                <div class="radio icheck-clouds">
                    <input type="radio" checked id="clouds2" name="clouds" />
                    <label for="clouds2">clouds 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-concrete">
                    <input type="checkbox" checked id="concrete" />
                    <label for="concrete">concrete</label>
                </div>
                <div class="radio icheck-concrete">
                    <input type="radio" id="concrete1" name="concrete" />
                    <label for="concrete1">concrete 1</label>
                </div>
                <div class="radio icheck-concrete">
                    <input type="radio" checked id="concrete2" name="concrete" />
                    <label for="concrete2">concrete 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-orange">
                    <input type="checkbox" checked id="orange" />
                    <label for="orange">orange</label>
                </div>
                <div class="radio icheck-orange">
                    <input type="radio" id="orange1" name="orange" />
                    <label for="orange1">orange 1</label>
                </div>
                <div class="radio icheck-orange">
                    <input type="radio" checked id="orange2" name="orange" />
                    <label for="orange2">orange 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-pumpkin">
                    <input type="checkbox" checked id="pumpkin" />
                    <label for="pumpkin">pumpkin</label>
                </div>
                <div class="radio icheck-pumpkin">
                    <input type="radio" id="pumpkin1" name="pumpkin" />
                    <label for="pumpkin1">pumpkin 1</label>
                </div>
                <div class="radio icheck-pumpkin">
                    <input type="radio" checked id="pumpkin2" name="pumpkin" />
                    <label for="pumpkin2">pumpkin 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-pomegranate">
                    <input type="checkbox" checked id="pomegranate" />
                    <label for="pomegranate">pomegranate</label>
                </div>
                <div class="radio icheck-pomegranate">
                    <input type="radio" id="pomegranate1" name="pomegranate" />
                    <label for="pomegranate1">pomegranate 1</label>
                </div>
                <div class="radio icheck-pomegranate">
                    <input type="radio" checked id="pomegranate2" name="pomegranate" />
                    <label for="pomegranate2">pomegranate 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-silver">
                    <input type="checkbox" checked id="silver" />
                    <label for="silver">silver</label>
                </div>
                <div class="radio icheck-silver">
                    <input type="radio" id="silver1" name="silver" />
                    <label for="silver1">silver 1</label>
                </div>
                <div class="radio icheck-silver">
                    <input type="radio" checked id="silver2" name="silver" />
                    <label for="silver2">silver 2</label>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-asbestos">
                    <input type="checkbox" checked id="asbestos" />
                    <label for="asbestos">asbestos</label>
                </div>
                <div class="radio icheck-asbestos">
                    <input type="radio" id="asbestos1" name="asbestos" />
                    <label for="asbestos1">asbestos 1</label>
                </div>
                <div class="radio icheck-asbestos">
                    <input type="radio" checked id="asbestos2" name="asbestos" />
                    <label for="asbestos2">asbestos 2</label>
                </div>
            </div>
        </div>

    <script src="{{ asset('/js/demo/app.js') }}" crossorigin="anonymous"></script>
</body>
</html>
