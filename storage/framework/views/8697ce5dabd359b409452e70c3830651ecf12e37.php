<?php $__env->startSection('content'); ?>
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <?php if($post->imagem == null): ?>
                                            <img src="<?php echo e(asset('appimages/semimagem.png')); ?>" alt="<?php echo e($post->intro); ?>" class="img-fluid">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('appimages/noticias/'.$post->imagem)); ?>" alt="<?php echo e($post->intro); ?>" class="img-fluid">
                                        <?php endif; ?>
                                    </div>

                                    <div class="blog-item-content">
                                        <div class="blog-item-meta mb-3 mt-4">
                                            <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                                            <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> <?php echo e($post->created_at->diffForHumans()); ?> </span>
                                        </div>

                                        <h2 class="mt-3 mb-3"><a href="#"><?php echo e($post->titulo); ?></a></h2>

                                        <p class="mb-4"><?php echo e($post->intro); ?></p>

                                        <a href="#" target="_blank" class="btn btn-main btn-icon btn-round-full">Ler mais <i class="icofont-simple-right ml-2  "></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
        <div class="sidebar-widget search  mb-3 ">
            <h5>Pesquisar</h5>
            <form action="#" class="search-form">
                <input type="text" class="form-control" placeholder="Texto a pesquisar">
                <i class="ti-search"></i>
            </form>
        </div>


        <div class="sidebar-widget latest-post mb-3">
            <h5>Últimas publicações</h5>
            <?php $__currentLoopData = $lasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="py-2">
                    <span class="text-sm text-muted"><?php echo e($last->created_at); ?></span>
                <h6 class="my-2"><a href="#"><?php echo e($last->titulo); ?></a></h6>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="sidebar-widget category mb-3">
            <h5 class="mb-4">Categories</h5>

            <ul class="list-unstyled">
            <li class="align-items-center">
                <a href="#">Medicine</a>
                <span>(14)</span>
            </li>
            <li class="align-items-center">
                <a href="#">Equipments</a>
                <span>(2)</span>
            </li>
            <li class="align-items-center">
                <a href="#">Heart</a>
                <span>(10)</span>
            </li>
            <li class="align-items-center">
                <a href="#">Free counselling</a>
                <span>(5)</span>
            </li>
            <li class="align-items-center">
                <a href="#">Lab test</a>
                <span>(5)</span>
            </li>
            </ul>
        </div>


        <div class="sidebar-widget tags mb-3">
            <h5 class="mb-4">Tags</h5>

            <a href="#">Doctors</a>
            <a href="#">agency</a>
            <a href="#">company</a>
            <a href="#">medicine</a>
            <a href="#">surgery</a>
            <a href="#">Marketing</a>
            <a href="#">Social Media</a>
            <a href="#">Branding</a>
            <a href="#">Laboratory</a>
        </div>


        <div class="sidebar-widget schedule-widget mb-3">
            <h5 class="mb-4">Time Schedule</h5>

            <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center">
                <a href="#">Monday - Friday</a>
                <span>9:00 - 17:00</span>
            </li>
            <li class="d-flex justify-content-between align-items-center">
                <a href="#">Saturday</a>
                <span>9:00 - 16:00</span>
            </li>
            <li class="d-flex justify-content-between align-items-center">
                <a href="#">Sunday</a>
                <span>Closed</span>
            </li>
            </ul>

            <div class="sidebar-contatct-info mt-4">
                <p class="mb-0">Need Urgent Help?</p>
                <h3>+23-4565-65768</h3>
            </div>
        </div>

    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8">
                    <nav class="pagination py-2 d-inline-block">
                        <div class="nav-links">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blogue\resources\views/inicio.blade.php ENDPATH**/ ?>