 <?php

defined('TYPO3') || die('🧨');

call_user_func(static function () {
    $object = \Zeroseven\Pagebased\Registration\ObjectRegistration::create('Post')
        ->setClassName(\Zeroseven\PagebasedBlog\Domain\Model\Post::class)
        ->setControllerClass(\Zeroseven\PagebasedBlog\Controller\PostController::class)
        ->setRepositoryClass(\Zeroseven\PagebasedBlog\Domain\Repository\PostRepository::class)
        ->enableTopics(1)
        ->enableContact(1)
        ->enableRelations()
        ->enableTop()
        ->enableTags();

    $category = \Zeroseven\Pagebased\Registration\CategoryRegistration::create('Post-Category')
        ->setClassName(\Zeroseven\PagebasedBlog\Domain\Model\Category::class)
        ->setRepositoryClass(\Zeroseven\PagebasedBlog\Domain\Repository\CategoryRepository::class)
        ->setDocumentType(146);

    $listPlugin = \Zeroseven\Pagebased\Registration\ListPluginRegistration::create('Post list')
        ->setDescription('Display object in a list')
        ->setIconIdentifier('content-bullets');

    $filterPlugin = \Zeroseven\Pagebased\Registration\FilterPluginRegistration::create('Post filter')
        ->setDescription('Filter objects');

    \Zeroseven\Pagebased\Registration\Registration::create('pagebased_blog')
        ->setObject($object)
        ->setCategory($category)
        ->enableListPlugin($listPlugin)
        ->enableFilterPlugin($filterPlugin)
        ->store();
});
