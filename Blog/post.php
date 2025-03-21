<?php
include_once("templatess/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}


?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
           
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<? $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio iusto voluptatum aut, porro voluptate nobis fuga deserunt, repellat molestias eveniet incidunt fugiat at rerum ipsa hic. Id inventore deserunt sint.
            Nam quos aperiam hic pariatur quis voluptatum cupiditate vero distinctio nostrum, aliquam sit quas facilis quod tenetur quaerat. Excepturi magnam consectetur inventore quibusdam nobis magni minima. Unde harum non aut!
            Sapiente vel in, dolores quae exercitationem vero labore quisquam eveniet sunt rem error? Quo, inventore eum? Repudiandae blanditiis, corporis cupiditate ab ullam eligendi ad quod est necessitatibus, commodi molestias suscipit?
            Totam repellendus inventore voluptate excepturi natus veritatis earum molestiae quae quisquam optio ipsum, nesciunt alias recusandae adipisci tempore officia molestias aspernatur aliquid odit ea cupiditate facilis numquam. Doloremque, dolore optio.
            Beatae natus quos a quisquam dolor nulla mollitia nisi fugit quo distinctio quaerat ullam facilis omnis maxime explicabo, nesciunt pariatur. Fugit architecto sit enim, sequi deleniti sapiente ut ex esse!</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul id="tag-list">
        <?php foreach ($currentPost['tags'] as $tag): ?>
            <li><a href="#"> <?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">categores</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"> <?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>

</aside>

</main>

<?php
include_once("templatess/footer.php")
?>