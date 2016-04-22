<?php require_once('header.php'); ?>
    
    <section class="container">
        <div class="post-container">
            <?php for ($i=1; $i <= 8; $i++) { ?> 
                <article class="post-item">
                    <div class="post-header <?php echo $i == 2 ? 'no-image' : 'with-image'; ?>">
                        <a href="post.php">
                            <div class="bg-image" style="background-image: url('//fakeimg.pl/700/?text=Post <?php echo $i; ?>')"></div>
                        </a>
                    </div>
                    <header class="post-title">
                        <h2 class="title">
                            <a href="post.php" title="Post Title">Post Title</a>
                        </h2>
                    </header>
                    <div class="post-excerpt">
                        Cake pastry pastry cookie. Sweet jelly beans wafer brownie cake cake candy. Jujubes icing jelly gingerbread cake. Fruitcake gummies icing sweet roll. Cupcake jujubes halvah tiramisu powder cheesecake topping. Jelly-o marshmallow liquorice fruitcake. Powder soufflé.
                    </div>
                    <footer class="post-footer">
                        <a href="post.php" class="btn btn-default btn-readmore">
                            <i class="fa fa-chevron-right icon" aria-hidden="true"></i>
                            <i class="fa fa-thumbs-o-up icon-hover" aria-hidden="true"></i>
                            Ver post
                        </a>
                    </footer>
                </article>
            <?php } ?>
        </div>
    </section>
    
    <div class="text-center">
        <ul class="pagination">
            <li>
                <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#">1</a>
            </li>
            <li class="active">
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    
<?php require_once('footer.php'); ?>