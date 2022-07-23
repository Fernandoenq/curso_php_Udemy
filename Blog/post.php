<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div  class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-contente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt cumque molestias nesciunt fugiat, reiciendis adipisci? Commodi officiis consequatur minima suscipit, vero doloribus deleniti vel culpa velit aspernatur recusandae magni.
        Ut, nesciunt dignissimos? Eligendi quasi, suscipit saepe explicabo voluptatum, a esse perferendis rerum sequi reiciendis similique ipsa ea inventore nisi. Nam iusto minima alias dolorum, commodi aliquam incidunt qui laudantium!
        Doloribus molestiae reprehenderit quaerat iure quam magni earum saepe provident dolore voluptas, ut ipsam voluptatibus, delectus eius! Repellendus ea, quos officiis dignissimos, ex dolore ab voluptatem ipsa mollitia quae accusantium!
        Doloremque aperiam perspiciatis laboriosam natus minima harum facere iure molestias dolor commodi, id inventore eveniet ducimus eos cumque cum sint quos veritatis beatae ex iusto? Beatae omnis quam fugiat? Excepturi.
        Adipisci minima voluptate modi recusandae consequatur omnis, voluptates expedita quam quibusdam officiis inventore et, nisi nesciunt ipsa eius dolorum assumenda reprehenderit ducimus sint fugit sed obcaecati, corrupti molestias. Maiores, ea.</p>
        
        <p class="post-contente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt cumque molestias nesciunt fugiat, reiciendis adipisci? Commodi officiis consequatur minima suscipit, vero doloribus deleniti vel culpa velit aspernatur recusandae magni.
        Ut, nesciunt dignissimos? Eligendi quasi, suscipit saepe explicabo voluptatum, a esse perferendis rerum sequi reiciendis similique ipsa ea inventore nisi. Nam iusto minima alias dolorum, commodi aliquam incidunt qui laudantium!
        Doloribus molestiae reprehenderit quaerat iure quam magni earum saepe provident dolore voluptas, ut ipsam voluptatibus, delectus eius! Repellendus ea, quos officiis dignissimos, ex dolore ab voluptatem ipsa mollitia quae accusantium!
        Doloremque aperiam perspiciatis laboriosam natus minima harum facere iure molestias dolor commodi, id inventore eveniet ducimus eos cumque cum sint quos veritatis beatae ex iusto? Beatae omnis quam fugiat? Excepturi.
        Adipisci minima voluptate modi recusandae consequatur omnis, voluptates expedita quam quibusdam officiis inventore et, nisi nesciunt ipsa eius dolorum assumenda reprehenderit ducimus sint fugit sed obcaecati, corrupti molestias. Maiores, ea.</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title"> Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach;?>
        </ul>
    </aside> 
    
    </main>

    
    
<?php
    include_once("templates/footer.php");
?>