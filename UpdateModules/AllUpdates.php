<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $Nodes = array("all");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun - testbranch - all" . PHP_EOL;
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run - testbranch - all" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun - testbranch - all" . PHP_EOL;
    }
}
