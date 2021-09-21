<?php $this->theme->header(); ?>
<style>
.title h3{

   text-align: center;

}

</style>
    <main>
        <div class="container title">
            <h3>Add Page</h3>

            <form>
                <div class="form-group row">
                    <label for="formTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="formTitle" placeholder="Title page">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php $this->theme->footer(); ?>