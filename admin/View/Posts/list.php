<?php $this->theme->header(); ?>
<style>
h3{

   text-align: center;


}
a{
  float: right;
}

</style><h3>Posts</h3><a class="btn btn-primary" href="/admin/posts/create/">Create Post</a>
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
    <?php foreach($posts as $post) : ?>
    <tr>
      <th scope="row">
        <?= $post->id?>
      </th>
      <th class="float-left">
        <a href="/admin/posts/edit/<?=$post->id?>">
          <?= $post->title?>
        </a>
        
      </th>
      <td><?= $post->date_reg?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
        </div>
    </main>

    <?php $this->theme->footer(); ?>