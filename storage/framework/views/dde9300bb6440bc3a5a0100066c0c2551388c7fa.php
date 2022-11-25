<?php $__env->startSection('container'); ?>
<div class="page-title">
    <div class="title_left">
        <h3>Add New Post</h3>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add <small>details and post</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="title" id="title" required="required" class="form-control" placeholder="post title">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="short_desc">Short Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea class="resizable_textarea form-control" placeholder="write short description about post" name="short_desc" id="short_desc"></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="long_desc">Long Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea class="resizable_textarea form-control" placeholder="write about post" name="long_desc" id="long_desc" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="inputGroupFile04">Image<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" class="custom-file-input form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image" required="required">
                            <label class="custom-file-label col-form-label" for="inputGroupFile04">Choose file</label>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" name="title" id="title" required="required" class="form-control custom-file-input" >
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="title" id="image" required="required" class="form-control" >
                        </div>
                    </div>
                    <!-- <div class="item form-group">
                    <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                          <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                          <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                            <span class="fa fa-upload"></span>
                          </span>
                        </label>
                    </div> -->
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Post Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                            <script>
                                function timeFunctionLong(input) {
                                    setTimeout(function() {
                                        input.type = 'text';
                                    }, 60000);
                                }
                            </script>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="<?php echo e(url('admin/post/list')); ?>"><button class="btn btn-primary" type="button">Back</button></a>
                            <button class="btn btn-warning" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/blog/resources/views/admin/post/add.blade.php ENDPATH**/ ?>