<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $Nodes = array("all");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun - master" . PHP_EOL;
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run - master" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun - master" . PHP_EOL;
    }
}
