<?php $this->theme->header(); ?>
<style>
h3{

   text-align: center;


}
a{
  float: right;
}

</style><h3>Pages</h3><a class="btn btn-primary" href="/admin/pages/create/">Create Page</a>
    <main>
      

        <div class="container title">
            

            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($pages as $page) : ?>
    <tr>
      <th scope="row"><?= $page['id']?></th>
      <td><?= $page['title']?></td>
      <td><?= $page['date']?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
        </div>
    </main>

    <?php $this->theme->footer(); ?>