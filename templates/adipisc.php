<?php //echo action; ?>
 <section id="adipisc" class="bg-bluelight py-5">
        <div class="container py-5">
            <div class="row ">
                <div class="col-md-12 row justify-content-between align-items-end">
                    <div class="col-md-6 py-5">
                        <h2 class="display-1">ADIPISC <br>NG ELIT</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nibh ante, dignissim at nulla eu, cursus tincidunt erat. Vivamus augue erat, suscipit eu ...</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/img-light.png" alt="Global - Parallax" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-12 row cartoes mt-4">
                    <?php for ($i=0; $i < 3; $i++) { ?>
                        <div class="col-md-4 col-12 mb-md-0 mb-4">
                            <div class="card px-0 mx-0 rounded shadow">
                                <div class="py-lg-4 py-2 px-xl-5 px-3">
                                  <h3 class="text-center my-4 my-lg-2 mx-3">LOREM IPSUM <span class="d-block color1 mb-2">ALIQUAN</span></h3>
                                  <hr class="my-4">
                                  <p class="text-center mt-3 py-lg-4 py-2 px-sm-3">Nam ut vehicula neque. Sed ante nulla, malesuada id volutpat a, iaculis vel nisl. <b>Curabitur</b> convallis elementum enim, et tincidunt nibh. Donec ultrices, quam nec semper pharetra, dolor nibh placerat ipsum, sit amet lacinia sem odio nec tellus. <b>Aliquam</b> congue turpis at leo ultrices maximus. </p>
                                </div>
                                <div class="bg-light text-center rounded-bottom">
                                    <h6 class="mb-4" style="font-weight: 600;">LOREM IPSUM</h6>
                                    <a class="btn btn-outline-danger rounded-1 btn-sm px-4 mb-2">ULLAMCORPER</a>
                                    <a class="btn btn-outline-danger rounded-1 btn-sm px-4 mb-2">VEHICULA</a>
                                    <a class="btn btn-outline-danger rounded-1 btn-sm px-4 mb-2">AENEAN</a>
                                    <a class="btn btn-outline-danger rounded-1 btn-sm px-4 mb-2">DONEC</a>
                                </div>  
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    