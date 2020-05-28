<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $Nodes = array("all");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun - testbranch" . PHP_EOL;
        $ModuleHelper::TestFunction();
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run - testbranch" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun - testbranch" . PHP_EOL;
    }
}
