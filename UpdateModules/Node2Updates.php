<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $Nodes = array("node2");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun - testbranch - node2" . PHP_EOL;
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run - testbranch - node2" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun - testbranch - node2" . PHP_EOL;
    }
}
