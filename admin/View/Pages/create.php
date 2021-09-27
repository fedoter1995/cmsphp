<?php $this->theme->header(); ?>
<style>
.title h3 {

   text-align: center;

}



</style>
    <main>
        <div class="container title ">
            <h3>Create Page</h3>
            <div class="row justify-content-center align-items-center h-100">
                <form method="POST">
                    <div class="form-group row">
                        <label for="formTitle" class="col-sm-2 col-form-label">Title</label>
                        
                        <input type="text" class="form-control" id="formTitle" name="title" placeholder="Title page">
                        
                        <label for="formContent" class="col-sm-2 col-form-label">Content</label>
                    
                        <textarea class="form-control" id="formContent"></textarea> 
                    </div>
                </form>
            </div>
            <div class="row justify-content-center align-items-center h-100">
                <div class="create  "><input class="btn btn-primary"  type="submit" value="Create" onclick="page.add()" ></div>
            </div>
            
        </div>
    </main>

    <?php $this->theme->footer(); ?>