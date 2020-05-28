<?PHP
class UpdaterModule_Node1Update implements UpdaterModule
{
    public $Nodes = array("node1");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun - testbranch - node1" . PHP_EOL;
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run - testbranch - node1" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun - testbranch - node1" . PHP_EOL;
    }
}
