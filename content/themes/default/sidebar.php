<style>
.sub{
    position: absolute;
    right:10px;
}

</style>


<nav class=" navbar navbar-expand-lg navbar-dark bg-dark container ">
            <div class="container">
                <a class="navbar-brand" href="#">Dr. John A. Zoidberg</a>
                <div class="dropdown">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex justify-content-center nav-menu">
                        <?php for ($i = 0; $i < count($navMenu); $i++): ?>
                        <a class="nav-item nav-link" href="<?=$navMenu[$i]["url"]?>"><?=$navMenu[$i]["name"]?></a>
                        <?php endfor ?>
                        <?php if($_COOKIE["admin"] || $_COOKIE["user"]): ?>
                            <a class=" btn btn-md btn-success sub" type="submit" href="<?= $url . "\secure\logout.php"?>">Unsign</a>
                        <?php else : ?>
                            <a class=" btn btn-md btn-success sub" type="submit" href="<?=$sing_in_btn["url"]?>">Sign in</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>

        </nav>