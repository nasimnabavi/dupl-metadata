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
        echo $_GET['something'];
        $i = 0;
        for($i=0;$i<10;$i++)
        {var_dump('hallo');}
        for($i=0;$i<10;$i++){var_dump('hallo');}for($i=0;$i<10;$i++){var_dump('hallo');}for($i=0;$i<10;$i++){var_dump('hallo');}
        var_dump("test");
    }
public function test2() {
        
        $i = 0;
        if( ! $i){
            echo 'hallo';
        }

        if (true) { echo 'true';}
    }

    //////////
}
