<?php
namespace Bundle\CodeReviewBundle\Controller;
class RepositoryCodeStructureController
{
    /**
     * @DI\Inject @var EngineInterface
     *
     *
     *
     */private $templating;
    /**
     * @DI\Inject @var RepositoryRegistry
     */private $repositoryRegistry;
    /**
     * @DI\Inject("doctrine")  @var ManagerRegistry
     */private $registry;

    public function test() {
        $i = 0;
        for($i=0;$i<10;$i++)
        {var_dump('hallo');}
        for($i=0;$i<10;$i++){var_dump('hallo');}for($i=0;$i<10;$i++){var_dump('hallo');}for($i=0;$i<10;$i++){var_dump('hallo');}
    }


    //////////
}
